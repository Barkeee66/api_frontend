<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px; opacity:0.7;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>
              
              
              <form action="/register-user" method="GET">
                  @if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif
                  @csrf 
                  <div class="form-group">
                      <label for="name">Full Name</label>
                      <input type="text" class="form-control" placeholder="Enter Full Name" name="name" value="">
                      <span class="text-danger">@error('name') {{$message}} @enderror</span>
                  </div>
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
                      <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>
                  <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{old('password')}}">
                      <span class="text-danger">@error('password') {{$message}} @enderror</span>
                  </div>
                  <div class="form-group">
                      <label for="password_confirmation">Password Confirmation</label>
                      <input type="password" class="form-control" placeholder="Enter Password Confirmation" name="password" value="{{old('password')}}">
                      <span class="text-danger">@error('password') {{$message}} @enderror</span>
                  </div>
                  <br>
                  <div class="form_group">
                      <button class="btn btn-block btn-primary" type="submit" >Registration</button>
                      <a class="btn btn-success" style="width:3cm; float:right;" href="login">Login</a>

                  </div>

          </div>
      </div>
  </div>
            

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</html>