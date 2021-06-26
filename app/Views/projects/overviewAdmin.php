<h2><?= esc($title); ?></h2>


<div class="container">
<?php if (session()->get('isLoggedIn')): ?>
<a href="<?php echo base_url()?>/projects/add" class="btn">Add</a>
<?php endif; ?>
<hr>
<table class="table table-striped table-dark">
   <thead>
   <tr>
      <th scope="col">Id</th>
      <th scope="col">Services</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">project_Image</th>
      
      <?php if (session()->get('isLoggedIn')): ?>
             
             <th scope="col"> E-D </th>    
      <?php endif; ?>

   </tr>
   </thead>
   <tbody>

<?php if (! empty($projects) && is_array($projects)) : ?>

    <?php foreach ($projects as $projects_item): ?>

       <tr>
           <td> <?= $projects_item['id'] ?></td>
           <td> <?= $projects_item['service_name'] ?></td>
           <td><?= $projects_item['title'] ?></td>
           <td><?= $projects_item['body'] ?></td>
           <td><img src="<?php echo base_url("upload/".$projects_item['photo']) ?>"  width="120" height="120"></br></td>
           
            
           <?php if (session()->get('isLoggedIn')): ?>
           <td><a href="<?php echo site_url('projects/edit/' . $projects_item['id']) ?>" class="btn btn-primary btn-sm" >Edit</a>--
           
           <input type="button" onclick="return aa();" class="btn btn-danger btn-sm" value="Delete">
           </td>
           <?php endif; ?>
           
       </tr>

    <?php endforeach; ?>


<?php endif ?>
</tbody>
</table>

</div>


<script type="text/javascript">

function aa(){
if (confirm('Are you sure!')) {
    //swal("Deleted!", "Your imaginary file has been deleted.", "success");
    window.location.href = '<?php echo site_url('projects/delete/' . $projects_item['id']) ?>';
} 
}
</script>