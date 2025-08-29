<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Mail\NewsletterConfirmation;
use Illuminate\Support\Facades\Mail;
use function Laravel\Prompts\error;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'email' => 'required|email|unique:subscribers,email',
                'name' => 'nullable|string|max:255',
                'interests' => 'nullable|array',

            ]);

            $subscriber = Subscriber::create([
                'name' => $data['name'] ?? null,
                'email' => $data['email'],
                'interests' => $data['interests'] ?? null,

            ]);

            // Send confirmation email
            Mail::to($subscriber->email)->send(new NewsletterConfirmation($subscriber));

            return back()->with('success', 'Thank you for subscribing!');

        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong. Please try again.' . $e->getMessage());
        }
    }

}
