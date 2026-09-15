<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $data = $request->only(['name', 'email', 'subject', 'message']);

        Log::info('Contact form submitted', ['data' => $data]);

        // Save to database
        Contact::create($data);
        Log::info('Contact saved to database');

        // Attempt to send email to site owner. Do not fail the whole request if mail fails.
        try {
            Log::info('Attempting to send email', ['to' => 'info@assistandpromote.com']);
            Mail::to('info@assistandpromote.com')
                ->send(new ContactMessage($data));
            Log::info('Email sent successfully');
        } catch (\Exception $e) {
            Log::error('Contact mail send failed', ['error' => $e->getMessage()]);
        }

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
