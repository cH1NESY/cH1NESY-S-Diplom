<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autorizate</title>
    
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
</head>
{{-- <body class="text-center">
    
  <main class="form-signin">
    <form style="max-width: 500px; margin:0 auto" class="">
      <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
  
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
  
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
    </form>
  </main>
  
  
      
    
  
  </body> --}}

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
    <form method="POST" action="{{route('aut')}}" style="max-width: 500px; margin:0 auto">
<main class="form-signin w-100 m-auto">
  
    @csrf

    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
<div style="text-align: center">
    <div class="form-floating text-dark mb-4 " width="40" height="32"  >
      <input type="email" class="form-control" style="width:450px"  id="email" name="email" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    @error('email')
        <p class="text-red-500">{{$message}}</p>
    @enderror
    <div class="form-floating text-dark"  >
      <input type="password" class="form-control text-dark" style="width:450px "  id="password" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating text-dark"  >
      <input type="password" class="form-control text-dark" style="width:450px "  id="password" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
</div>
    @error('password')
    <p class="text-red-500">{{$message}}</p>
    @enderror
    
    <a href="{{route('register')}}" class="card-link">Зарегистрироваться</a><br>
    <button class="w-15 btn btn-lg btn-primary"  type="submit">Sign in</button>
    
  
</main>
</form>

    
  

</body>
</html>

