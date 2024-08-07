<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListenerMailable;
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
        return back();
    }
}
