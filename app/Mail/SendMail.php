<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details=[];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        if($this->details['file_path'] != NULL){
            return $this
                    ->subject($this->details['subject'])
                    ->view('emails.'.$this->details['template'])
                    ->attach($this->details['file_path'])
                    ->with(['details'=>$this->details]);
        }
        else{
            return $this->subject($this->details['subject'])
                    ->view('emails.'.$this->details['template'])->with(['details'=>$this->details]);
        }
    }
}
