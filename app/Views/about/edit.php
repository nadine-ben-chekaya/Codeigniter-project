<div class="container">
   <div class="row">
      <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper" >
        <div class="container">
      <h1>Edit About</h1>

<form method="post" action="<?php echo base_url()?>/about/update" enctype="multipart/form-data">

    <table>
       <tr>
          <div class="form-group">
          <tr>
          <td>Name</td>
          <td><input type="text" name="name" value="<?= $about['name'] ?>"></td>
          </tr>
          </div>
         
         
          
          <div class="form-group">
          <tr>
          <td valign="top">disc</td>
          <td><textarea name="disc" class="text" cols="30" rows="10" ><?= $about['disc'] ?></textarea></td>
          </tr>
          </div>
          
          <div class="form-group">
          <tr>
          <td>telephone</td>
          <td><input type="text" name="telephone" value="<?= $about['telephone'] ?>"></td>
          </tr>
          </div>

          <div class="form-group">
          <tr>
          <td>email</td>
          <td><input type="text" name="email" value="<?= $about['email'] ?>"></td>
          </tr>
          </div>

          <div class="form-group">
          <tr>
          <td>adresse</td>
          <td><input type="text" name="adresse" value="<?= $about['adresse'] ?>"></td>
          </tr>
          </div>

          <div class="form-group">
          <tr>
          <td>logo</td>
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

     <input type="hidden" name="id" value="<?= $about['id'] ?>">

</form>
</div>

</div>
</div>
</div>
