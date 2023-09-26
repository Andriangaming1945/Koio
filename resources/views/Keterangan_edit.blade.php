<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Keterangan</title>
</head>
<body>
    <fieldset>
        <legend>Edit Keterangan</legend>
        <form action="{{ route('keterangan.update', $keterangan->id) }}" method="post">
            @csrf
            @method('PATCH')
            <label for="nama">Nama Keterangan</label>
            <input type="text" name="nama" value="{{ $keterangan->nama }}" required>
            <br>
            <button type="submit">Simpan</button>
        </form>
        <form action="{{ route('keterangan.destroy', $keterangan->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </fieldset>
</body>
</html>