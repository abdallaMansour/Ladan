<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Mail\ContactUser;
use App\Mail\ResponseUser;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{

    public function message_create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => ['required', 'phone'],
            'message' => 'required|string|min:10',
        ]);

        try {

            DB::beginTransaction();

            Mail::to('a.mansour.code@gmail.com')->send(new ContactUser(
                $request->name,
                $request->email,
                $request->phone,
                $request->message
            ));
            Mail::to('arte@ladantechnology.com.sa')->send(new ContactUser(
                $request->name,
                $request->email,
                $request->phone,
                $request->message
            ));
            Mail::to('maged@ladantechnology.com.sa')->send(new ContactUser(
                $request->name,
                $request->email,
                $request->phone,
                $request->message
            ));
            Mail::to('info@ladantechnology.com.sa')->send(new ContactUser(
                $request->name,
                $request->email,
                $request->phone,
                $request->message
            ));

            Message::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message
            ]);

            DB::commit();
            return back()->with('success', __('response.success_send_message'));
        } catch (Exception $e) {
            DB::rollback();
            return back()->with('error', $e->getMessage());
        }
    }

    public function message_response(Request $request, $name, $email)
    {

        $request->validate([
            'title' => 'nullable|string|max:50',
            'message' => 'required|string|max:255',
        ]);

        Mail::to($email)->send(new ResponseUser($name, $request->title, $request->message));


        return back();
    }

    public function message_delete($id)
    {
        try {
            Message::find($id)->delete();
            return back();
        } catch (\Throwable $th) {
            return back();
        }
    }
}
