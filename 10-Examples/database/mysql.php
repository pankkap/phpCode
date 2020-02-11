<?php
require 'connect.php'; 
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
    <form action="">
    <input type="text" name="iid"> <b>Enter id</b> <br> <br>    
    <input type="text" name="fna"> <b>Enter First Name</b><br> <br>
    <input type="text" name="lna"> <b>Enter Last Name</b> <br><br>
    <input type="text" name="ag"> <b>Enter Age</b><br><br>
    <input type="submit" value="Submit" name="sub"><br><br>
    </form>
</body>
</html>

<?php
extract($_POST);
if (isset($sub))
{
$id = $iid;
$fn = $fna;
$ln = $lna;
$age = $ag;
echo "$id $fn $ln $age";

$query= "INSERT INTO people VALUES('$id','$fn','$ln','$age')";
$data = mysqli_query($conn,$query);

    if($data)
    {
        echo "Data Inserted Successfully";
    }
    else
    {
        echo "Data Not Inserted";
    }
}
?>