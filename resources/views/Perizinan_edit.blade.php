<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perizinan Edit</title>
</head>
<body>
    <fieldset>
        <legend>Perizinan</legend>
        <form action="{{ route('perizinan.update',$perizinan['id']) }}" method="post">
            @csrf
            @method('PATCH')
            <label for="user_id">User ID</label>
            <input type="number" name="user_id" value="{{$perizinan['user_id']}}" required>
            <br>
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" value="{{$perizinan['tanggal']}}" required>
            <br>
            <select name="keterangan_id" required>
                @for ($i = 0; $i < count($nama); $i++)
                    <option value="{{ $id[$i] }}">{{ $nama[$i] }}</option>
                    
                @endfor
            </select>
            <br>
            <label for="surat_keterangan">Surat Keterangan</label>
            <textarea name="surat_keterangan" required>{{$perizinan['surat_keterangan']}}</textarea>
            <br>
            <button type="submit">Simpan</button>
        </form>
</body>
</html>