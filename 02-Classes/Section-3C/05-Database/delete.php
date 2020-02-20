<?php
include 'connection.php';
$roll = $_GET['rn'];

$query = "delete from secctable where rollno='$roll'";

$data = mysqli_query($conn, $query);

if($data)
{
    echo "<script>alert('Record Deleted')</script>";
?>
<meta http-equiv="refresh" content="0;  url=http://localhost/phpCode/02-Classes/Section-3C/05-Database/read-display.php">
 
<?php
}
else
{
    echo "Delete process fail";
}

?>