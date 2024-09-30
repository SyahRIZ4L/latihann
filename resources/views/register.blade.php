<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <header class="header">
        <div class="logo">
            <img src="{{asset('Assets/Path_Nihility.webp') }}" alt=logo" class="logo">
            <h1>IXseed Marketplace</h1>
        </div>


        </nav>
    </header>

    <div class="container">
        <!-- Header Section -->
        <div class="logo-container">
            <img src="{{asset('Assets/Item_Key_of_Wisdom.webp') }}" alt="Logo" class="logo">
        </div>

        <!-- Login Box -->
        <div class="login-box">
            <h2>Join IXseed Marketplace</h2>
            <p> all the things you need are here </p>

            <!-- Login Form -->
            <form action="{{ url('register/process') }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="input-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="input-group">
                    <label for="nama_admin" class="form-label">Nama Admin</label>
                    <input type="text" class="form-control" id="nama_admin" name="nama_admin" required>
                </div>

                <button type="submit" class="login-btn">Sigh-Up</Sigh-Up></button>

                <div class="forgot-password">
                    <p a> Have an account? <a href="login" class="p">Login</a></p a>

                </div>
            </form>
        </div>
    </div>
</body>
</html>
