<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListenerMailable;
use App\Mail\listenerMailableMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;

class ListenerMailableController extends Controller
{
    public function index()
    {
        return view('listener-mailable');
    }

    public function form(Request $request)
    {
        $listenerMailable = ListenerMailable::create($request->all());

        event(new Registered($listenerMailable));

        $listenerMailables = ListenerMailable::all();
        foreach ($listenerMailables as $listenerMail) {
            Mail::send($listenerMail)->send(new listenerMailableMail());
        }

        return back();
    }
}
