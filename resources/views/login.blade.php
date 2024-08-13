<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZenStore</title>
    <link rel="stylesheet" href="{{asset('login.css')}}">
</head>
<body>
    <div class="login-container">
    <div class="centered-container">
    <div class="logo">

        <img src="{{asset('assets/user.png')}}" alt="Logo">
        <h1>USER LOGIN</h1>
        <form action="{{url('dashboard')}}">
            Username: <input type="text" placeholder=" Masukan Username"><br>
            Password: <input type="password" placeholder=" Masukan Password"><br>
            <input type="submit" value="Login">
        </form>
    </div>

    <div class="container">
        <img src="{{asset('assets/alien1.png')}}" alt="Gambar Bergerak" class="animated-image">
    </div>

</body>
</html>
