<?php $__env->startSection('body'); ?>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Toko Arang</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="produk">Produk</a></li>
                    <li><a class="nav-link scrollto" href="blog">Blog</a></li>
                    <li><a class="nav-link scrollto" href="tentangkami">Tentang Kami</a></li>

                    <li><a class="nav-link scrollto"
                            href="home"><?php echo e(auth()->user()->email ?? 'Selamat Datang, Tamu'); ?></a></li>
                    <?php if(auth()->user()): ?>
                        <li><a class="getstarted scrollto" href="logout">Logout</a></li>
                    <?php else: ?>
                        <li><a class="getstarted scrollto" href="login">Login</a></li>
                    <?php endif; ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
<?php $__env->stopSection(); ?>
<?php /**PATH C:\xampp\htdocs\tokobriket\resources\views/navbar/index.blade.php ENDPATH**/ ?>