<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSubmission;

class WidgetMessageForm extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $company = '';
    public $subject = '';
    public $message = '';

    public $successMessage = '';
    public $messageNumber = '';

    protected $rules = [
        'name' => 'required|string|max:200|min:2',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:40',
        'company' => 'nullable|string|max:200',
        'subject' => 'nullable|string|max:255',
        'message' => 'required|string|max:5000|min:10',
    ];

    protected $messages = [
        'name.required' => 'Please enter your name',
        'name.min' => 'Name must be at least 2 characters',
        'email.required' => 'Please enter your email address',
        'email.email' => 'Please enter a valid email address',
        'message.required' => 'Please enter your message',
        'message.min' => 'Message must be at least 10 characters',
        'message.max' => 'Message cannot exceed 5000 characters',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        try {
            Log::info('Widget message form submission', [
                'name' => $this->name,
                'email' => $this->email,
            ]);

            // Save to database
            $contactMessage = ContactMessage::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone ?: null,
                'company' => $this->company ?: null,
                'subject' => $this->subject ?: null,
                'message' => $this->message,
                'client_ip' => request()->ip(),
                'status' => 'new',
            ]);

            Log::info('Widget message saved', [
                'id' => $contactMessage->id,
                'message_number' => $contactMessage->message_number,
            ]);

            // Try to send email notification (optional)
            try {
                $recipientEmail = env('CONTACT_EMAIL', 'mutwiric00@gmail.com');
                Mail::to($recipientEmail)->send(new ContactSubmission([
                    'name' => $this->name,
                    'email' => $this->email,
                    'phone' => $this->phone,
                    'company' => $this->company,
                    'subject' => $this->subject,
                    'message' => $this->message,
                ], 'widget_message'));

                Log::info('Widget email notification sent');
            } catch (\Exception $e) {
                Log::warning('Widget email notification failed', ['error' => $e->getMessage()]);
            }

            // Set success message
            $this->successMessage = 'Thank you! Your message has been received. We\'ll get back to you soon.';
            $this->messageNumber = $contactMessage->message_number;

            // Reset form
            $this->reset(['name', 'email', 'phone', 'company', 'subject', 'message']);

            // Dispatch browser event for toast notification
            $this->dispatch('show-toast', [
                'type' => 'success',
                'title' => 'Message Sent!',
                'message' => '✅ Thank you! We\'ll get back to you soon.',
            ]);

        } catch (\Exception $e) {
            Log::error('Widget message submission failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            $this->addError('submit', 'An error occurred while submitting your message. Please try again.');

            $this->dispatch('show-toast', [
                'type' => 'error',
                'title' => 'Submission Failed',
                'message' => '❌ There was an error. Please try again.',
            ]);
        }
    }

    public function render()
    {
        return view('livewire.widget-message-form');
    }
}
