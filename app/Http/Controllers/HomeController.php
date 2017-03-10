<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check())
        {
            $user = Auth::user();
            if ($user->hasRole('admin'))
                return view('admin', compact('user'));
            elseif ($user->hasRole('nurse'))
                return view('nurse', compact('user'));
            elseif ($user->hasRole('coordinator'))
                return view('coordinator', compact('user'));
            else
                return view('home', compact('user'));
        }
    }
}
