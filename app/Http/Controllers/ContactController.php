<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Contact
        ::create($request->only(['name', 'email', 'subject', 'message']));

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
