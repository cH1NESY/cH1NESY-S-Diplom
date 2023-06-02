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
              <h3 class="card-title">Запись</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('add-meet')}}"  >
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">ФИО</label>
                  <input type="text" name="fio" class="form-control"  is-invalid id="fio"  placeholder="">
                
                </div>
                <input type="hidden" name="meet_id" value="{{$_GET['id']}}">
                <div class="form-group">
                  <label for="exampleInputFile">Номер телефона</label>
                  <div class="input-group">
                    <div class="custom-file">
                      
                        <input type="text" class="form-control" id="number" name="number"  placeholder="">
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
                <button type="submit" class="btn btn-primary">Записаться</button>
              </div>
            </div>
            </form>

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->

  @endsection
