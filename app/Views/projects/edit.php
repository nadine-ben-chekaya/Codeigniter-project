
<div class="container">
   <div class="row">
      <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper" >
        <div class="container">
      <h1>Edit Projects</h1>

<form method="post" action="<?php echo base_url()?>/projects/update"  enctype="multipart/form-data">

    <table>
       <tr>
          <div class="form-group">
          <tr>
          <td>services_id</td>
          <td><input type="text" name="services_id" value="<?= $project['services_id'] ?>"></td>
          </tr>
          </div>

          <div class="form-group">
          <tr>
          <td>title</td>
          <td><input type="text" name="title" value="<?= $project['title'] ?>"></td>
          </tr>
          </div>

          <div class="form-group">
          <tr>
          <td valign="top">Body</td>
          <td><textarea name="body" class="text" cols="30" rows="10" ><?= $project['body'] ?></textarea></td>
          </tr>
          </div>

          <div class="form-group">
          <tr>
          <td>project_Image</td>
          <td><input type="file" name="photo" ></td>
          </tr>
          </div>

          
          
          
          
          
         
          <div class="form-group">
          <tr>
          <td valign="top">&nbsp;</td>
          <td><button type="submit" class="btn btn-primary" value="save" >save</button>
          </td>
          </tr>
          </div>
       
       
       </tr>
    </table>

     <input type="hidden" name="id" value="<?= $project['id'] ?>">

</form>
</div>

</div>
</div>
</div>