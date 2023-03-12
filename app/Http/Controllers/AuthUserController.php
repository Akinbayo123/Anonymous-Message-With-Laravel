<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\FlareClient\View;
use Illuminate\Support\Facades\Storage;

class AuthUserController extends Controller
{
    
    //
    public function home()
    {
       
        return view('auth_user.home');
    }

    public function settings()
    {
        return view('auth_user.settings');
    }
    public function upload()
    {
        return view('auth_user.upload');
    }
    public function uploadSave(Request $request, User $id)
    {
        $request->validate([
            'image' => 'required', 'image'
        ]);
        if ($id->profile_img) {
            Storage::delete($id->profile_img);
            $image = $request->file('image')->store('public/images');
            $id->update([
                'profile_img' => $image,
            ]);
        } else {
            $image = $request->file('image')->store('public/images');
            $id->update([
                'profile_img' => $image,
            ]);
        }

        return redirect()->route('home')->with('message', 'Image successfully updated');
    }
    public function messages()
    {
        $message = Messages::where('username', Auth::user()->username)->get();
        return view('auth_user.message', compact('message'));
    }

    public function sendmsg(Request $request)
    {
        $username = $request->user;

        return view('auth_user.sendmsg', compact('username'));
    }

    public function send_message(Request $request, $username)
    {
        $request->validate([
            'message' => 'required', 'max:500',
        ]);
        Messages::create([
            'message' => $request->message,
            'username' => $username,
        ]);

        return back()->with('message', 'Your message successfully delivered');
    }
    public function delete_msg(Messages $id)
    {
        $id->delete();
        return back()->with('message', 'Successfully deleted');
    }
}
