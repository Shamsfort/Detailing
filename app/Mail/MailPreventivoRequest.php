<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailPreventivoRequest extends Mailable
{
    use Queueable, SerializesModels;
    public $info;
    /**
    * Create a new message instance.
    */
    public function __construct($info)
    {
        //
        $this->info = $info;
    }
    
    /**
    * Get the message envelope.
    */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Preventivo Ricevuto!',
        );
    }
    
    /**
    * Get the message content definition.
    */
    public function content(): Content
    {
        return new Content(
            view: 'mail.preventivo-request-mail');
            
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
