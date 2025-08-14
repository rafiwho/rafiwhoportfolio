<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;

    public function __construct($contactData)
    {
        $this->contactData = $contactData;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Form Message: ' . $this->contactData['subject'],
            from: $this->contactData['email'],
            replyTo: $this->contactData['email'],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-form',
            with: [
                'name' => $this->contactData['name'],
                'email' => $this->contactData['email'],
                'subject' => $this->contactData['subject'],
                'message' => $this->contactData['message'],
                'submittedAt' => $this->contactData['submitted_at'],
                'ipAddress' => $this->contactData['ip_address'],
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
