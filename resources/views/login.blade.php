<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    
    <title>Login</title>

     <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">

</head>
<body>
    <div class="login-container">
        <img src="assets/img/logo.png" alt="logo" class="logo">
        <h1>Selamat Datang</h1>
        <p>Di Toko Arang</p>
        <form method="post" action="{{route('postlogin')}}">
        @csrf
            <div class="input-container">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email Address" required>
            </div>
            
            <div class="input-container">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            
            <div class="parent">
                <button type="submit" class="btn">Login</button>
            <hr>
            <p class="text-center">Belum punya akun? <a href="register">Daftar</a> sekarang !</p>
        </form>
    </div>
</body>
</html>