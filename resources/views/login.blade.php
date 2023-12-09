<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Aplikasi Sewa Mobil</h1>
    <hr>
    
    <div style="width:300px;margin:auto;">
        <h2>Login</h2>
        @if(session('error'))
            <div>
                <b>Error! </b> {{session('error')}}
            </div>
        @endif
        <form action="{{ route('actionlogin') }}" method="post">
            @csrf
            <div>
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" size="40">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" size="40">
            </div>
            <button type="submit">Login</button>
            
            <p>Belum punya akun? Silahkan <a href="{{ route('register') }}">Register</a></p>
        </form>
    </div>
</body>
</html>