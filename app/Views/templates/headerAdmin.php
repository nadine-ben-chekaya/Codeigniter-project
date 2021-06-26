<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sapnatech</title>
        <!--<link rel="icon" type="image/x-icon" href="<?php echo base_url()?>/startbootstrap-agency-gh-pages/assets/img/favicon.ico" />-->
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url()?>/startbootstrap-agency-gh-pages/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top" style="font-family: 'Sofia';font-size: 22px;">Sapnatech</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php if (session()->get('isLoggedIn')): ?>
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url()?>/projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url()?>/about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url()?>/contacts">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url()?>/dashboard/logout">Logout</a></li>
                    </ul>
                <?php else: ?>
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Projects</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url()?>/users">Login</a></li>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
        