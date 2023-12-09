<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Aplikasi Sewa Mobil</h1>
    <hr>
    <div style="width:300px;margin:auto;">
        <h2>Selamat datang, {{Auth::user()->name}} !</h2>
        <p><a href="{{ route('cars') }}">Manajemen mobil</a></p>
        <p><a href="{{ route('actionlogout') }}">Logout</a></p>
    </div>
    
</body>
</html>