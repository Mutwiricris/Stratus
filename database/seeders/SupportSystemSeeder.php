<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Department;
use App\Models\CannedResponse;
use App\Models\KnowledgeBaseArticle;
use App\Models\BusinessHour;
use App\Models\ChatWidgetSetting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SupportSystemSeeder extends Seeder
{
    public function run(): void
    {
        // Create Admin User
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@ascendstratus.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'status' => 'online',
        ]);

        // Create Departments
        $sales = Department::create([
            'name' => 'Sales',
            'slug' => 'sales',
            'description' => 'Handle sales inquiries, demos, and pricing questions',
            'email' => 'sales@ascendstratus.com',
            'is_active' => true,
            'order' => 1,
        ]);

        $support = Department::create([
            'name' => 'Technical Support',
            'slug' => 'technical-support',
            'description' => 'Technical assistance for existing customers',
            'email' => 'support@ascendstratus.com',
            'is_active' => true,
            'order' => 2,
        ]);

        $billing = Department::create([
            'name' => 'Billing',
            'slug' => 'billing',
            'description' => 'Payment, invoicing, and subscription queries',
            'email' => 'billing@ascendstratus.com',
            'is_active' => true,
            'order' => 3,
        ]);

        // Create Sample Agents
        User::create([
            'name' => 'Sarah Johnson',
            'email' => 'sarah@ascendstratus.com',
            'password' => Hash::make('password'),
            'role' => 'agent',
            'department_id' => $sales->id,
            'status' => 'online',
        ]);

        User::create([
            'name' => 'Michael Chen',
            'email' => 'michael@ascendstratus.com',
            'password' => Hash::make('password'),
            'role' => 'agent',
            'department_id' => $support->id,
            'status' => 'away',
        ]);

        // Create Canned Responses
        CannedResponse::create([
            'title' => 'Welcome Message',
            'shortcut' => '/welcome',
            'message' => 'Hello! Thank you for reaching out to Ascend Stratus. How can we help you today?',
            'department_id' => null, // Available to all
            'is_active' => true,
        ]);

        CannedResponse::create([
            'title' => 'Pricing Information',
            'shortcut' => '/pricing',
            'message' => "Our pricing varies based on your specific needs:\n\n- Fixed Price Projects: Starting from $5,000\n- Time & Materials: $40-100/hour\n- Dedicated Team: From $3,000/month per developer\n- MVP Package: From $8,000\n\nWould you like to schedule a call to discuss your requirements?",
            'department_id' => $sales->id,
            'is_active' => true,
        ]);

        CannedResponse::create([
            'title' => 'Technical Requirements',
            'shortcut' => '/tech',
            'message' => 'To better assist you, could you please provide:\n\n1. What technology/platform are you using?\n2. What specific issue are you experiencing?\n3. Any error messages you\'re seeing?\n4. Steps to reproduce the issue\n\nThis will help us resolve your issue quickly.',
            'department_id' => $support->id,
            'is_active' => true,
        ]);

        CannedResponse::create([
            'title' => 'Issue Resolved',
            'shortcut' => '/resolved',
            'message' => 'Great! I\'m glad we could resolve your issue. Is there anything else I can help you with today?',
            'department_id' => null,
            'is_active' => true,
        ]);

        CannedResponse::create([
            'title' => 'M-Pesa Integration',
            'shortcut' => '/mpesa',
            'message' => 'We offer full M-Pesa integration including:\n\n- STK Push for payments\n- C2B (Customer to Business) transactions\n- B2C (Business to Customer) payments\n- Transaction status queries\n- Real-time callbacks\n\nIntegration timeline is typically 1-2 weeks. Would you like a detailed quote?',
            'department_id' => $sales->id,
            'is_active' => true,
        ]);

        // Create Knowledge Base Articles
        KnowledgeBaseArticle::create([
            'title' => 'How to Integrate M-Pesa in Your Application',
            'slug' => 'how-to-integrate-mpesa',
            'content' => 'M-Pesa integration involves several steps:\n\n1. Register on Safaricom Daraja Portal\n2. Obtain API credentials (Consumer Key & Secret)\n3. Implement authentication\n4. Configure STK Push\n5. Handle callbacks\n\nContact our team for professional integration services.',
            'category' => 'Integration Guides',
            'keywords' => ['mpesa', 'payment', 'integration', 'safaricom'],
            'is_published' => true,
        ]);

        KnowledgeBaseArticle::create([
            'title' => 'Pricing Models Explained',
            'slug' => 'pricing-models-explained',
            'content' => 'We offer flexible pricing to suit different project needs:\n\n**Fixed Price**: Best for well-defined projects with clear scope.\n\n**Time & Materials**: Ideal for evolving requirements and ongoing development.\n\n**Dedicated Team**: Perfect for long-term partnerships and continuous development.\n\n**MVP Package**: Fast-track your product launch in 6-8 weeks.',
            'category' => 'Billing & Pricing',
            'keywords' => ['pricing', 'cost', 'budget', 'payment'],
            'is_published' => true,
        ]);

        KnowledgeBaseArticle::create([
            'title' => 'What Technologies Do We Use?',
            'slug' => 'technologies-we-use',
            'content' => 'Our tech stack includes:\n\n**Backend**: Laravel, Node.js, Python, Django\n**Frontend**: React, Vue.js, Next.js, Tailwind CSS\n**Mobile**: Flutter, React Native, Swift, Kotlin\n**Database**: MySQL, PostgreSQL, MongoDB, Redis\n**Cloud**: AWS, Google Cloud, DigitalOcean\n**Payments**: M-Pesa, Airtel Money, Stripe, PayPal',
            'category' => 'Technical',
            'keywords' => ['technology', 'stack', 'frameworks', 'tools'],
            'is_published' => true,
        ]);

        // Create Business Hours (Mon-Fri 9AM-6PM EAT)
        $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];
        foreach ($days as $day) {
            BusinessHour::create([
                'day_of_week' => $day,
                'open_time' => '09:00',
                'close_time' => '18:00',
                'is_closed' => false,
            ]);
        }

        // Weekend (Closed)
        BusinessHour::create([
            'day_of_week' => 'saturday',
            'is_closed' => true,
        ]);

        BusinessHour::create([
            'day_of_week' => 'sunday',
            'is_closed' => true,
        ]);

        // Chat Widget Settings
        ChatWidgetSetting::set('welcome_message', 'Hello! Welcome to Ascend Stratus. How can we help you today?');
        ChatWidgetSetting::set('offline_message', 'We\'re currently offline. Please leave a message and we\'ll get back to you within 2 business hours.');
        ChatWidgetSetting::set('widget_color', '#0d9488');
        ChatWidgetSetting::set('ai_enabled', 'true');
        ChatWidgetSetting::set('show_agent_photos', 'true');
        ChatWidgetSetting::set('auto_assign_enabled', 'true');

        $this->command->info('✅ Support system seeded successfully!');
        $this->command->info('📧 Admin: admin@ascendstratus.com');
        $this->command->info('🔑 Password: password');
        $this->command->info('🌐 Access Filament at: /stratus');
    }
}
