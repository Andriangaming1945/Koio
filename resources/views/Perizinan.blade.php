<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perizinan</title>
</head>
<body>
    @if($nama != null)
    <fieldset>
        <legend>Perizinan</legend>
        <form action="{{ route('perizinan.store') }}" method="post" enctype="multipart/form-data">
            @csrf
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
            <input type="file" name="surat_keterangan">
            <br>
            <button type="submit">Simpan</button>
        </form>
    @else
    <h1>Anda belum ada surat keterangan</h1>
    @endif
</body>
</html>