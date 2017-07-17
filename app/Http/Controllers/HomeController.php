<?php

namespace App\Http\Controllers;

use App\User;
use App\Sector;
use App\Sub_sector;

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

        $rec = ['recMsgType' => 'QandA', 
                'recMsgContent' => '奶粉中的dha到底是什么？', 
                'recReason' => '3328人浏览'];

        $recs = [];
        $recs[] = $rec;

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
        if ($option == 'sector' || $option == 'QandA')
        {
            $sectors = Sector::where('name', 'like', '%'.$content.'%')->get();
            foreach ($sectors as $sector)
            {
                $index['name'] = $sector->name;
                $index['type'] = $option;
                $index['attr'] = '行业';
                $index['score'] = '4.7';
                $index['follower'] = '3456';
                $index['id'] = $sector->id;                
                $indexs[] = $index;
            }
            $sectors = Sub_sector::where('name', 'like', '%'.$content.'%')->get();            
            foreach ($sectors as $sector)
            {
                $index['name'] = $sector->name;
                $index['type'] = $option;
                $index['attr'] = '细分行业';
                $index['score'] = '4.2';
                $index['follower'] = '1256';
                $index['id'] = $sector->id;                
                $indexs[] = $index;
            }
        }
        else if ($option == 'brand')
        {

        }
        else if ($option == 'product')
        {

        }

        return view('search.search', ['error' => $error, 'indexs' => $indexs]);
    }

    public function sectorpage($id)
    {
        return view('search.sectorpage');
    }
    /*
    public function subsectorpage($id)
    {
        return view('search.subsectorpage');        
    }
    */
    public function brandpage($id)
    {
        return view('search.brandpage');
    }

    public function productpage($id)
    {
        return view('search.productpage');
    }

    public function QandApage($id)
    {

        return view('search.QandApage');
    }

    public function questionpage($id)
    {
        return view('search.questionpage');
    }

}
