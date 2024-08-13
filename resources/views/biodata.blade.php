<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Zulfi</title>
    <link rel="stylesheet" href="{{asset('biodata.css')}}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa;
            margin: 0;
            padding: 0;
        }
        .header {
            background-image: url('Assets/pertengahan1.jpg'); 
            width: 100%;
            color: white;
            padding: 1px 0;
            text-align: center;
        }
        .menu {
            display: flex;
            justify-content: space-around;
            background-color: #0288d1;  
            padding: 7px;
        }
        .menu a {
            color: white;
            text-decoration: none;
            padding: 10px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .menu a:hover {
            background-color: #005f8a;
        }
        .content {
            padding: 15px;
        }

    </style>
</head>
<body>
    <div class="header">
        <h1>Dashboard</h1>

    </div>
    <div class="menu">
        <a href="{{url('dashboard')}}">Home</a>
        <a href="biodata.html">Biodata</a>
        <a href="galeri.html">Galeri</a>
        <a href="login.html">Logout</a>
    </div>
    </div>

    <div class="container">
        <header>
            <div class="background-blur"></div>
            <h2 >Biodata</h2>
        </header>
        <section class="biodata">
            <h3>Informasi pribadi</h3>
            <p><strong>Nama:</strong> Zulfi Syahrizal Rustandie</p>
            <p><strong>Alamat:</strong> Sewon, Bantul</p>
            <p><strong>Tanggal Lahir:</strong> 29 Juli 2007</p>
            <p><strong>Email:</strong> zulfi.syahrizal@gmail.com</p>
            <p><strong>Nomor telepon:</strong> 08XX-XXXX-XXXX</p>

        </section>
        <section class="riwayat">
            <h3>Pendidikan</h3>
            <p><strong>SD :</strong> SD N 3 Jarakan</p>
            <p><strong>SMP :</strong> SMP N 1 Sewon</p>
            <p><strong>SMK :</strong> SMK N 1 Bantul</p>
        </section>
        <section class="riwayat">
            <h3>Pengalaman Kerja</h3>
            <p><strong>Kerja :</strong> Belum selesai sekolah</p>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>


</body>
</html>
