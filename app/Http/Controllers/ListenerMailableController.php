<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListenerMailableController extends Controller
{
    public function index()
    {
        return view('listener-mailable');
    }

    public function form()
    {
        //
    }
}
