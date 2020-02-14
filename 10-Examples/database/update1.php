<?php
include 'connection.php';

$_GET['rn'];
$_GET['nm'];
$_GET['cl'];
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
    <form action=""method="GET">
    <label>Enter Rollno: </label> 
    <input type="number" name="rollno" value="<?php echo $_GET['rn'] ?>"><br><br>
    <label>Enter Name: </label> 
    <input type="text" name="name" value="<?php echo $_GET['nm'] ?>"> <br><br>
    <label>Enter Name: </label>
    <input type="text" name="class" value="<?php echo $_GET['cl'] ?>"><br><br>
    <input type="submit" name="submit" value="Update"><br><br>
    </form>
</body>
</html>

<?php
if($_GET['submit'])
{
$rn = $_GET['rollno'];
$nm = $_GET['name'];
$cl = $_GET['class'];

$query = "UPDATE CRUDTABLE SET name='$nm', class= '$cl' where rollno='$rn'";
$data = mysqli_query($conn,$query);

    if($data)
    {
       echo "<p style='color:green'>Records updated Successfully "."<a href='update.php'>CLick to display Recoreds</a></p>";
    }
    else
    {
        echo "Records not updated";
    }    
}
else
{
        echo "Click Update Button to Submit the Records";
}

?>
