<div class="container">
<?php if (! empty($services) && is_array($services)) : ?>

<?php foreach ($services as $services_item): ?>

  <div class="card" style="width:400px">
    <img class="card-img-top" src="<?php echo base_url("upload/".$services_item['photo']) ?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><?= $services_item['title'] ?></h4>
      <p class="card-text"><?= $services_item['body'] ?></p>
      
    </div>
  </div>
  <br>
  <?php endforeach; ?>


<?php endif ?>

  </div>
