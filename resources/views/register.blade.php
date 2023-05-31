<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    
</head>
<body class=" bg-dark text-white text-center">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{route('admin.index')}}" class="nav-link text-white">На главную</a>
        </li>
        
  
      
    </nav>
</div>
  <form action="{{route("reg")}} " method="POST">
<main class="form-signin w-100 m-auto">
  
    @csrf

    <h1 class="h3 mb-3 fw-normal">Регистрация</h1>

    <div class="form-floating text-dark mb-4" width="40" height="32"  >
        <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com">
        <label for="floatingInput">Имя</label>
      </div>
  
      @error('name')
          <p class="text-red-500">{{$message}}</p>
      @enderror

    <div class="form-floating text-dark mb-4" width="40" height="32"  >
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>

    @error('email')
        <p class="text-red-500">{{$message}}</p>
    @enderror

    <div class="form-floating text-dark mb-4">
      <input type="password" class="form-control text-dark" id="password" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    @error('password')
    <p class="text-red">{{$message}}</p>
    @enderror

    <div class="form-floating text-dark ">
        <input type="password" class="form-control text-dark" id="password_confirmation" name="password_confirmation" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

    @error('password_confirmation')
    <p class="text-red-500">{{$message}}</p>
    @enderror

    
    <a href="{{route('aut')}}" class="card-link">Есть аккаунт?</a><br>
    <button class="w-15 btn btn-lg btn-primary"  type="submit">Зарегистрироваться</button>
    
  
</main>
</form>

    
  

</body>
</html>

