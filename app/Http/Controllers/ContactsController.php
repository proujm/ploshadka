<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Mail;
use App\User;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts')
            ->with('horisontalBanners', Banner::randHorisontal(3));
    }

    public function send(Request $request)
    {
//        $user = User::findOrFail($id);
//        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
//            $m->from($user->email, $user->name);
//            $m->to('proujm@gmail.com', 'ploshadka')->subject('Your Reminder!');
//        });
        
        $data = array(
            'name' => "Learning Laravel",
        );

        Mail::send('emails.welcome', $data, function ($message) {
            $message->from('proujm@gmail.com', 'Learning Laravel');
            $message->to('proujm@gmail.com')->subject('Learning Laravel test email');
        });

        return "Your email has been sent successfully";
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

}
