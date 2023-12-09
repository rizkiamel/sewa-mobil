<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobil</title>
</head>
<body>
    <h1>Aplikasi Sewa Mobil</h1>
    <hr>
    <div style="width:300px;margin:auto;">
        <h2>Data Mobil</h2>
        <p><a href="{{ route('cars-add') }}">Tambah mobil baru</a></p>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Merk</th>
                <th>Model</th>
                <th>Nomor Plat</th>
                <th>Tarif/hari</th>
                <th>Tersedia</th>
            </tr>
            @foreach($cars as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->brand}}</td>
                <td>{{$c->model}}</td>
                <td>{{$c->license_number}}</td>
                <td>{{$c->price}}</td>
                <td>{{$c->available}}</td>
            </tr>
            @endforeach
        </table>
        <p><a href="{{ route('home') }}">Kembali ke halaman utama</a></p>
    </div>
    
</body>
</html>