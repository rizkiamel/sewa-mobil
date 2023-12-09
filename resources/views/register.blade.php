<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Aplikasi Sewa Mobil</h1>
    <hr>
    <div style="width:300px;margin:auto;">
        <h2>Register</h2>
        @if(session('message'))
            <div>
                {{session('message')}}
            </div>
        @endif
        @if($errors->any())
        <div>
            <ul>   
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('actionregister') }}" method="post">
            @csrf
            <div>
                <label>Nama</label>
                <input type="text" name="name" placeholder="Nama" size="40">
            </div>
            <div>
                <label>Alamat</label>
                <input type="textbox" name="address" placeholder="Alamat" size="40">
            </div>
            <div>
                <label>No Telepon</label>
                <input type="text" name="phone" placeholder="No Telepon" size="40">
            </div>
            <div>
                <label>No SIM</label>
                <input type="text" name="driver_license" placeholder="No SIM" size="40">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" size="40">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" size="40">
            </div>
            <button type="submit">Register</button>
            <p>Sudah punya akun? Silahkan <a href="{{ route('login') }}">Login</a></p>
        </form>
    </div>
    
    
</body>
</html>