<?php

extract($_POST);    // This command is used to extract (collect)
                    // the data from html form
//var_dump($_POST);

if(isset($sub1))    // Is basically used to check weather the submit button is pressed or not
{

        $a = $text1;
        $b = $text2;

        $c = $a * $b;

        echo "<h3 align='center'>Result is: ","$c </h3>";


}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
</head>
<body>
    

    <div class="container">    
    <form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter No.-1</label>
    <input type="text" name="text1" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Numeric value only">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter No.-2</label>
    <input type="text" name="text2" required  class="form-control" id="exampleInputPassword1" placeholder="Enter Numeric value only">
  </div>
  
  <button type="submit" name="sub1" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>