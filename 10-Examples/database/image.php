<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
    <input type="text" name="t1">
    <input type="file" name="t2">
    <input type="submit" name="b1">
    </form>
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['b1']))
{
$name = $_POST['t1'];

$file = $_FILES['t2']['name'];

$tmp= $_FILES['t2']['tmp_name'];

$upload = "upload/".$file;

move_uploaded_file($tmp,$upload);

$query = "insert into upload (name,file) values ('$name','$upload')";

$data = mysqli_query($conn,$query);

if($data)
{
    echo "Image Uploaded";
}
else{
    echo "Image not Uploaded";
}



}



?>