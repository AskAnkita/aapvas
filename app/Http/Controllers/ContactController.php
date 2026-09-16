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
            'phone' => 'nullable|string|max:30',
            'message' => 'required|string',
        ]);

        $data = $request->only(['name', 'email', 'phone', 'subject', 'message']);

        // The live contacts table has no phone column; keep the DB write to the
        // original fields and send the phone number through in the email only.
        Contact::create($request->only(['name', 'email', 'subject', 'message']));

        // Attempt to send email to site owner. Do not fail the whole request if mail fails.
        try {
            Mail::to('info@assistandpromote.com')
                ->send(new ContactMessage($data));
        } catch (\Exception) {
            //
        }

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
