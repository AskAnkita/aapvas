<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The contact data.
     *
     * @var array
     */
    public $data;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = $this->data['subject'] ?? 'New contact message';

        $mail = $this->subject($subject)
            ->view('emails.contact')
            ->with('data', $this->data);

        if (!empty($this->data['email'])) {
            $mail->replyTo($this->data['email']);
        }

        return $mail;
    }
}
