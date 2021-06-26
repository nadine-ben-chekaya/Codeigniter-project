<div class="container">
<?php if (! empty($projects) && is_array($projects)) : ?>

<?php foreach ($projects as $projects_item): ?>
  <h4>Service: <?= $projects_item['service_name'] ?> </h4>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="<?php echo base_url("upload/".$projects_item['photo']) ?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><?=$projects_item['title'] ?></h4>
      <p class="card-text"><?= $projects_item['body'] ?></p>
      
    </div>
  </div>
  <br>
  <?php endforeach; ?>


<?php endif ?>

  </div>
