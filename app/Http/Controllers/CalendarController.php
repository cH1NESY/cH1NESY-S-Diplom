<?php

namespace App\Http\Controllers;


use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MeetModel;
use App\Category;

use App\meet_people;





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

        
        // $data = Event::all();
        // dd($data);
        // if (!empty($request->input('date'))){
        //     dd($request->input('date'));
        // }

        //if(request()->ajax()) 
        

        //  $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
        //  $datetime = (!empty($_GET["date"])) ? ($_GET["date"]) : ('');
        //  $title = (!empty($_GET["title"])) ? ($_GET["title"]) : ('');
        //  $people = (!empty($_GET["people"])) ? ($_GET["people"]) : ('');
        //  $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
            //dd($datetime);
        //  $data = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);
         //return Response::json($datetime);
        //}

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

    // public function create(Request $request)
    // {  
    //     $insertArr = [ 'title' => $request->title,
    //                    'start' => $request->start,
    //                    'end' => $request->end
    //                 ];
    //     $event = Event::insert($insertArr);   
    //     return Response::json($event);
    // }
    

    // public function update(Request $request)
    // {   
    //     $where = array('id' => $request->id);
    //     $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
    //     $event  = Event::where($where)->update($updateArr);

    //     return Response::json($event);
    // } 


    // public function destroy(Request $request)
    // {
    //     $event = Event::where('id',$request->id)->delete();
  
    //     return Response::json($event);
    // }    
    }
    public function delete($id){
        $model = MeetModel::find($id);
        $model->delete();
        return redirect()->route('admin.index');
        // dd($model);
    }
    

    public function edit($id)
{
    $review = MeetModel::find($id);
     
    return view('admin.calendar.edit', ['data' => $review]);
}
    
    public function check(Request $request){
        $valid = $request->validate([
            'date' => 'required|min:4|max:100',
            'title' => 'required|min:4|max:100',
            'people' => 'required|min:1|max:500',
        ]);
        // dd($request);
        $review = new MeetModel();
        $review->dateTime = $request->input('date');
        $review->title = $request->input('title');
        $review->people = $request->input('people');

        $review->save();

        return redirect()->route('calendar.index');
     }
     public function editSubmit($id, Request $request){
        $valid = $request->validate([
            'date' => 'required|min:4|max:100',
            'title' => 'required|min:4|max:100',
            'people' => 'required|min:1|max:500',
        ]);
        // dd($request);
        $review = MeetModel::find($id);
        $review->dateTime = $request->input('date');
        $review->title = $request->input('title');
        $review->people = $request->input('people');

        $review->save();

        return redirect()->route('admin.index', $id);

     }

     public function showMeet(Request $request){
        
        return view('people');
    }
    
    public function meet(Request $request){
        $valid = $request->validate([
            'fio' => 'required|min:4|max:100',
            'number' => 'required|min:4|max:100',
            
        ]);
        // dd($request);
        $review = new meet_people();
        $review->fio = $request->input('fio');
        $review->number = $request->input('number');
        $review->meet_model_id = $request->input('meet_id');

        $review->save();

        
        
        
        return redirect(route("admin.index"));
    }
}

