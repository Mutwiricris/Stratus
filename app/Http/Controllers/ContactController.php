<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\CallRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSubmission;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    /**
     * Handle widget message form submission
     */
    public function submitMessage(Request $request)
    {
        Log::info('========== CONTACT MESSAGE SUBMISSION STARTED ==========');
        Log::info('Request data:', $request->all());

        try {
            // Validate input
            $validated = $request->validate([
                'name' => 'required|string|max:200|min:2',
                'email' => 'required|email|max:255',
                'phone' => 'nullable|string|max:40',
                'company' => 'nullable|string|max:200',
                'subject' => 'nullable|string|max:255',
                'message' => 'required|string|max:5000|min:10',
            ], [
                'name.required' => 'Please enter your name',
                'name.min' => 'Name must be at least 2 characters',
                'email.required' => 'Please enter your email address',
                'email.email' => 'Please enter a valid email address',
                'message.required' => 'Please enter your message',
                'message.min' => 'Message must be at least 10 characters',
            ]);

            Log::info('Validation passed', $validated);

            // Save to database
            $contactMessage = ContactMessage::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? null,
                'company' => $validated['company'] ?? null,
                'subject' => $validated['subject'] ?? null,
                'message' => $validated['message'],
                'client_ip' => $request->ip(),
                'status' => 'new',
            ]);

            Log::info('Contact message saved successfully!', [
                'id' => $contactMessage->id,
                'message_number' => $contactMessage->message_number,
                'email' => $validated['email'],
            ]);

            // Try to send email notification (optional - doesn't block submission)
            try {
                $recipientEmail = env('CONTACT_EMAIL', 'mutwiric00@gmail.com');
                Mail::to($recipientEmail)->send(new ContactSubmission($validated, 'widget_message'));
                Log::info('Email sent successfully');
            } catch (\Exception $e) {
                Log::warning('Email notification failed', ['error' => $e->getMessage()]);
            }

            Log::info('Redirecting back with success message');

            return redirect()->back()->with([
                'success' => 'Thank you! Your message has been received. Reference: ' . $contactMessage->message_number,
                'message_number' => $contactMessage->message_number,
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::warning('Validation failed', [
                'errors' => $e->errors(),
            ]);

            return redirect()->back()
                ->withInput()
                ->withErrors($e->errors());

        } catch (\Exception $e) {
            Log::error('Contact message submission FAILED!', [
                'error' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);

            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    }

    /**
     * Handle widget call request form submission
     */
    public function submitCallRequest(Request $request)
    {
        Log::info('========== CALL REQUEST SUBMISSION STARTED ==========');
        Log::info('Request data:', $request->all());

        try {
            // Validate input
            $validated = $request->validate([
                'name' => 'required|string|max:200|min:2',
                'phone' => 'required|string|max:40|min:8',
                'email' => 'nullable|email|max:255',
                'company' => 'nullable|string|max:200',
                'time' => 'nullable|string|max:120',
                'note' => 'nullable|string|max:500',
            ], [
                'name.required' => 'Please enter your name',
                'name.min' => 'Name must be at least 2 characters',
                'phone.required' => 'Please enter your phone number',
                'phone.min' => 'Phone number must be at least 8 characters',
            ]);

            Log::info('Validation passed', $validated);

            // Save to database
            $callRequest = CallRequest::create([
                'name' => $validated['name'],
                'phone' => $validated['phone'],
                'email' => $validated['email'] ?? null,
                'company' => $validated['company'] ?? null,
                'preferred_time' => $validated['time'] ?? null,
                'timezone' => $request->input('timezone', date_default_timezone_get()),
                'note' => $validated['note'] ?? null,
                'client_ip' => $request->ip(),
                'status' => 'pending',
            ]);

            Log::info('Call request saved successfully!', [
                'id' => $callRequest->id,
                'request_number' => $callRequest->request_number,
                'phone' => $validated['phone'],
            ]);

            // Try to send email notification (optional - doesn't block submission)
            try {
                $recipientEmail = env('CONTACT_EMAIL', 'mutwiric00@gmail.com');
                Mail::to($recipientEmail)->send(new ContactSubmission($validated, 'widget_call'));
                Log::info('Email sent successfully');
            } catch (\Exception $e) {
                Log::warning('Email notification failed', ['error' => $e->getMessage()]);
            }

            Log::info('Redirecting back with success message');

            return redirect()->back()->with([
                'success' => 'Thank you! Your call request has been received. Reference: ' . $callRequest->request_number,
                'request_number' => $callRequest->request_number,
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::warning('Call validation failed', [
                'errors' => $e->errors(),
            ]);

            return redirect()->back()
                ->withInput()
                ->withErrors($e->errors());

        } catch (\Exception $e) {
            Log::error('Call request submission FAILED!', [
                'error' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);

            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    }

    /**
     * Handle main contact form submission
     */
    public function submitContactForm(Request $request)
    {
        $submissionId = uniqid('contact_form_', true);
        
        Log::info('Main contact form submission started', [
            'submission_id' => $submissionId,
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'timestamp' => now()->toISOString(),
            'referrer' => $request->header('referer'),
        ]);

        try {
            $data = $request->validate([
                'first_name' => 'required|string|max:100|min:2',
                'last_name' => 'required|string|max:100|min:2',
                'email' => 'required|email|max:255',
                'company' => 'nullable|string|max:200',
                'inquiry_type' => 'nullable|string|max:100',
                'message' => 'required|string|max:5000|min:10',
            ], [
                'first_name.required' => 'Please enter your first name',
                'first_name.min' => 'First name must be at least 2 characters',
                'last_name.required' => 'Please enter your last name',
                'last_name.min' => 'Last name must be at least 2 characters',
                'email.required' => 'Please enter your email address',
                'email.email' => 'Please enter a valid email address',
                'message.required' => 'Please enter your message',
                'message.min' => 'Message must be at least 10 characters',
                'message.max' => 'Message cannot exceed 5000 characters',
            ]);
            
            // Combine first and last name
            $data['name'] = trim($data['first_name'] . ' ' . $data['last_name']);
            
            Log::info('Main contact form validation passed', [
                'submission_id' => $submissionId,
                'name' => $data['name'],
                'email' => $data['email'],
                'company' => $data['company'] ?? 'Not provided',
                'inquiry_type' => $data['inquiry_type'] ?? 'General',
                'message_length' => strlen($data['message']),
                'domain' => substr(strrchr($data['email'], "@"), 1),
            ]);
            
            // Check email configuration
            $this->validateEmailConfig();
            
            // Send email notification
            $recipientEmail = env('CONTACT_EMAIL', 'mutwiric00@gmail.com');
            
            Log::info('Attempting to send main contact form email', [
                'submission_id' => $submissionId,
                'recipient' => $recipientEmail,
                'sender' => $data['email'],
                'mail_driver' => config('mail.default'),
            ]);
            
            Mail::to($recipientEmail)->send(new ContactSubmission($data, 'contact_form'));
            
            Log::info('Main contact form email sent successfully', [
                'submission_id' => $submissionId,
                'recipient' => $recipientEmail,
                'sender_name' => $data['name'],
                'sender_email' => $data['email'],
                'company' => $data['company'] ?? 'N/A',
                'processing_time' => microtime(true) - LARAVEL_START,
            ]);
            
            // Log success to separate channel
            Log::channel('single')->info('CONTACT_SUBMISSION_SUCCESS', [
                'type' => 'contact_form',
                'submission_id' => $submissionId,
                'user_data' => [
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'company' => $data['company'] ?? 'Not provided',
                    'inquiry_type' => $data['inquiry_type'] ?? 'General',
                    'domain' => substr(strrchr($data['email'], "@"), 1),
                    'message_length' => strlen($data['message']),
                ],
                'timestamp' => now()->toISOString(),
                'success' => true,
            ]);
            
            return redirect()->back()->with([
                'success' => 'Thank you for your message! We\'ll get back to you within 24 hours. Reference ID: ' . $submissionId,
                'submission_id' => $submissionId,
                'toast' => [
                    'type' => 'success',
                    'title' => 'Message Sent Successfully!',
                    'message' => '✅ Thank you! We\'ll get back to you within 24 hours.',
                    'duration' => 5000,
                ]
            ]);
            
        } catch (ValidationException $e) {
            Log::warning('Main contact form validation failed', [
                'submission_id' => $submissionId,
                'errors' => $e->errors(),
                'input' => $request->except(['_token']),
                'ip' => $request->ip(),
            ]);
            
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput()
                ->with('toast', [
                    'type' => 'error',
                    'title' => 'Validation Error',
                    'message' => '❌ Please fix the form errors and try again.',
                    'duration' => 5000,
                ]);
                
        } catch (\Exception $e) {
            Log::error('Main contact form email failed to send', [
                'submission_id' => $submissionId,
                'error' => $e->getMessage(),
                'error_code' => $e->getCode(),
                'error_file' => $e->getFile(),
                'error_line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
                'data' => $data ?? null,
                'mail_config' => $this->getMailConfigForLogging(),
            ]);
            
            Log::channel('single')->error('CONTACT_SUBMISSION_FAILED', [
                'type' => 'contact_form',
                'submission_id' => $submissionId,
                'user_data' => [
                    'name' => $data['name'] ?? 'Unknown',
                    'email' => $data['email'] ?? 'Unknown',
                    'company' => $data['company'] ?? 'Not provided',
                    'inquiry_type' => $data['inquiry_type'] ?? 'General',
                    'message_preview' => isset($data['message']) ? substr($data['message'], 0, 100) . '...' : 'No message',
                ],
                'error_summary' => $e->getMessage(),
                'error_type' => get_class($e),
                'timestamp' => now()->toISOString(),
                'success' => false,
            ]);
            
            return redirect()->back()
                ->with([
                    'warning' => 'Your message was received but there was an issue with email notification. We will still review your submission. Reference ID: ' . $submissionId,
                    'submission_id' => $submissionId,
                    'toast' => [
                        'type' => 'warning',
                        'title' => 'Partial Success',
                        'message' => '⚠️ Message received but there was an email issue. We\'ll still review it!',
                        'duration' => 6000,
                    ]
                ])
                ->withInput();
        }
    }

    /**
     * Validate email configuration
     */
    private function validateEmailConfig()
    {
        $requiredConfigs = [
            'MAIL_MAILER' => env('MAIL_MAILER'),
            'MAIL_HOST' => env('MAIL_HOST'),
            'MAIL_USERNAME' => env('MAIL_USERNAME'),
            'MAIL_FROM_ADDRESS' => env('MAIL_FROM_ADDRESS'),
        ];

        foreach ($requiredConfigs as $key => $value) {
            if (empty($value)) {
                throw new \Exception("Email configuration missing: {$key}");
            }
        }
    }

    /**
     * Get mail configuration for logging (without sensitive data)
     */
    private function getMailConfigForLogging()
    {
        return [
            'mailer' => env('MAIL_MAILER'),
            'host' => env('MAIL_HOST'),
            'port' => env('MAIL_PORT'),
            'username' => env('MAIL_USERNAME') ? '***' . substr(env('MAIL_USERNAME'), -10) : null,
            'from_address' => env('MAIL_FROM_ADDRESS'),
            'encryption' => env('MAIL_ENCRYPTION'),
        ];
    }

    /**
     * Check mail configuration status
     */
    private function checkMailConfig()
    {
        return [
            'mailer_set' => !empty(env('MAIL_MAILER')),
            'host_set' => !empty(env('MAIL_HOST')),
            'username_set' => !empty(env('MAIL_USERNAME')),
            'password_set' => !empty(env('MAIL_PASSWORD')),
            'from_address_set' => !empty(env('MAIL_FROM_ADDRESS')),
        ];
    }

    /**
     * Extract country code from phone number
     */
    private function extractCountryCode($phone)
    {
        if (preg_match('/^\+(\d{1,4})/', $phone, $matches)) {
            return '+' . $matches[1];
        }
        return 'Unknown';
    }
}
