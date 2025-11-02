<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

        // Save to database
        Contact::create($data);

        // Attempt to send email to site owner. Do not fail the whole request if mail fails.
        try {
            Mail::to('info@assistandpromote.com')
                ->send(new ContactMessage($data));
        } catch (\Exception $e) {
            // Optionally log the error; keep user experience intact.
            //\Log::error('Contact mail send failed: ' . $e->getMessage());
        }

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
