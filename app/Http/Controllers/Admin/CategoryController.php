<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Http\Controllers\Controller;
use App\models\Event;
use Illuminate\Http\Request;
use Redirect,Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    
     public function index()
     {
        $events = [];

        $events[] = Category::event(
            'Event One', // событие заголовок
            true, // вседеневный или однодневный
            '2021-05-07T0800', // дата начала
            '2021-05-07T1200' // дата окончания
        );

        $events[] = Category::event(
            'Event Two',
            false,
            '2021-05-09T0800',
            '2021-05-10T1800'
        );

        $calendar = Category::addEvents($events);

        // return view('calendar', compact('calendar'));
    //      if(request()->ajax()) 
    //      {
  
    //       $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
    //       $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
  
    //       $data = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);
    //       return Response::json($data);
    //      }
    //      return view('admin.calendar.index');
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
     public function create()
     {  
        return view('admin.meet.create');
     }
      
  
    //  public function update(Request $request)
    //  {   
    //      $where = array('id' => $request->id);
    //      $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
    //      $event  = Event::where($where)->update($updateArr);
  
    //      return Response::json($event);
    //  } 
  
  
    //  public function destroy(Request $request)
    //  {
    //      $event = Event::where('id',$request->id)->delete();
    
    //      return Response::json($event);
    //}    
    
    
}
