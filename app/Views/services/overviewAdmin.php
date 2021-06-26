<h2><?= esc($title); ?></h2>


<div class="container">
<?php if (session()->get('isLoggedIn')): ?>
<a href="<?php echo base_url()?>/services/add" class="btn">Add</a>
<?php else: ?>
<hr>
 <?php endif; ?>

<table class="table table-striped table-dark">
   <thead>
   <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Slug</th>
      <th scope="col">Body</th>
      <th scope="col">Icon</th>
      <th scope="col">Image</th>
      
      <th scope="col"> E-D </th>    
       

   </tr>
   </thead>
   <tbody>
<?php if (! empty($services) && is_array($services)) : ?>

    <?php foreach ($services as $services_item): ?>

       <tr>
           <td> <?= $services_item['id'] ?></td>
           <td><?= $services_item['title'] ?></td>
           <td><?= $services_item['slug'] ?></td>
           <td><?= $services_item['body'] ?></td>
           <td><?= $services_item['icon'] ?></td>
           <td><img src="<?php echo base_url("upload/".$services_item['photo']) ?>"  width="120" height="120"><td>
           
           
           
             
           <td><a href="<?php echo site_url('services/edit/' . $services_item['id']) ?>" class="btn btn-primary btn-sm" >Edit</a>--
           
           <input type="button" onclick="return aa();" class="btn btn-danger btn-sm" value="Delete">
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