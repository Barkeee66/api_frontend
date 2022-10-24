<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


<!-- Custom styles for this template -->
<link href="dashboard.css" rel="stylesheet">
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px; opacity:0.7;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Login an account</h2>
              <form action="{{route('login-user')}}" method="post">
              @if ($message = Session::get('danger'))
                <div class="alert alert-danger">
                <p>{{ $message }}</p>
                 </div>
              @endif
              @if ($message = Session::get('success'))
                 <div class="alert alert-success">
                 <p>{{ $message }}</p>
                 </div>
              @endif
                  @csrf 
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
                      <span class="text-danger">@error('email') {{$message}} @enderror</span>
                  </div>
                  <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
                      <span class="text-danger">@error('password') {{$message}} @enderror</span>
                  </div>
                  <br>
                  <div class="form_group">
                      <button class="btn btn-block btn-primary" type="submit">Login</button>
                      <a class="btn btn-success" style="width:3cm; float:right;" href="registration">Register</a>

                  </div>
                  <br>
                  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</head>
</html>