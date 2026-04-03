<?php

namespace App\Jobs;

use App\Mail\ContactMailEn;
use App\Mail\MesContactMailEN;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class SendContactEmail_EN implements ShouldQueue
{
    use Queueable;

    protected $email_user;
    protected $email_admin;
    protected $data;

    /**
     * Create a new job instance.
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
     */
    public function handle(): void
    {
        //
        Mail::to($this->email_user)->send(new ContactMailEn($this->data));
        Mail::to($this->email_admin)->send(new MesContactMailEN($this->data));
    }
}
