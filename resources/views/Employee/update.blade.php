<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    

    <div class="container">
        <div class="row">
            <h1>Update Form</h1>
            <div class="col-12">
                <form action="{{route('emp.update' , $emp->id)}}" method="post">
                    @csrf
                    @method('Post')
                    <div class="mt-2">
                        <label for="i">ID</label>
                        <input type="number" readonly value="{{$emp->id}}" name="name" id="n" class="form-control">
                    </div>
                    <div class="mt-2">
                        <label for="n">Name</label>
                        <input type="text" value="{{$emp->name}}" name="name" id="n" class="form-control">
                    </div>

                    <div class="mt-2">
                        <label for="e">Email</label>
                        <input type="email" value="{{$emp->email}}" name="email" id="e" class="form-control">
                    </div>

                    <div class="mt-2">
                        <label for="ad">Address</label>
                        <input type="text" value="{{$emp->address}}" name="address" id="ad" class="form-control">
                    </div>

                    <div class="mt-2">
                        <label for="a">Age</label>
                        <input type="number" value="{{$emp->age}}" name="age" id="a" class="form-control">
                    </div>

                    <div class="mt-2">
                      <button type="submit" class="btn btn-info">Submit</button>    
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>