<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;

class ContactController extends Controller
{
    public function index(){
        return view('pages.contact.index');
     }

     public function send(Request $request){

        $validator = Validator::make($request->all(), [
           'name' => 'required',
           'subject' => 'required',
           'email' => 'required',
           'message' => 'required',
           'g-recaptcha-response' => 'recaptcha',//recaptcha validation
        ]);
        //var_dump($request->all());
        if ($validator->fails()) {
           Session::forget('message');
           return redirect()->Back()->withInput()->withErrors($validator);

        }else{
           Session::put('message','Form submit Successfully.');
           //Session::save();
        }
        //return redirect('/');
        return redirect()->back();
     }
}
