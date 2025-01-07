<?php

namespace App\Http\Controllers;

use App\Jobs\SendContactNotificationJob;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Dispatch the job to process the contact form
        SendContactNotificationJob::dispatch($validatedData);

        return back()->with('success', 'Your message has been sent successfully!');
    }
}