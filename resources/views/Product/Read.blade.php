<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade Syntax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
   {{'This is the blade template'}} // echo 'Thisis the blade template';  
   {{-- {'Blade Template'} --}}

   {{-- {{'<h1>Headinmg in blade template</h1>'}} --}}
   {!!'<h1>Heading in blade template</h1>'!!}
   <h1>This heading in html</h1>
   
@php
    $array = ['Aliyan' , 'Farhan' , 'Subhan'];
@endphp

   @foreach ($array as $data)
       {{$data}}
   @endforeach

   @if($array)
       
   @else
       
   @endif

</body>
</html>