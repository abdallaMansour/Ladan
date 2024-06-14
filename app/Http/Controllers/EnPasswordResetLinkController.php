<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Notifications\ResetPassword;

class EnPasswordResetLinkController extends Controller
{
    public function create (): View {
        return view('en.en-forgot-password');
    }

    
    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        ResetPassword::createUrlUsing(function (User $user, string $token) use($request) {
            return $request->getHost() . '/en/reset-password/'.$token;
            // return 'http://127.0.0.1:8000/en/reset-password/'.$token;
        });

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', 'We have emailed your password reset link.')
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => 'We can\'t find a user with that email address.']);
    }
}
