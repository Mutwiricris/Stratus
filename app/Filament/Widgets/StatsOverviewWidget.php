<?php

namespace App\Filament\Widgets;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\SatisfactionRating;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;

class StatsOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        // Total conversations this month
        $totalConversations = Conversation::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

        // Previous month for comparison
        $previousMonthConversations = Conversation::whereMonth('created_at', now()->subMonth()->month)
            ->whereYear('created_at', now()->subMonth()->year)
            ->count();

        $conversationChange = $previousMonthConversations > 0
            ? (($totalConversations - $previousMonthConversations) / $previousMonthConversations) * 100
            : 0;

        // Average response time (first agent response)
        $avgResponseTime = DB::table('messages')
            ->join('conversations', 'messages.conversation_id', '=', 'conversations.id')
            ->where('messages.sender_type', 'agent')
            ->whereMonth('messages.created_at', now()->month)
            ->whereYear('messages.created_at', now()->year)
            ->selectRaw('AVG(TIMESTAMPDIFF(MINUTE, conversations.created_at, messages.created_at)) as avg_minutes')
            ->value('avg_minutes');

        $avgResponseTimeFormatted = $avgResponseTime ? round($avgResponseTime, 1) . ' mins' : 'N/A';

        // Active conversations (open or pending)
        $activeConversations = Conversation::whereIn('status', ['open', 'pending'])->count();

        // Satisfaction rating (average)
        $avgSatisfaction = SatisfactionRating::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->avg('rating');

        $avgSatisfactionFormatted = $avgSatisfaction ? round($avgSatisfaction, 1) . '/5' : 'N/A';

        // Previous month satisfaction for comparison
        $previousMonthSatisfaction = SatisfactionRating::whereMonth('created_at', now()->subMonth()->month)
            ->whereYear('created_at', now()->subMonth()->year)
            ->avg('rating');

        $satisfactionChange = $previousMonthSatisfaction > 0
            ? (($avgSatisfaction - $previousMonthSatisfaction) / $previousMonthSatisfaction) * 100
            : 0;

        // Active agents (online now)
        $activeAgents = User::whereIn('role', ['agent', 'admin'])
            ->where('status', 'online')
            ->count();

        $totalAgents = User::whereIn('role', ['agent', 'admin'])->count();

        return [
            Stat::make('Total Conversations', $totalConversations)
                ->description($conversationChange >= 0 ? 'Increase from last month' : 'Decrease from last month')
                ->descriptionIcon($conversationChange >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->chart($this->getConversationTrend())
                ->color($conversationChange >= 0 ? 'success' : 'danger'),

            Stat::make('Avg Response Time', $avgResponseTimeFormatted)
                ->description('First agent response')
                ->descriptionIcon('heroicon-m-clock')
                ->color('info'),

            Stat::make('Customer Satisfaction', $avgSatisfactionFormatted)
                ->description($satisfactionChange >= 0 ? 'Up from last month' : 'Down from last month')
                ->descriptionIcon($satisfactionChange >= 0 ? 'heroicon-m-face-smile' : 'heroicon-m-face-frown')
                ->color($avgSatisfaction >= 4 ? 'success' : ($avgSatisfaction >= 3 ? 'warning' : 'danger')),

            Stat::make('Active Conversations', $activeConversations)
                ->description('Open or pending tickets')
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->color('warning'),

            Stat::make('Active Agents', $activeAgents . ' / ' . $totalAgents)
                ->description('Agents online now')
                ->descriptionIcon('heroicon-m-user-group')
                ->color($activeAgents > 0 ? 'success' : 'danger'),
        ];
    }

    private function getConversationTrend(): array
    {
        // Get last 7 days of conversation counts
        $trend = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = now()->subDays($i);
            $count = Conversation::whereDate('created_at', $date)->count();
            $trend[] = $count;
        }
        return $trend;
    }

    public function getPollingInterval(): ?string
    {
        return '30s'; // Refresh every 30 seconds
    }
}
