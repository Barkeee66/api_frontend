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
          <div class="card" style="border-radius: 15px; opacity:0.8; background-color:grey;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create User</h2>
              
              
              <form action="/create-product" method="GET" enctype="multipart/form-data">
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
                      <label for="name">Name</label>
                      <input type="text" class="form-control" placeholder="Enter Name" name="name" value="">
                      <span class="text-danger">@error('name') {{$message}} @enderror</span>
                  </div>
                  <div class="form-group">
                      <label for="text">Slug</label>
                      <input type="text" class="form-control" placeholder="Enter Slug " name="slug" value="">
                      <span class="text-danger">@error('text') {{$message}} @enderror</span>
                  </div>
                  <div class="form-group">
                      <label for="text">Description</label>
                      <input type="text" class="form-control" placeholder="Enter Description" name="description" value="">
                      <span class="text-danger">@error('text') {{$message}} @enderror</span>
                  </div>
                  <div class="form-group">
                      <label for="text">Price</label>
                      <input type="text" class="form-control" placeholder="Enter Price" name="price" value="{{old('email')}}">
                      <span class="text-danger">@error('text') {{$message}} @enderror</span>
                    </div>
                  <br>
                  <div class="form_group">
                  <button type="submit" class="btn btn-primary">Create</button>
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