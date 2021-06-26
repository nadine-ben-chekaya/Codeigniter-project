<div class="container">
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
                     <button class="btn btn-success" name="btn-send" >send</button>
              </form>
           </div>
        </div>
     </div>
  </div>
</div>