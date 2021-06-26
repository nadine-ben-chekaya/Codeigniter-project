
<div class="container">
   <div class="row">
      <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper" >
        <div class="container">
<h3>Add Services</h3>
<form method="post" action="<?php echo base_url()?>/services/save" enctype="multipart/form-data">

    <table>
       <tr>
          <tr>
          <td>Title</td>
          <td><input type="text" name="title"></td>
          </tr>

          <tr>
          <td>Slug</td>
          <td><input type="text" name="slug"></td>
          </tr>

          <tr>
          <td valign="top">Body</td>
          <td><textarea name="body" class="text" cols="30" rows="10"></textarea></td>
          </tr>

          <tr>
          <td valign="top">Icon</td>
          <td><input type="text" name="icon"></td>
          </tr>

          <tr>
          <td>Logo</td>
          <td><input type="file" name="photo"></td>
          </tr>

          <tr>
          <td valign="top">&nbsp;</td>
          <td><button type="submit" class="btn btn-primary" value="save" >save</button>
          </td>
          </tr>
       
       
       </tr>
    </table>



</form>
</div>

</div>
</div>
</div>