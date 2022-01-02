<?php

namespace App\Mail;

use App\Models\eRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\Backend\EmailController;

class AutoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(eRequest $eRequest)
    {
        $this->eRequest = $eRequest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->eRequest;
        return $this->view('Backend.mail.mailToHo',compact('data'));
    }
}
