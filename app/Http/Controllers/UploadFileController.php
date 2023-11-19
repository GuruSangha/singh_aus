<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Traits\FileUploadTrait;
use App\Traits\sendMail;

class UploadFileController extends Controller {
   use FileUploadTrait,sendMail;
   public function index() {
      echo storage_path('app/public');
      return view('contactForm');
   }
   public function showUploadFile(Request $request) {
      $validated = $request->validate([
        'image' => 'required|mimes:csv,txt,xlx,xls,pdf,jpg,jpeg,doc,docx,png|max:2048',
    ]);
      $file_path = $this->verifyAndUpload($request);
      $this->EmailSend('gurusangha88@gmail.com','Title','SUBJECT','THis is testing Body',public_path($file_path));
      Echo 'Updated Successfully';
   }
}