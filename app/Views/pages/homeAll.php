<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="<?php echo base_url()?>/startbootstrap-agency-gh-pages/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url()?>/startbootstrap-agency-gh-pages/css/styles.css" rel="stylesheet" /> 
        <link href="<?php echo base_url()?>/assets/style.css" rel="stylesheet" />
    </head>
    <body id="page-top" style="background-color:red;">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top" style="font-family: 'Sofia';font-size: 33px;">Sapnatech</a>
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

             <!-- services-->
            <!-- <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                  <?php if (! empty($services) && is_array($services)) : ?>
                  <?php foreach ($services as $services_item): ?>
                    <li>
                        
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo base_url("upload/".$services_item['photo']) ?>" alt="" /></div>
                        
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                               
                                <h4 class="subheading"><?= $services_item['title'] ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?= $services_item['body'] ?></p></div>
                        </div>
                    </li>
                  <?php endforeach; ?>
                  <?php endif ?> 
                   
                    <li class="timeline-inverted" >
                        <div class="timeline-image" >
                          
                           <a href="#services"><i class="fas fa-angle-double-up fa-10x" ></i></a> 
                            
                        </div>
                    </li>
                </ul>
            </div>
        </section>-->
  <!-- Projects Grid-->
  <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">All Services</h2>
                    
                </div>
                <div class="row">
                    <?php if (! empty($services) && is_array($services)) : ?>
         
                    <?php foreach ($services as $services_item): ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#<?= $services_item['title'] ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url("upload/".$services_item['photo']) ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?= $services_item['title'] ?></div>
                               <!-- <div class="portfolio-caption-subheading text-muted"><?= $projects_item['service_name'] ?></div>-->
                            </div>
                        </div>
                    </div>
                    
                    <!-- Model Project-->
          <div class="portfolio-modal modal fade" id="<?=$projects_item['title'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
             <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="<?php echo base_url()?>/startbootstrap-agency-gh-pages/assets/img/close-icon.svg" alt="Close modal" /></div>
                      <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?=$projects_item['title'] ?></h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo base_url("upload/".$projects_item['photo']) ?>" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                    <!-- Model Project end-->
               <?php endforeach; ?>
               <?php endif ?>
                 
              </div>
           </div>
        </section>



         <!-- Contact-->
         <section class="page-section" id="contact">
            <<div class="container">
  <div class="row">
     <div class="col-lg-6 m-auto">
        <div class="card">
           <div class="card-title">
              <h2 class="text-center py-2">Contact Us</h2>
              <hr>
           </div>
           <div class="card-body">
              <form method="post" action="<?php echo base_url()?>/contacts/save">
                     <input type="text" name="nom" placeholder="First Name" class="form-control mb-2">
                     <input type="text" name="prenom" placeholder="Last Name" class="form-control mb-2">
                     <input type="text" name="email" placeholder="Email" class="form-control mb-2">
                     <input type="text" name="objet" placeholder="subject" class="form-control mb-2">
                     <textarea name="message" class="form-control" placeholder="Write the message"></textarea>
                     <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
              </form>
           </div>
        </div>
     </div>
  </div>
</div>
        </section>
            <!-- Footer-->
       <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/nadinebenchekaya/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/profile.php?id=100004814650427"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/nadine-ben-chekaya-2b86851a2/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
       
      <!-- Bootstrap core JS-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="<?php echo base_url()?>/startbootstrap-agency-gh-pages/assets/mail/jqBootstrapValidation.js"></script>
        <script src="<?php echo base_url()?>/startbootstrap-agency-gh-pages/assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url()?>/startbootstrap-agency-gh-pages/js/scripts.js"></script>
    </body>
</html>