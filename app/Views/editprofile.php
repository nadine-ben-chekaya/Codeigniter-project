<div class="container">
   <div class="row">
      <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper" >
        <div class="container">
        <h3>profile</h3>
           <hr>
        
           <form method="post" action="<?php echo base_url()?>/users/update">

    <table>
       <tr>
          <tr>
          <td>Name</td>
          <td><input type="text" name="name" value="<?= $user['name'] ?>"></td>
          </tr>

          <tr>
          <td>Email</td>
          <td><input type="text" name="email" value="<?= $user['email'] ?>"></td>
          </tr>

          <tr>
          <td>Username</td>
          <td><input type="text" name="username" value="<?= $user['username'] ?>"></td>
          </tr>

          <tr>
          <td valign="top">&nbsp;</td>
          <td><button type="submit" class="btn btn-primary" value="save" >save</button>
          </td>
          </tr>
       
       
       </tr>
    </table>
    <input type="show" name="id" value="<?= $user['1'] ?>">

</form>
        </div>

      </div>
   </div>
</div>