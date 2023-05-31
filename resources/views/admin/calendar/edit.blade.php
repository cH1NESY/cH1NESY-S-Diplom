@extends('admin.layouts.layout')
@section('content')

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


    <div class="container-fluid">
      <div class="row ">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Редактирование встречи</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('edit-event-submit', $data->id)}}"  >
              @csrf
              <div class="card-body">
                <label for="localdate">Дата и время: </label>
                <input type="datetime-local" class="form-control datetimepicker-input" value="{{$data->dateTime}}" id="date" name="date" />
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Название встречи</label>
                  <input type="text" name="title" class="form-control"  is-invalid id="title" value="{{$data->title}}" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Количество человек</label>
                  <div class="input-group">
                    <div class="custom-file">
                      
                        <input type="text" class="form-control" id="people" name="people" value="{{$data->people}}" placeholder="">
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
                <button type="submit" class="btn btn-primary">Сохранить</button>
              </div>
              
            </form>

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->

  @endsection
