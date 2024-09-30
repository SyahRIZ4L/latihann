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
            <h1>IXseed Marketplace</h1></div>
    </header>

    <div class="container">
        <!-- Header Section -->
        <div class="logo-container">
            <img src="{{asset('Assets/hai.webp') }}" alt="Logo" class="logo">
        </div>

        <!-- Login Box -->
        <div class="login-box">
            <h2>Log In</h2>
            <p>Don't have an account? <a href="register">Sign Up</a></p>

            <!-- Login Form -->
            <form action="{{ url ('login/process') }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="input-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <button type="submit" class="login-btn">Login</button>

                <div class="forgot-password">
                    <a href="register">Forgot your password?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
