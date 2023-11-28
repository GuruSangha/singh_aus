<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;
use App\Traits\sendMail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    use FileUploadTrait,sendMail;
    public function index(Request $request){

        return view('contactForm');
        
    }
    public function submitContactForm(Request $request){

        //echo '<pre>';print_r($request->all());
        $data = $request->all();
        $file_path = NULL;
        if(isset($data['image']) && !empty($data['image'])){
            $file_path = $this->verifyAndUpload($request);
        }
        $this->EmailSend('gurusangha88@gmail.com','Contact-Us Form','Contact-US',$data,($file_path != NULL) ? public_path($file_path):NULL);
        if($file_path!=NULL){
            unlink($file_path);
        }
        Session::flash('message'); 
        return redirect()->route('home.index');
    }
}
