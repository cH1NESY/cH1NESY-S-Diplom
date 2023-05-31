@extends('admin.layouts.layout')

@section('content')
<<<<<<< HEAD


    <div class="response"></div>
=======
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script> 
@foreach ($events as $event)
<div class="card">
  <div class="card-body">
    <h4 class="card-title">{{$event->title}}</h4>
    
    <p class="card-text">
      {{$event->dateTime}}
    </p>
    <p class="card-text">
      {{$event->people}}
    </p>
    <a href="{{route('delete-event', ['id' => $event->id])}}" class="card-link">Удалить</a>
    <a href="{{route('edit-event', $event->id)}}" class="card-link">Редактировать</a>
  </div>
</div> 
    
@endforeach


    {{-- <div class="response"></div>
>>>>>>> 7287268 (https://github.com/cH1NESY/cH1NESY-S-Diplom.git)
    <div id='calendar'></div>  

<section class="content">
      <div class="container-fluid">
        <div class="row ">
          <div class="col-12">
            <h1></h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fas fa-minus"></i></button>
    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
      <i class="fas fa-times"></i></button>
  </div>




<script src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>

    <script>
    console.log(123123);
$(document).ready(function () {
var SITEURL = "{{url('/')}}";
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

console.log(123245);

var calendar = $('#calendar').fullCalendar({
editable: true,
events: SITEURL + "fullcalendar",
displayEventTime: true,
editable: true,
eventRender: function (event, element, view) {
if (event.allDay === 'true') {
event.allDay = true;
} else {
event.allDay = false;
}
},
selectable: true,
selectHelper: true,
select: function (start, end, allDay) {
var title = prompt('Event Title:');
if (title) {
var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
$.ajax({
url: SITEURL + "fullcalendar/create",
data: 'title=' + title + '&start=' + start + '&end=' + end,
type: "POST",
success: function (data) {
displayMessage("Added Successfully");
}
});
calendar.fullCalendar('renderEvent',
{
title: title,
start: start,
end: end,
allDay: allDay
},
true
);
}
calendar.fullCalendar('unselect');
},
eventDrop: function (event, delta) {
var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
$.ajax({
url: SITEURL + 'fullcalendar/update',
data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
type: "POST",
success: function (response) {
displayMessage("Updated Successfully");
}
});
},
eventClick: function (event) {
var deleteMsg = confirm("Do you really want to delete?");
if (deleteMsg) {
$.ajax({
type: "POST",
url: SITEURL + 'fullcalendar/delete',
data: "&id=" + event.id,
success: function (response) {
if(parseInt(response) > 0) {
$('#calendar').fullCalendar('removeEvents', event.id);
displayMessage("Deleted Successfully");
}
}
});
}
}
});
});
function displayMessage(message) {
$(".response").html("<div class='success'>"+message+"</div>");
setInterval(function() { $(".success").fadeOut(); }, 1000);
}
<<<<<<< HEAD
</script>
=======
</script> --}}
>>>>>>> 7287268 (https://github.com/cH1NESY/cH1NESY-S-Diplom.git)

@endsection 
{{-- @extends('adminlte::page')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}
@stop --}}
{{-- @extends('admin.layouts.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>НЕ РАБОТАЕТ!!!!!!!!!!</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">КАЛЕНДАРЯ НЕТ!!!!</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          Я КАЛЕНДАРЬ ПЕРЕВЕРНУЛ И СНОВА 3-Е сайт
        
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          ЕСТЬ ДЖОРДАНЫ, С ВАС 5000
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection --}}

