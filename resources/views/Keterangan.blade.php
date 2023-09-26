<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keterangan</title>
</head>
<body>
    <fieldset>
        <legend>Keterangan</legend>
        <form action="{{ route('keterangan.store') }}" method="post">
            @csrf
            <label for="nama">Nama Keterangan</label>
            <input type="text" name="nama" required>
            <br>
            <button type="submit">Simpan</button>
        </form>
</body>
</html>