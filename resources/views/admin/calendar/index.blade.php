@extends('admin.layouts.layout')
@section('content')

<<<<<<< HEAD
=======
{{-- @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
</div> --}}
{{-- @endif --}}
>>>>>>> 7287268 (https://github.com/cH1NESY/cH1NESY-S-Diplom.git)


    <div class="container-fluid">
      <div class="row ">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Создание встречи</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
<<<<<<< HEAD
            <form role="form"method="POST" action="./fullcalendar">
             
              
              <div class="card-body">
                <label for="localdate">Дата и время: </label>
                <input type="datetime-local" class="form-control datetimepicker-input" id="localdate" name="date"/>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Название встречи</label>
                  <input type="text" name="title" class="form-control" @error('title') is-invalid @enderror id="Title" placeholder="Title">
=======
            <form role="form" action="{{route('add-event')}}" method="POST" >
              @csrf
              <div class="card-body">
                <label for="localdate">Дата и время: </label>
                <input type="datetime-local" class="form-control datetimepicker-input" id="date" name="date" />
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Название встречи</label>
                  <input type="text" name="title" class="form-control"  is-invalid id="title" placeholder="">
>>>>>>> 7287268 (https://github.com/cH1NESY/cH1NESY-S-Diplom.git)
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Количество человек</label>
                  <div class="input-group">
                    <div class="custom-file">
                      
<<<<<<< HEAD
                        <input type="text" class="form-control" id="Numberofpeople" placeholder="s">
=======
                        <input type="text" class="form-control" id="people" name="people" placeholder="">
>>>>>>> 7287268 (https://github.com/cH1NESY/cH1NESY-S-Diplom.git)
                    </div>
                    <div class="input-group-append">
                        
                    </div>
                  </div>
                  
                </div>
                <div class="form-check">
                  
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Создать</button>
              </div>
              
            </form>

<<<<<<< HEAD
           
            

          
          
          
                
            
=======
>>>>>>> 7287268 (https://github.com/cH1NESY/cH1NESY-S-Diplom.git)
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
<<<<<<< HEAD
 
=======

>>>>>>> 7287268 (https://github.com/cH1NESY/cH1NESY-S-Diplom.git)
  @endsection
