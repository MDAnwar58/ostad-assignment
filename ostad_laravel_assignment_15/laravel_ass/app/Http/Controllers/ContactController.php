<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send email to predefined address
        Mail::raw($validatedData['message'], function ($message) use ($validatedData) {
            $message->to('your-email@example.com')
                ->subject('New Contact Form Submission')
                ->replyTo($validatedData['email']);
        });

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
