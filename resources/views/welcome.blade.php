<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<h1>Welcome Page of laravel </h1>


{{-- <a href="/about" class="btn btn-info">About</a> --}}
<a href="{{route('about' , '2')}}" class="btn btn-info">About</a>
<a href="{{route('contact')}}" class="btn btn-info">Contact</a>
<a href="{{route('service')}}" class="btn btn-info">Service</a>
<a href="{{route('index.page')}}" class="btn btn-info">Employee</a>
<a href="{{route('user.form')}}" class="btn btn-info">Sign Up</a>