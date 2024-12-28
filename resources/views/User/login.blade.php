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
                <form action="{{route('user.check')}}" method="post">
                    @csrf
                

                    <div class="mt-2">
                        <label for="e">Email</label>
                        <input type="email" name="email" id="e" class="form-control">
                    </div>

                    <div class="mt-2">
                        <label for="pw">Password</label>
                        <input type="password" name="password" id="pw" class="form-control">
                    </div>
>

                    <div class="mt-2">
                      <button type="submit" class="btn btn-success">Login</button>    
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>