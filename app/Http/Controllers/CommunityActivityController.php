<?php

namespace App\Http\Controllers;

use App\Sector;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
* 
*/
class CommunityActivityController extends Controller
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

    public function askquestion($id)
    {
        $name = Sector::where('id',$id)->first()->name;
        return view('communityQA.askquestion', ['sector_name' => $name]);
    }
}