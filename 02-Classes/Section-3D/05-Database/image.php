<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="uploadfile">
<br><br>
<input type="submit" name="b1" value="Upload File">

</form>    
</body>
</html>
<?php
include 'connection.php';

error_reporting(0);
$file = $_FILES['uploadfile'];

 $filename = $_FILES['uploadfile']['name'];
 $filetmpname = $_FILES['uploadfile']['tmp_name'];
 $uploadfolder = "upload/".$filename;

// move_uploaded_file(tmpnameoffile,destAddress);
move_uploaded_file($filetmpname,$uploadfolder);

$query = "Insert into upload values('$uploadfolder')";
$data = mysqli_query($conn,$query);


if($data)
{
echo "<a href='$uploadfolder'>File Uploaded, Click to View</a>";
}
else
{
    echo "file not uploaded";
}

?>