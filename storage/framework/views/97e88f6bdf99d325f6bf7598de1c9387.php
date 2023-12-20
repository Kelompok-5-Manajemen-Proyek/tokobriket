<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
<title>Register Akun</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">

    <link href="assets/css/register.css" rel="stylesheet">


</head>
<body>
    <div class="register-container"><br>
        <div class="col-md-6 col-md-offset-3">
            <img src="assets/img/logo.png" alt="logo" class="logo">
            <h2 class="text-center">FORM REGISTER USER</h3>
            <?php if(session('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session('message')); ?>

            </div>
            <?php endif; ?>
            <form action="<?php echo e(route('actionregister')); ?>" method="post">
            <?php echo csrf_field(); ?>
                
                <div class="input-container">
                    <label><i class="fa fa-envelope"></i> Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                
                <div class="input-container">
                    <label><i class="fa fa-user"></i> Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                </div>
                
                <div class="input-container">
                    <label><i class="fa fa-key"></i> Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                
                <div class="input-container">
                    <label><i class="fa fa-key"></i> Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>

                <div class="parent">
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i> Register</button>
                <hr>
                <p class="text-center">Sudah punya akun silahkan <a href="login">Login Disini!</a></p>
            </form>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\tokobriket\resources\views/register.blade.php ENDPATH**/ ?>