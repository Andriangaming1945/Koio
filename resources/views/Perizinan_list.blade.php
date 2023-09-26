<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perizinan</title>
</head>
<body>
    <ul>
        @for ($i = 0; $i < count($perizinan); $i++)
            <li>Id : {{ $perizinan[$i]['user_id'] }}</li>
            <li>Tgl : {{ $perizinan[$i]['tanggal'] }}</li>
            <li>Alasan : {{ $namaizin[$i] }}</li>
            <li>Surat Keterangan : {{ $perizinan[$i]['surat_keterangan'] }}</li>
            <li><a href="{{ route('perizinan.edit',$perizinan[$i]['id']) }}">Edit</a></li>
            <br>
            
        @endfor
    </ul>
</body>
</html>