
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Record</title>
</head>
<body>
    <form action="" method="GET">
    
    <label for="">Rollno</label>
    <input type="number" name="t1"><br></br>

    <label for="">Name</label>
    <input type="text" name="t2" required ><br></br>
    
    <label for="">Class</label>
    <input type="text" name="t3"><br></br>

    <input type="submit" name="b1" Value="Insert">
   
    </form>
</body>
</html>


<?php

include_once 'connection.php';

if(isset($_GET['b1']))
{

        $roll = $_GET['t1'];
        $name = $_GET['t2'];
        $class = $_GET['t3'];

        if($roll!="" and $name!="" && $class!="")
        {
            // $query = "INSERT INTO `secdtable`(`rollno`, `name`, `class`) VALUES (104,'Rahul','3B')";

            $query = "INSERT INTO secdtable VALUES('$roll','$name','$class')";


            $data = mysqli_query($conn,$query);

                if($data)
                {
                    echo "<p style='color:green'>Record Inserted Succesfully <a href='http://localhost/phpCode/02-Classes/Section-3D/05-Database/readRecords.php#'>Click to See Updated Records</a>";
                }
                else
                {
                    echo "Record not Insserted ";
                }

        }
        else
        {
            echo "All Fields are required";
        }    

}
?>