<?php
include_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action=""method="POST" enctype="multipart/form-data">
    <label>Enter Rollno: </label> <input type="number" name="rollno"><br><br>
    <label>Enter Name: </label> <input type="text" name="name"><br><br>
    <label>Enter Class: </label> <input type="text" name="class"><br><br>
    <label>Upload Image: </label> <input type="file" name="file"><br><br>
    <input type="submit" name="submit" Value="Submit"><br><br>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$rn = $_POST['rollno'];
$nm = $_POST['name'];
$cl = $_POST['class'];

$file = $_FILES['file']['name']; 
$tmp = $_FILES['file']['tmp_name']; 
$upload = "upload/".$file;
move_uploaded_file($tmp,$upload);
$query = "INSERT INTO CRUDTABLE VALUES('$rn','$nm','$cl','$upload')";
$data = mysqli_query($conn,$query);
    if($data)
    {
        echo "data inserted succesfully";
    }
    else
    {
        echo "Not Inserted";
    }
}
?>

