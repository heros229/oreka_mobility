<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservationConfirmationMailEn extends Mailable
{
    use Queueable, SerializesModels;

    public string $clientName;
    public string $clientEmail;
    public string $clientPhone;
    public string $startDate;
    public string $transactionId;
    public array  $items;
    public int    $total;
    public string $pdfContent;

    public function __construct(
        string $clientName,
        string $clientEmail,
        string $clientPhone,
        string $startDate,
        string $transactionId,
        array  $items,
        int    $total,
        string $pdfContent
    ) {
        $this->clientName    = $clientName;
        $this->clientEmail   = $clientEmail;
        $this->clientPhone   = $clientPhone;
        $this->startDate     = $startDate;
        $this->transactionId = $transactionId;
        $this->items         = $items;
        $this->total         = $total;
        $this->pdfContent    = $pdfContent;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your reservation confirmation – Oreka Mobility #' . $this->transactionId,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.reservation_confirmation_en',
        );
    }

    public function attachments(): array
    {
        return [
            Attachment::fromData(
                fn () => $this->pdfContent,
                'reservation-oreka-' . $this->transactionId . '.pdf'
            )->withMime('application/pdf'),
        ];
    }
}
