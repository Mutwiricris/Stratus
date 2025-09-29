<?php

namespace App\Http\Controllers;

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
        $submissionId = uniqid('widget_msg_', true);
        
        // Log submission start
        Log::info('Widget message submission started', [
            'submission_id' => $submissionId,
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'timestamp' => now()->toISOString(),
            'referrer' => $request->header('referer'),
        ]);

        try {
            // Validate input
            $data = $request->validate([
                'name' => 'required|string|max:200|min:2',
                'email' => 'required|email|max:255',
                'message' => 'required|string|max:5000|min:10',
            ], [
                'name.required' => 'Please enter your name',
                'name.min' => 'Name must be at least 2 characters',
                'name.max' => 'Name cannot exceed 200 characters',
                'email.required' => 'Please enter your email address',
                'email.email' => 'Please enter a valid email address',
                'message.required' => 'Please enter your message',
                'message.min' => 'Message must be at least 10 characters',
                'message.max' => 'Message cannot exceed 5000 characters',
            ]);
            
            // Log successful validation
            Log::info('Widget message validation passed', [
                'submission_id' => $submissionId,
                'name' => $data['name'],
                'email' => $data['email'],
                'message_length' => strlen($data['message']),
                'domain' => substr(strrchr($data['email'], "@"), 1),
            ]);
            
            // Check email configuration
            $this->validateEmailConfig();
            
            // Send email notification
            $recipientEmail = env('CONTACT_EMAIL', 'mutwiric00@gmail.com');
            
            Log::info('Attempting to send widget message email', [
                'submission_id' => $submissionId,
                'recipient' => $recipientEmail,
                'sender' => $data['email'],
                'mail_driver' => config('mail.default'),
            ]);
            
            Mail::to($recipientEmail)->send(new ContactSubmission($data, 'widget_message'));
            
            // Log successful email send
            Log::info('Widget message email sent successfully', [
                'submission_id' => $submissionId,
                'recipient' => $recipientEmail,
                'sender_name' => $data['name'],
                'sender_email' => $data['email'],
                'processing_time' => microtime(true) - LARAVEL_START,
            ]);
            
            // Log success to separate channel for analytics
            Log::channel('single')->info('CONTACT_SUBMISSION_SUCCESS', [
                'type' => 'widget_message',
                'submission_id' => $submissionId,
                'user_data' => [
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'domain' => substr(strrchr($data['email'], "@"), 1),
                    'message_length' => strlen($data['message']),
                ],
                'timestamp' => now()->toISOString(),
                'success' => true,
            ]);
            
            return response()->json([
                'ok' => true,
                'success' => true,
                'message' => 'Thank you! Your message has been sent successfully. We\'ll get back to you within 24 hours.',
                'submission_id' => $submissionId,
                'toast' => [
                    'type' => 'success',
                    'title' => 'Message Sent!',
                    'message' => '✅ Thank you! We\'ll get back to you soon.',
                    'duration' => 4000,
                ]
            ]);
            
        } catch (ValidationException $e) {
            Log::warning('Widget message validation failed', [
                'submission_id' => $submissionId,
                'errors' => $e->errors(),
                'input' => $request->except(['_token']),
                'ip' => $request->ip(),
            ]);
            
            return response()->json([
                'ok' => false,
                'success' => false,
                'message' => 'Please check your input and try again.',
                'errors' => $e->errors(),
                'toast' => [
                    'type' => 'error',
                    'title' => 'Validation Error',
                    'message' => '❌ Please fix the form errors and try again.',
                    'duration' => 5000,
                ]
            ], 422);
            
        } catch (\Exception $e) {
            // Comprehensive error logging
            Log::error('Widget message email failed to send', [
                'submission_id' => $submissionId,
                'error' => $e->getMessage(),
                'error_code' => $e->getCode(),
                'error_file' => $e->getFile(),
                'error_line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
                'data' => $data ?? null,
                'mail_config' => $this->getMailConfigForLogging(),
                'system_info' => [
                    'php_version' => PHP_VERSION,
                    'laravel_version' => app()->version(),
                    'memory_usage' => memory_get_usage(true),
                ],
            ]);
            
            // Log to separate failure channel
            Log::channel('single')->error('CONTACT_SUBMISSION_FAILED', [
                'type' => 'widget_message',
                'submission_id' => $submissionId,
                'user_data' => [
                    'name' => $data['name'] ?? 'Unknown',
                    'email' => $data['email'] ?? 'Unknown',
                    'message_preview' => isset($data['message']) ? substr($data['message'], 0, 100) . '...' : 'No message',
                ],
                'error_summary' => $e->getMessage(),
                'error_type' => get_class($e),
                'timestamp' => now()->toISOString(),
                'success' => false,
            ]);
            
            return response()->json([
                'ok' => false,
                'success' => false,
                'message' => 'Message received but email notification failed. We will still review your message.',
                'submission_id' => $submissionId,
                'toast' => [
                    'type' => 'warning',
                    'title' => 'Partial Success',
                    'message' => '⚠️ Message received but there was an email issue. We\'ll still review it!',
                    'duration' => 6000,
                ],
                'debug_info' => app()->environment('local') ? [
                    'error' => $e->getMessage(),
                    'mail_config_check' => $this->checkMailConfig(),
                ] : null
            ], 500);
        }
    }

    /**
     * Handle widget call request form submission
     */
    public function submitCallRequest(Request $request)
    {
        $submissionId = uniqid('widget_call_', true);
        
        Log::info('Widget call request started', [
            'submission_id' => $submissionId,
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'timestamp' => now()->toISOString(),
            'referrer' => $request->header('referer'),
        ]);

        try {
            // Validate input
            $data = $request->validate([
                'name' => 'required|string|max:200|min:2',
                'phone' => 'required|string|max:40|min:8',
                'time' => 'nullable|string|max:120',
            ], [
                'name.required' => 'Please enter your name',
                'name.min' => 'Name must be at least 2 characters',
                'name.max' => 'Name cannot exceed 200 characters',
                'phone.required' => 'Please enter your phone number',
                'phone.min' => 'Phone number must be at least 8 characters',
                'phone.max' => 'Phone number cannot exceed 40 characters',
                'time.max' => 'Preferred time cannot exceed 120 characters',
            ]);
            
            Log::info('Widget call validation passed', [
                'submission_id' => $submissionId,
                'name' => $data['name'],
                'phone' => $data['phone'],
                'preferred_time' => $data['time'] ?? 'Not specified',
                'phone_country_code' => $this->extractCountryCode($data['phone']),
            ]);
            
            // Check email configuration
            $this->validateEmailConfig();
            
            // Send email notification
            $recipientEmail = env('CONTACT_EMAIL', 'mutwiric00@gmail.com');
            
            Log::info('Attempting to send widget call email', [
                'submission_id' => $submissionId,
                'recipient' => $recipientEmail,
                'caller' => $data['name'],
                'mail_driver' => config('mail.default'),
            ]);
            
            Mail::to($recipientEmail)->send(new ContactSubmission($data, 'widget_call'));
            
            Log::info('Widget call email sent successfully', [
                'submission_id' => $submissionId,
                'recipient' => $recipientEmail,
                'caller_name' => $data['name'],
                'caller_phone' => $data['phone'],
                'processing_time' => microtime(true) - LARAVEL_START,
            ]);
            
            // Log success to separate channel
            Log::channel('single')->info('CONTACT_SUBMISSION_SUCCESS', [
                'type' => 'widget_call',
                'submission_id' => $submissionId,
                'user_data' => [
                    'name' => $data['name'],
                    'phone' => $data['phone'],
                    'preferred_time' => $data['time'] ?? 'Not specified',
                    'phone_country_code' => $this->extractCountryCode($data['phone']),
                ],
                'timestamp' => now()->toISOString(),
                'success' => true,
            ]);
            
            return response()->json([
                'ok' => true,
                'success' => true,
                'message' => 'Thank you! Your call request has been submitted. We will contact you within 2 business hours.',
                'submission_id' => $submissionId,
                'toast' => [
                    'type' => 'success',
                    'title' => 'Call Request Submitted!',
                    'message' => '✅ Thank you! We\'ll call you soon.',
                    'duration' => 4000,
                ]
            ]);
            
        } catch (ValidationException $e) {
            Log::warning('Widget call validation failed', [
                'submission_id' => $submissionId,
                'errors' => $e->errors(),
                'input' => $request->except(['_token']),
                'ip' => $request->ip(),
            ]);
            
            return response()->json([
                'ok' => false,
                'success' => false,
                'message' => 'Please check your input and try again.',
                'errors' => $e->errors(),
                'toast' => [
                    'type' => 'error',
                    'title' => 'Validation Error',
                    'message' => '❌ Please fix the form errors and try again.',
                    'duration' => 5000,
                ]
            ], 422);
            
        } catch (\Exception $e) {
            Log::error('Widget call email failed to send', [
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
                'type' => 'widget_call',
                'submission_id' => $submissionId,
                'user_data' => [
                    'name' => $data['name'] ?? 'Unknown',
                    'phone' => $data['phone'] ?? 'Unknown',
                    'preferred_time' => $data['time'] ?? 'Not specified',
                ],
                'error_summary' => $e->getMessage(),
                'error_type' => get_class($e),
                'timestamp' => now()->toISOString(),
                'success' => false,
            ]);
            
            return response()->json([
                'ok' => false,
                'success' => false,
                'message' => 'Call request received but email notification failed. We will still review your request.',
                'submission_id' => $submissionId,
                'toast' => [
                    'type' => 'warning',
                    'title' => 'Partial Success',
                    'message' => '⚠️ Request received but there was an email issue. We\'ll still call you!',
                    'duration' => 6000,
                ],
                'debug_info' => app()->environment('local') ? [
                    'error' => $e->getMessage(),
                    'mail_config_check' => $this->checkMailConfig(),
                ] : null
            ], 500);
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
