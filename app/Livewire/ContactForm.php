<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSubmission;

class ContactForm extends Component
{
    public $first_name = '';
    public $last_name = '';
    public $email = '';
    public $company = '';
    public $inquiry_type = '';
    public $message = '';

    public $successMessage = '';
    public $messageNumber = '';

    protected $rules = [
        'first_name' => 'required|string|max:100|min:2',
        'last_name' => 'required|string|max:100|min:2',
        'email' => 'required|email|max:255',
        'company' => 'nullable|string|max:200',
        'inquiry_type' => 'nullable|string|max:100',
        'message' => 'required|string|max:5000|min:10',
    ];

    protected $messages = [
        'first_name.required' => 'Please enter your first name',
        'first_name.min' => 'First name must be at least 2 characters',
        'last_name.required' => 'Please enter your last name',
        'last_name.min' => 'Last name must be at least 2 characters',
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
            $fullName = trim($this->first_name . ' ' . $this->last_name);

            Log::info('Livewire contact form submission', [
                'name' => $fullName,
                'email' => $this->email,
            ]);

            // Save to database
            $contactMessage = ContactMessage::create([
                'name' => $fullName,
                'email' => $this->email,
                'company' => $this->company ?: null,
                'inquiry_type' => $this->inquiry_type ?: 'general',
                'message' => $this->message,
                'client_ip' => request()->ip(),
                'status' => 'new',
            ]);

            Log::info('Contact message saved', [
                'id' => $contactMessage->id,
                'message_number' => $contactMessage->message_number,
            ]);

            // Try to send email notification (optional)
            try {
                $recipientEmail = env('CONTACT_EMAIL', 'mutwiric00@gmail.com');
                Mail::to($recipientEmail)->send(new ContactSubmission([
                    'name' => $fullName,
                    'email' => $this->email,
                    'company' => $this->company,
                    'inquiry_type' => $this->inquiry_type,
                    'message' => $this->message,
                ], 'contact_form'));

                Log::info('Email notification sent');
            } catch (\Exception $e) {
                Log::warning('Email notification failed', ['error' => $e->getMessage()]);
            }

            // Set success message
            $this->successMessage = 'Thank you for your message! We\'ll get back to you within 24 hours.';
            $this->messageNumber = $contactMessage->message_number;

            // Reset form
            $this->reset(['first_name', 'last_name', 'email', 'company', 'inquiry_type', 'message']);

            // Dispatch browser event for toast notification
            $this->dispatch('show-toast', [
                'type' => 'success',
                'title' => 'Message Sent Successfully!',
                'message' => '✅ Thank you! We\'ll get back to you within 24 hours.',
            ]);

        } catch (\Exception $e) {
            Log::error('Contact form submission failed', [
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
        return view('livewire.contact-form');
    }
}
