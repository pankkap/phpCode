<?php

extract($_POST);
//var_dump($_POST);

if(isset($sub1))
{
    $a = $text1;
    $b = $text2;
    $c = $a+$b;

    echo "<p align='center'> The result is: $c </p><br>";

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
    <label for="exampleInputEmail1">Enter Number-1</label>
    <input type="number" name="text1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter numeric value">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter Number-2</label>
    <input type="number" name="text2" class="form-control" id="exampleInputPassword1" placeholder="Enter numeric value">
  </div>
    <button type="submit" name="sub1"class="btn btn-primary">Submit</button>
</form>
</div>    
</body>
</html>