<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keterangan</title>
</head>
<body>
    <ul>
        @for ($i = 0; $i < count($keterangan); $i++)
            <li>Id : {{ $keterangan[$i]['id'] }}</li>
            <li>Nama : {{ $keterangan[$i]['nama'] }}</li>
            <li><a href="{{ route('keterangan.edit',$keterangan[$i]['id']) }}">Edit</a></li>
            <br>
            
        @endfor
    </ul>
</body>
</html>