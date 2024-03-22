<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
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
            $mail = new PHPMailer(true);
            //try {

                /* Email SMTP Settings */
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host = 'mail.marinobeach.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'support@marinobeach.com';
                $mail->Password = 'SZB2O7P12Q6V';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = '465';

                $mail->setFrom('support@marinobeach.com','marinobeach');
                $mail->addAddress($request->email);
            //$mail = new PHPMailer(true);
            // try {

            //     /* Email SMTP Settings */
            //     $mail->SMTPDebug = 0;
            //     $mail->isSMTP();
            //     $mail->Host = env('MAIL_HOST');
            //     $mail->SMTPAuth = true;
            //     $mail->Username = env('MAIL_USERNAME');
            //     $mail->Password = env('MAIL_PASSWORD');
            //     $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            //     $mail->Port = env('MAIL_PORT');

            //     $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            //     $mail->addAddress($request->email);

            //     $mail->isHTML(true);

                $mail->Subject = $request->subject;
                $mail->Body    = $request->message;
            //     $mail->Subject = $request->subject;
            //     $mail->Body    = $request->body;

            //     if( !$mail->send() ) {

            //         return back()->with("error", "Email not sent.")->withErrors($mail->ErrorInfo);
            //     }

               //  else {
               //      return back()->with("success", "Email has been sent.");
               //  }
/*
            } catch (Exception $e) {
                    return back()->with('error','Message could not be sent.');
            }
*/
            //     else {
            //         return back()->with("success", "Email has been sent.");
            //     }

            // } catch (Exception $e) {
            //         return back()->with('error','Message could not be sent.');
            // }

            //Session::put('message','Form submit Successfully.');
           //Session::save();
        }
        //return redirect('/');
        //return redirect()->back();
     }
}
