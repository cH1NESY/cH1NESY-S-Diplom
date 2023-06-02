@extends('admin.layouts.layout')

@section('content')



    <div class="response"></div>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script> 
@php

// dd(Auth::user()->roles);
@endphp

@foreach ($events as $event)
<div class="card">
  <div class="card-body">
    <h4 class="card-title">{{$event->title}}</h4>
    
    <p class="card-text">
      {{$event->dateTime}}
    </p>
    <p class="card-text">
      {{$event->recorded()}}/{{$event->people}}
    </p>
    @can('delete-post')
    <a href="{{route('delete-event', ['id' => $event->id])}}" class="card-link">Удалить</a>
    <a href="{{route('edit-event', $event->id)}}" class="card-link">Редактировать</a>
    <a href="{{route('show', $event->id)}}" class="card-link">Список</a>
      
    @endcan
    @if ($event->recorded()<$event->people)
        <a href="{{route('add-meet', ['id' => $event->id])}}" class="card-link">Записаться</a>
      
    @endif
    
    
    
  </div>
</div> 
    
@endforeach
@endsection

  