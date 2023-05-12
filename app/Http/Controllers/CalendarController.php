<?php

namespace App\Http\Controllers;


use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Category;


class CalendarController extends Controller
{
    public function index(Request $request)
    {
        $method = $request->method();

    if ($request->isMethod('post')) {
            dd($request);
    
        }
        if(request()->ajax()) 
        {

         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
         $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');

         $data = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);
         return Response::json($data);
        }
        return view('admin.calendar.index');
    }
   
  
    public function create(Request $request)
    {  
        $insertArr = [ 'title' => $request->title,
                       'start' => $request->start,
                       'end' => $request->end
                    ];
        $event = Event::insert($insertArr);   
        return Response::json($event);
    }
    

    public function update(Request $request)
    {   
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
        $event  = Event::where($where)->update($updateArr);

        return Response::json($event);
    } 


    public function destroy(Request $request)
    {
        $event = Event::where('id',$request->id)->delete();
  
        return Response::json($event);
    }    
    
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'time' => 'required',
        ]);
        Category::create($request->all());
        $request->session()->flash('success');
        return redirect()-> route('admin.index');
     }
}

