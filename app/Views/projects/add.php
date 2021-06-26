<h3>Add Projects</h3>
<form method="post" action="<?php echo base_url()?>/projects/save">

    <table>
       <tr>
          
          <tr>
          <td>services_id</td>
          <td><input type="text" name="services_id"></td>
          </tr>

          <tr>
          <td>Title</td>
          <td><input type="text" name="title"></td>
          </tr>

          <tr>
          <td valign="top">Body</td>
          <td><textarea name="body" class="text" cols="30" rows="10"></textarea></td>
          </tr>

         
          <tr>
          <td>project_Image</td>
          <td><input type="file" name="project_Image"></td>
          </tr>

           
          <tr>
          <td>Slug</td>
          <td><input type="text" name="slug"></td>
          </tr>



          <tr>
          <td valign="top">&nbsp;</td>
          <td><button type="submit" value="save" >save</button>
          </td>
          </tr>
       
       
       </tr>
    </table>



</form>