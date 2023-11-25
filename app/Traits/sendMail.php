<?php 
namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

trait sendMail {

    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function EmailSend($address,$title='ABC',$subject='Subject',$body_detail=[],$file_path=NULL,$template='sendEmail') {
         $details = [
                'title' => $title,
                'subject' => $subject,
                'template' => $template,
                'file_path' => $file_path,
                'data' => $body_detail
            ];
        Mail::to($address)->send(new \App\Mail\SendMail($details));
    }

}