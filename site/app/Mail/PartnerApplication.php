<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PartnerApplication extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $phone;
    public $lots;
    public $interest;
    public $expectations;
    public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $lots, $interest, $expectations)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->lots = $lots;
        $this->interest = $interest;
        $this->expectations = $expectations;
        $this->subject = "Introducing Broker Application";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->view('email.ibmail');
    }
}
