
        <!-- Masthead-->
        <header class="masthead" style="background-image: url('<?php echo base_url()?>/startbootstrap-agency-gh-pages/assets/img/Yellow4.jpg');">
            <div class="container">
                <div class="masthead-subheading">Welcome!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#contact">Contact Us</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                     <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?php echo base_url()?>/homeAll">see all</a>
                </div>
                <div class="row text-center">
                <?php if (! empty($services) && is_array($services)) : ?>
         
                <?php foreach ($services as $services_item): ?>
                
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                           <!-- <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>-->
                            <i class="<?= $services_item['icon'] ?> fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3"><?= $services_item['title'] ?></h4>
                        <p class="text-muted"><?= $services_item['body'] ?></p>
                    </div>
                    
                
                <?php endforeach; ?>
                <?php endif ?> 
               
                </div>
               
            </div>
            
        </section>
        <!-- Projects Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Projects</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?php echo base_url()?>/homeAllp">see all</a>
                    <hr>
                </div>
                <div class="row">
                    <?php if (! empty($projects) && is_array($projects)) : ?>
         
                    <?php foreach ($projects as $projects_item): ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#<?=$projects_item['title'] ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url("upload/".$projects_item['photo']) ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?=$projects_item['title'] ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?= $projects_item['service_name'] ?></div>
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
                                    <p class="item-intro text-muted"><?= $projects_item['service_name'] ?> project</p>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo base_url("upload/".$projects_item['photo']) ?>" alt="" />
                                    <p><?=$projects_item['body'] ?></p>
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
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted"><?= $about['disc'] ?></h3>
                
                
               
                
            
                <i class="fas fa-phone-alt"></i><?php echo $about['telephone'] ?><br>
       
               <i class="fas fa-envelope"></i> <?php echo $about['email'] ?><br>

               <i class="fas fa-map-marker-alt"></i> <?php echo $about['adresse'] ?><br>
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
        
     
       
  