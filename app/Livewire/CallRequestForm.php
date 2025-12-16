<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CallRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSubmission;

class CallRequestForm extends Component
{
    public $name = '';
    public $phone = '';
    public $email = '';
    public $company = '';
    public $preferred_time = '';
    public $note = '';

    public $successMessage = '';
    public $requestNumber = '';

    protected $rules = [
        'name' => 'required|string|max:200|min:2',
        'phone' => 'required|string|max:40|min:8',
        'email' => 'nullable|email|max:255',
        'company' => 'nullable|string|max:200',
        'preferred_time' => 'nullable|string|max:120',
        'note' => 'nullable|string|max:500',
    ];

    protected $messages = [
        'name.required' => 'Please enter your name',
        'name.min' => 'Name must be at least 2 characters',
        'phone.required' => 'Please enter your phone number',
        'phone.min' => 'Phone number must be at least 8 characters',
        'email.email' => 'Please enter a valid email address',
        'note.max' => 'Note cannot exceed 500 characters',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        try {
            Log::info('Call request form submission', [
                'name' => $this->name,
                'phone' => $this->phone,
            ]);

            // Save to database
            $callRequest = CallRequest::create([
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email ?: null,
                'company' => $this->company ?: null,
                'preferred_time' => $this->preferred_time ?: null,
                'timezone' => date_default_timezone_get(),
                'note' => $this->note ?: null,
                'client_ip' => request()->ip(),
                'status' => 'pending',
            ]);

            Log::info('Call request saved', [
                'id' => $callRequest->id,
                'request_number' => $callRequest->request_number,
            ]);

            // Try to send email notification (optional)
            try {
                $recipientEmail = env('CONTACT_EMAIL', 'mutwiric00@gmail.com');
                Mail::to($recipientEmail)->send(new ContactSubmission([
                    'name' => $this->name,
                    'phone' => $this->phone,
                    'email' => $this->email,
                    'company' => $this->company,
                    'time' => $this->preferred_time,
                    'note' => $this->note,
                ], 'widget_call'));

                Log::info('Call request email notification sent');
            } catch (\Exception $e) {
                Log::warning('Call request email notification failed', ['error' => $e->getMessage()]);
            }

            // Set success message
            $this->successMessage = 'Thank you! Your call request has been received. We\'ll contact you soon.';
            $this->requestNumber = $callRequest->request_number;

            // Reset form
            $this->reset(['name', 'phone', 'email', 'company', 'preferred_time', 'note']);

            // Dispatch browser event for toast notification
            $this->dispatch('show-toast', [
                'type' => 'success',
                'title' => 'Call Request Received!',
                'message' => '✅ Thank you! We\'ll contact you soon.',
            ]);

        } catch (\Exception $e) {
            Log::error('Call request submission failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            $this->addError('submit', 'An error occurred while submitting your request. Please try again.');

            $this->dispatch('show-toast', [
                'type' => 'error',
                'title' => 'Submission Failed',
                'message' => '❌ There was an error. Please try again.',
            ]);
        }
    }

    public function render()
    {
        return view('livewire.call-request-form');
    }
}
