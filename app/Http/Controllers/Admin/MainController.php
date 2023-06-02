<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;


use Illuminate\Http\Response;

use App\MeetModel;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MainController extends Controller
{
    
    public function index(){

        

        // dd (MeetModel::all());
        // if(request()->ajax()) 
        // {

        //  $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
        //  $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');

        //  $data = MeetModel::whereDate('start', '>=', $start)->get(['id','title','start']);
        //  dd($data);
        //  return Response::json($data);
         
        // }
        $events = MeetModel::where('dateTime','>=', 'now()')->get();
        
        return view('admin.index', ['events'=>$events]);
        

    }

   
}
