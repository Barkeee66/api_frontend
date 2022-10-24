<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<section
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center h-130">
        <div class="col-12 col-md-9 col-lg-7 col-xl-10">
          <div class="card" style="border-radius: 15px; opacity:0.9; background-color:#FAEBD7;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Products</h2>
      <a class="btn btn-success" style="width:5cm; " href="create">Create Products</a>
       <br>
       <br>
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
                <table class="table table-hover table-dark table" id="employeeList">
                    <tbody>
                    
                    <thead>
                    <th>Name</th> <label class="validation-error hide" id="fullNameValidationError"></label>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Action</th>
                    </thead>
                    @foreach($products as $data)
                    <tr>
                        <td>{{$data['name']}}</td> 
                        <td>{{$data['slug']}}</td> 
                        <td>{{$data['description']}}</td> 
                        <td>{{$data['price']}}</td> 
                        <td></td>
                        <td></td>
                        <td><a href="{{ url('edit', $data['id'])}}" class="btn btn-secondary">Edit</a></td>
                        <td><a href="{{ url('delete-post', $data['id'] )}} " class="btn btn-danger">Delete</a></td>                       
                     </tr>
                     @endforeach
                    </tbody>
                    
</form>
</div>
</div>
</div>
</div>
</div>

                </table>
                <a href="/logout/{id}" class="btn btn-danger" style="width:3cm; float:right;" >Logout</a>
</body>
</html>