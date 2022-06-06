<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel Advanced</title>
  </head>
  <body>
    
  <div class="container mt-5">
      <div class="row">
          <div class="col-md-12 d-flex justify-content-center">
               
            {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif --}}
            <div class="card" style="width: 50%">
                <div class="card-header">
                 Add Form
                </div>
                <div class="card-body">
                  <form action="{{ route('add.form')}}" method="post">
                   @csrf
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                          <input type="text" name="name" class="form-control" id="staticEmail" >
                          @error('name')
                        <div class="text-danger">{{ $message }}</div>
                       @enderror
                        </div>
                        
                      </div>
                      <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                          <input type="email"  name="email" class="form-control" id="inputPassword">
                          @error('email')
                        <div class="text-danger">{{ $message }}</div>
                       @enderror
                        </div>
                      </div>
                      <button  type="submit" class="btn btn-primary">Save</button>
                  </form>
                 
                </div>
              </div>
          </div>
      </div>
  </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>