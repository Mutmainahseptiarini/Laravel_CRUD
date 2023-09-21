<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mutmainah Septiarini</title>
</head>
<body>
    <h1>Mutmainah Septiarini</h1>
    <h1>SMK N1 sayung, {{$nama}}</h1>

    @if($nama=='admin')
    <a href =""> Ke Halaman USER</a>
    @elseif($nama=='user')
    <a href ="">Ke Halaman ADMIN</a>
    @else
    <h2> Anda bukan ADMIN dan USER</h2>
    @endif

    @switch($i)
    @case(1)
        @break
 
    @case(2)
        Second case...
        @break
 
    @default
     @endswitch
<br>
    
    @foreach ($buah as $nama)
        {{$nama}}</br>
    @endforeach
</body>
</html>