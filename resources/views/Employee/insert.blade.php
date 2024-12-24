<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('store.emp')}}" method="post">
                    @csrf
                    <div class="mt-2">
                        <label for="n">Name</label>
                        <input type="text" name="name" id="n" class="form-control">
                    </div>

                    <div class="mt-2">
                        <label for="e">Email</label>
                        <input type="email" name="email" id="e" class="form-control">
                    </div>

                    <div class="mt-2">
                        <label for="ad">Address</label>
                        <input type="text" name="address" id="ad" class="form-control">
                    </div>

                    <div class="mt-2">
                        <label for="a">Age</label>
                        <input type="number" name="age" id="a" class="form-control">
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