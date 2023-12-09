<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mobil</title>
</head>
<body>
    <h1>Aplikasi Sewa Mobil</h1>
    <hr>
    <div style="width:300px;margin:auto;">
        <h2>Tambah Data Mobil</h2>
        @if($errors->any())
        <div>
            <ul>   
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('savecars') }}" method="post">
            @csrf
            <div>
                <label>Merek</label>
                <input type="text" name="brand" placeholder="Merek" size="40">
            </div>
            <div>
                <label>Model</label>
                <input type="text" name="model" placeholder="Model" size="40">
            </div>
            <div>
                <label>Plat Nomor</label>
                <input type="text" name="license_number" placeholder="Plat Nomor" size="40">
            </div>
            <div>
                <label>Tarif/hari</label>
                <input type="text" name="price" placeholder="Tarif/hari" size="40">
            </div>
            <div>
                <label>Tersedia</label>
                <select name="available">
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
            </div>
            <button type="submit">Simpan</button>
            <p><a href="{{ route('cars') }}">Kembali</a></p>
        </form>
    </div>
    
</body>
</html>