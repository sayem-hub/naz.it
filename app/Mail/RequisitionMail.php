<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Requisition;

class RequisitionMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
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
        $requisition = $this->data;
        return $this->subject("Requisition for $requisition[item_names] for $requisition[required_for], $requisition[designation] ($requisition[department])")->view('Backend.mail.requisitionMail',compact('requisition'));
//        return $this->subject("Requisition for $requisition[item_names] for $requisition[required_for] for Local purchase")->view('Backend.mail.requisitionMail',compact('requisition'));
    }
}
