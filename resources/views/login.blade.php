<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page login</title>
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="nama">Nama:</label>
        <input type="text" id="nip" name="nip" required>

        <label for="nip">NIP:</label>
        <input type="text" id="nip" name="nip" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <button type="submit">Login</button>
    </form>
    
</body>
</html>