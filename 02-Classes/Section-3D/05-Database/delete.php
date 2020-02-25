<?php
include 'connection.php';

$roll = $_GET['rn'];

$query = "delete from secdtable where rollno='$roll '";

$data = mysqli_query($conn, $query);

if($data)
{
    echo "<script>alert('Record Deleted')</script>";
    ?>

    <meta http-equiv="refresh" content="0; url=http://localhost/phpCode/02-Classes/Section-3D/05-Database/readRecords.php#">


<?php
}
else{
    echo "Deletion Process Fail";
}


?>