<?php

namespace App\Mail;

use App\Models\BloodRequest;
use App\Models\Donor;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BloodRequestMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user;
    public $request;
    public $donor;
    public function __construct(BloodRequest $request,User $user,Donor $donor)
    {
        $this->user = $user;
        $this->request = $request;
        $this->donor = $donor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.blood_request')->subject("Blood Request");
    }
}
