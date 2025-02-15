<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="#" class="login-form">
        <h1 class="login-title">Login</h1>

        <div class="input-box">
            <i class='bx bxs-user'></i>
            <input type="text" placeholder="Username">
        </div>
        <div class="input-box">
            <i class='bx bxs-lock-alt'></i>
            <input type="password" placeholder="Password">
        </div>

        <div class="remember-forgot-box">
            <label for="remember">
                <input type="checkbox" id="remember">
                Remember me
            </label>
            <a href="#">Forgot Password?</a>
        </div>

        <button class="login-btn">Login</button>

        <p class="register">
            Don't have an account?
            <a href="#">Register</a>
        </p>
    </form>

</body>
</html>