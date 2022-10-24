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
          <div class="card" style="border-radius: 15px; opacity:0.8;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Edit an account</h2>
                        <h2></h2>
                    </div>
                    <div class="card-body">
                    <form action=" /ApiEdit/{{$product['id'] }}" method="GET" enctype="multipart/form-data">
                      <input value="{{  $product['id'] }}" hidden name='id'>
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
                            <div class="mb-3">
                                <label class="form-label" >Name</label>
                                <input type="text" class="form-control" value="{{$product['name']}}" name="name" placeholder="Enter Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" >Slug</label>
                                <input type="text" class="form-control" value="{{$product['slug']}}" name="slug" placeholder="Enter Slug">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" >Description</label>
                                <input type="text" class="form-control" value="{{$product['description']}}" name="description" placeholder="Enter Description">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" >Price</label>
                                <input type="text" class="form-control" value="{{$product['price']}}" name="price" placeholder="Enter Price">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</html>