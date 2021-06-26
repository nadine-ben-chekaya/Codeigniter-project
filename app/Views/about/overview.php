<h2><?= esc($title); ?></h2>


<div class="container">
<hr>
<table class="table table-striped table-dark">
   <thead>
   <tr>
      <th scope="col">Id</th>
      <th scope="col">name</th>
     
      <th scope="col">disc</th>
      <th scope="col">telephone</th>
      <th scope="col"> email </th>
      <th scope="col"> adresse </th>
      <th scope="col">logo</th>
   </tr>
   </thead>
   <tbody>
<?php if (! empty($about) && is_array($about)) : ?>

    <?php foreach ($about as $about_item): ?>

       <tr>
           <td> <?= $about_item['id'] ?></td>
           <td><?= $about_item['name'] ?></td>
           <td><?= $about_item['logo'] ?></td>
           <td><?= $about_item['disc'] ?></td>
           <td><?= $about_item['telephone'] ?></td>
           <td><?= $about_item['email'] ?></td>
           <td><?= $about_item['adresse'] ?></td>
           <td><img src="<?php echo base_url("upload/".$about_item['photo']) ?>"  width="120" height="120"></br><td>
            
           <?php if (session()->get('isLoggedIn')): ?>
           <td><a href="<?php echo site_url('about/edit/' . $about_item['id']) ?>" class="btn btn-primary btn-sm" >Edit</a>--
           
           <?php endif; ?>
           
           </td>
           
       </tr>

    <?php endforeach; ?>


<?php endif ?>
</tbody>
</table>
<hr>

</div>







<script type="text/javascript">

function aa(){
if (confirm('Are you sure!')) {
    //swal("Deleted!", "Your imaginary file has been deleted.", "success");
    window.location.href = '<?php echo site_url('services/delete/' . $services_item['id']) ?>';
} 
}
</script>