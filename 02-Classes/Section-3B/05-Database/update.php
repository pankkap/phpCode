<?php

echo $_GET['rn'];
echo $_GET['nm'];
echo $_GET['cl'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Record</title>
</head>
<body>
   <form action="" method="POST">
   
   <label for="">Rollno. </label>
   <input type="number" name="t1" value="<?php echo $_GET['rn'] ?>"><br><br>
   
   <label for="">Name </label>
   <input type="text" name="t2" value="<?php echo $_GET['nm'] ?>"><br><br>
   <label for="">Class </label>

   <input type="text" name="t3"  value="<?php echo $_GET['cl'] ?>"><br><br>

    <input type="submit" name="b1" value="Update Record">

   </form> 
</body>
</html>



<?php

include_once 'connection.php';

if(isset($_POST['b1']))
{
    $roll = $_POST['t1'];

    $name = $_POST['t2'];

    $class = $_POST['t3'];

    if($roll!="" and $name!="" && $class!="")
    {


    $query = "UPDATE secbtable SET name = '$name', class ='$class' where rollno='$roll '";

    $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "Data Updated  Succesfully  <a href='http://localhost/phpCode/02-Classes/Section-3B/05-Database/readData.php'> Click This to Display Updated Records</a>";
        }
        else
        {
            echo "Data not Updated ";
        }

}
else{
    echo "<p style='color:red'> All Fields are required</p>";
}

}
?>