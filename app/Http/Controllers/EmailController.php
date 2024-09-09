<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        /**
         * Validate the fields of the form.
         */
        $request->validate([
            'subject' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ], [
            'subject.required' => 'Subject harus diisi!',
            'name.required' => 'Nama harus diisi!',
            'email.required' => 'Email harus diisi!',
            'email.email' => 'Email tidak valid!',
            'message.required' => 'Pesan harus diisi!',
        ]);

        /**
         * Store a receiver email address to a variable.
         */
        $reveiverEmailAddress = "mailgunr@tira.my.id";

        /**
         * Import the Mail class at the top of this page,
         * and call the to() method for passing the
         * receiver email address.
         *
         * Also, call the send() method to incloude the
         * SendMail class that contains the email template.
         */
        Mail::to($reveiverEmailAddress)->send(new SendMail(
            $request->subject,
            $request->name,
            $request->email,
            $request->message,
        ));

        /**
         * Check if the email has been sent successfully, or not.
         * Return the appropriate message.
         */
        if (Mail::flushMacros()) {
            return redirect()->route('kontak')->with('error', 'Email has not been sent!');
        }
        return redirect()->route('kontak')->with('success', 'Email has been sent successfully!');
    }
}
