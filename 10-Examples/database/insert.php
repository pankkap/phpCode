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
    <form action=""method="POST">
    <label>Enter Rollno: </label> <input type="number" name="rollno"><br><br>
    <label>Enter Name: </label> <input type="text" name="name"><br><br>
    <label>Enter Class: </label> <input type="text" name="class"><br><br>
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

$query = "INSERT INTO CRUDTABLE VALUES('$rn','$nm','$cl')";
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

