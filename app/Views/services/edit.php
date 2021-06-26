
<div class="container">
   <div class="row">
      <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper" >
        <div class="container">
      <h1>Edit Services</h1>

<form method="post" action="<?php echo base_url()?>/services/update" enctype="multipart/form-data">

    <table>
       <tr>
          <div class="form-group">
          <tr>
          <td>Title</td>
          <td><input type="text" name="title" value="<?= $service['title'] ?>"></td>
          </tr>
          </div>

          <div class="form-group">
          <tr>
          <td>Slug</td>
          <td><input type="text" name="slug" value="<?= $service['slug'] ?>"></td>
          </tr>
          </div>
          
          <div class="form-group">
          <tr>
          <td valign="top">Body</td>
          <td><textarea name="body" class="text" cols="30" rows="10" ><?= $service['body'] ?></textarea></td>
          </tr>
          </div>

          <div class="form-group">
          <tr>
          <td>Icon</td>
          <td><input type="text" name="icon" value="<?= $service['icon'] ?>"></td>
          </tr>
          </div>
          
          <div class="form-group">
          <tr>
          <td>Logo</td>
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

     <input type="hidden" name="id" value="<?= $service['id'] ?>">

</form>
</div>

</div>
</div>
</div>
