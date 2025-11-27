<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMe;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use RuntimeException;

class ContactController extends Controller
{
    public function store(ContactRequest $request): RedirectResponse|JsonResponse
    {
        $validated = $request->validated();
        $recipient = config('mail.contact_recipient') ?? config('mail.from.address');

        if (empty($recipient)) {
            throw new RuntimeException('Mail recipient is not configured.');
        }

        Mail::to($recipient)->send(new ContactMe($validated));

        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Yêu cầu liên hệ đã được gửi.',
            ]);
        }

        return back()->with('status', 'Yêu cầu liên hệ đã được gửi.');
    }
}

