<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perizinan</title>
</head>
<body>
    <fieldset>
        <legend>Perizinan</legend>
        <form action="{{ route('perizinan.store') }}" method="post">
            @csrf
            <label for="user_id">User ID</label>
            <input type="number" name="user_id" required>
            <br>
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" required>
            <br>
            <label for="keterangan_id">Keterangan ID</label>
            <select name="keterangan_id" required>
                @for ($i = 0; $i < count($nama); $i++)
                    <option value="{{ $id[$i] }}">{{ $nama[$i] }}</option>
                    
                @endfor
            </select>
            <br>
            <label for="surat_keterangan">Surat Keterangan</label>
            <textarea name="surat_keterangan" required></textarea>
            <br>
            <button type="submit">Simpan</button>
        </form>
</body>
</html>