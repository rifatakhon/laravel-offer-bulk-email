<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index(Request $request)

    {
        // Split emails by comma, trim spaces
        $emails = array_map('trim', explode(',', $request->emails));

        $mailData = [
            'title'       => $request->title,
            'body'        => $request->body,
            'button_text' => $request->button_text,
            'button_url'  => $request->button_url,
        ];

         
        // update it with your dynamic mail or static mail(receiver)
        // Mail::to('root.cse22@gmail.com')->send(new DemoMail($mailData));
        foreach ($emails as $email) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                Mail::to($email)->send(new DemoMail($mailData));
            }
        }

           

        return back()->with('success', 'Emails sent successfully!');

    }
}
