<h2><?= esc($title); ?></h2>


<div class="container">

<?php if (! empty($about) && is_array($about)) : ?>

    <?php foreach ($about as $about_item): ?>
        
        <img src="<?php echo base_url("upload/".$about_item['photo']) ?>"  width="120" height="120"></br>
        <h4>Name:</h4>
        <?php echo   $about_item['name'] ?><br>
        <h4>Disc:</h4>
        <?php echo $about_item['disc'] ?><br>
        <h4>Phone:</h4>
        <?php echo $about_item['telephone'] ?><br>
        <h4>Email:</h4>
        <?php echo $about_item['email'] ?><br>
        <h4>Adresse:</h4>
        <?php echo $about_item['adresse'] ?><br>
        
            
           <?php if (session()->get('isLoggedIn')): ?>
           <a href="<?php echo site_url('about/edit/' . $about_item['id']) ?>" class="btn btn-primary btn-sm" >Edit</a>--
           
           <?php endif; ?>
           
          
           
      

    <?php endforeach; ?>


<?php endif ?>


</div>



