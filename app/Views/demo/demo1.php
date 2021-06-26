<h3>Upload file</h3>
<form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>/demo/upload">
photos <input type="file" name="photo">
      <br>
      <input type="submit" value="Upload">

</form>
<img src="<?php echo base_url("upload/".$about[0]['photo']) ?>"></br>