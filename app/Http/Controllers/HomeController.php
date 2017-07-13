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

        //$recs = arrat();
        $rec = ['recMsgType' => 'QandA', 
                'recMsgContent' => '奶粉中的dha到底是什么？', 
                'recReason' => '3328人浏览'];

        $recs = [];
        //array_push($recs, $rec);
        $recs[] = $rec;
        //$recommendMsg = array();
        //$recommendMsg[] = $rec;
        //echo $recs;

        return view('home', ['users' => $users, 'recs' => $recs]);
    }

    public function mymsg()
    {
        $auth = Auth::user();  
        return view('mymsg', ['thisAuth' => $auth]);
    }

    public function search()
    {
        $error = 0;
        $content = $_POST['searchContent'];
        if ($content== "")
        {
            $error = 1;     // empty search content
        }
        if (isset($_POST['options']))
        {
            $option = $_POST['options'];//'QandA';
        }
        else
        {
            $option = 'QandA';
        }
        $indexs = [];
        $index = ['name' => $content, 
                'type' => $option, 
                'score' => '85',
                'id' => '5'];
        $indexs[] = $index;
        if ($option == 'sector')
        {

        }
        else if ($option == 'brand')
        {

        }
        else if ($option == 'product')
        {

        }
        else if ($option == 'QandA')
        {

        }

        return view('search.search', ['error' => $error, 'indexs' => $indexs]);
    }

    public function sectorpage()
    {
        return view('search.sectorpage');
    }

}
