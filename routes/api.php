<?php

use App\Http\Controllers\Api\CallRequestController;
use App\Http\Controllers\Api\ContactMessageController;
use App\Http\Controllers\Api\InquiryController;
use App\Http\Controllers\Api\LiveChatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Live Chat API Routes (No authentication required for customers)
Route::prefix('chat')->group(function () {
    // Start a new conversation
    Route::post('/start', [LiveChatController::class, 'startConversation']);

    // Send a message to an existing conversation
    Route::post('/{conversation}/message', [LiveChatController::class, 'sendMessage']);

    // Get new messages (for polling)
    Route::get('/{conversation}/messages', [LiveChatController::class, 'getMessages']);

    // Get conversation status
    Route::get('/{conversation}/status', [LiveChatController::class, 'getStatus']);

    // Mark messages as seen
    Route::post('/{conversation}/seen', [LiveChatController::class, 'markAsSeen']);
});

// NOTE: Contact form routes moved to web.php to use normal Laravel form submissions
// NOT using API routes - using web routes with ContactController instead
