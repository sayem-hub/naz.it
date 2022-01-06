<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HREmailIdNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($createdIds)
    {
        $this->createdIds = $createdIds;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
            {

                $data = $this->createdIds;
                return $this->subject('A new email account has been created! ')->view('Backend.mail.mailToNazNewMailId',compact('data'));

    }
}
