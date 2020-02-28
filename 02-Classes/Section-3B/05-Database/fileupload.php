<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
    <input type="file" name="uploadfile"><br><br>
    <input type="submit" name="b1" value="Upload">

    </form>
</body>
</html>

<?php
include 'connection.php';

if(isset($_POST['b1'])){
$file =$_FILES['uploadfile'];


// echo "<pre>";
// print_r($file);

// echo "</pre>";

 $filename = $_FILES['uploadfile']['name'];

 $filetmp = $_FILES['uploadfile']['tmp_name'];

$dest = "upload/".$filename;

$dest = "upload/".$filename;

move_uploaded_file($filetmp,$dest);

$query = "insert into uploadfiles values('$dest')";

$data = mysqli_query($conn, $query);

if($data)
{
    echo "File Uplpoaded";
}
else{
    echo "File not Uplpoaded";
}


}
?>