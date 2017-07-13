<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // here is an example of how to pass db data to view
        $users = User::all();
        $auth = Auth::user();        
        return view('home', ['users' => $users, 'thisAuth' => $auth]);
    }

    public function search()
    {
        return view('search.search');
    }

    public function mymsg()
    {
        $auth = Auth::user();  
        return view('mymsg', ['thisAuth' => $auth]);
    }
}
