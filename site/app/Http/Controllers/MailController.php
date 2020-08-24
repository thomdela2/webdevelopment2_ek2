<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Newsletter;

class MailController extends Controller
{
    //

    public function getMail() {
        return view('pages.mail');
    }

    public function postMail(Request $r) {

        $data = [
            'email' => $r->emailaddress,
            'subject' => $r->subject,
            'content' => $r->content,
        ];



        Mail::send('mails.mail', $data, function ($msg) use($r) {
            $msg->to($r->emailaddress);
            $msg->cc('thomdela2@student.arteveldehs.be', 'Thomas Delahaye');
            $msg->subject($r->subject);
            // $msg->priority(3);
            // $msg->attach('pathToFile');
        });

        return redirect()->route('contact');
    }

    public function postSignup(Request $r) {

        $data = [
            'email' => $r->emailaddress,
        ];

        Mail::send('mails.signup', $data, function ($msg) use($r) {
            $msg->to($r->emailaddress);
            $msg->cc('thomdela2@student.arteveldehs.be', 'Thomas Delahaye');
            $msg->subject('Signup succeed');
            // $message->priority(3);
            // $message->attach('pathToFile');
        });

        Newsletter::subscribe($r->emailaddress);

        return redirect()->route('home.index');
    }

}
