<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" value="Imgae Submit">
</form>
 

<?php

echo $f = $_FILES['file']['name'];

echo $upload = "upload/". $f;

move_uploaded_file($_FILES['file']['tmp_name'],$upload);






?>