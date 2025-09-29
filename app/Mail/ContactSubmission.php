<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ContactSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;
    public $submissionType;
    public $submissionId;

    /**
     * Create a new message instance.
     */
    public function __construct($contactData, $submissionType = 'message')
    {
        $this->contactData = $contactData;
        $this->submissionType = $submissionType;
        $this->submissionId = uniqid('contact_', true);
        
        // Log email creation
        Log::info('ContactSubmission email created', [
            'submission_id' => $this->submissionId,
            'type' => $submissionType,
            'recipient_email' => $contactData['email'] ?? 'N/A',
            'sender_name' => $contactData['name'] ?? 'N/A'
        ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subjects = [
            'call' => 'New Call Request - Ascend Stratus',
            'contact_form' => 'New Contact Form Submission - Ascend Stratus',
            'message' => 'New Contact Message - Ascend Stratus',
            'widget_message' => 'New Widget Message - Ascend Stratus',
            'widget_call' => 'New Widget Call Request - Ascend Stratus'
        ];
        
        $subject = $subjects[$this->submissionType] ?? 'New Contact Submission - Ascend Stratus';
        
        Log::info('Email envelope created', [
            'submission_id' => $this->submissionId,
            'subject' => $subject,
            'reply_to' => $this->contactData['email'] ?? null
        ]);
            
        return new Envelope(
            subject: $subject,
            replyTo: isset($this->contactData['email']) ? [$this->contactData['email']] : null,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        Log::info('Email content being rendered', [
            'submission_id' => $this->submissionId,
            'view' => 'emails.contact-submission'
        ]);
        
        return new Content(
            view: 'emails.contact-submission',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
