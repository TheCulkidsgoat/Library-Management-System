<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Book;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class BookInfo extends Mailable
{
    use Queueable, SerializesModels;

    public $book;


    public function __construct(Book $book)
    {
        $this->book = $book;
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Note Created: ' . $this->book->title,
        );
    }


    public function content(): Content
    {
        return new Content(
            view: 'mail.LibraryDetails',  // Use 'view' instead of 'markdown'
            with: ['book' => $this->book]
        );
    }

    
    public function attachments(): array
    {
        return [];
    }
}
