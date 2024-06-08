<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ContactSetting;
use App\Models\Message;

class DashboardController extends Controller
{
    public function index()
    {
        $user_count = User::count();
        $message_count = Message::count();
        return view('dashboard', ['user_count' => $user_count, 'message_count' => $message_count]);
    }

    public function users()
    {
        $users = User::where('email', '!=', env('ADMIN_EMAIL', 'admin@app.com'))->paginate();
        return view('dashboard.users', [
            'users' => $users,
        ]);
    }

    public function user_delete($id)
    {
        try {
            User::find($id)->delete();
            return back();
        } catch (\Throwable $th) {
            return back();
        }
    }

    public function messages ()
    {
        $messages = Message::paginate();

        return view('dashboard.messages', [
            'messages' => $messages,
        ]);
    }

    public function settings()
    {
        $contact_settings = ContactSetting::first();
        return view('dashboard.settings', [
            'contact_setting' => $contact_settings,
        ]);
    }
}
