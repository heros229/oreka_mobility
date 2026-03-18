<?php

namespace App\Jobs;

use App\Mail\ContactMail;
use App\Mail\MesContactMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendContactEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email_user;
    protected $email_admin;
    protected $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email_user, $email_admin,  $data)
    {
        //
        $this->email_user = $email_user;
        $this->email_admin = $email_admin;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        // Envoyer l'e-mail
        Mail::to($this->email_user)->send(new ContactMail($this->data));
        Mail::to($this->email_admin)->send(new MesContactMail($this->data));
        //Mail::to('mayersessinou@gmail.com')->send(new MesContactMail($this->data));
    }
}
