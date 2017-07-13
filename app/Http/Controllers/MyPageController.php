<?php

namespace App\Http\Controllers;

use App\User;
use App\Shopping_note;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyPageController extends Controller
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
        // here is an example of how to pass db data to view
        $users = User::all();
        $notes = Shopping_note::orderBy('bought_at', 'desc')->get();
        return view('mypage.homepage', ['users' => $users, 'notes' => $notes]);
    }

    public function createnote()
    {
        //echo $_POST['product_name'];  handle shopping_notes database before jump to view
        if (isset($_POST['bought_at']))
        {
            $new_note = new Shopping_note;
            $new_note->user_id = Auth::user()->id;
            $new_note->bought_at = $_POST['bought_at'];//date('Y-m-d');
            $new_note->product_channel_id = '1';
            //$new_note->qulity_id = 1;
            //$new_note->rate_no = 1;
            $new_note->save();
        }
        //index();
        return view('mypage.homepage');
    }

    public function myfollow()
    {
        // here is an example of how to pass db data to view
        $users = User::all();
        $auth = Auth::user();
        return view('mypage.myfollow', ['users' => $users, 'thisAuth' => $auth]);
    }

    public function myQA()
    {
        // here is an example of how to pass db data to view
        $users = User::all();
        $auth = Auth::user();
        return view('mypage.myQA', ['users' => $users, 'thisAuth' => $auth]);
    }

    public function shoppingnote($id)
    {
        // here is an example of how to pass db data to view
        // if $id = 0, create new note, otherwise update note
        if ($id != 0)
        {
            $note = Shopping_note::where('id', $id)->first();
        }
        else
        {
            $note = new Shopping_note;
            $note->user_id = Auth::user()->id;
            $note->bought_at = date('Y-m-d');
        }
        return view('mypage.shoppingnote', ['noteid' => $id, 'note' => $note]);
    }
}
