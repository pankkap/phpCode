<?php
extract($_POST);
 
 
if(isset($sub))
{
    $a = $no1;
    $b = $no2;
    $c = $a % $b;

    echo "<p align='center'>Sum of Two numbers is : ".$c."</p><br>";
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Number-1</label>
    <input type="text" name="no1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Number">
    <small id="emailHelp" class="form-text text-muted">Number-1</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter Number-2</label>
    <input type="text" name="no2"  class="form-control" id="exampleInputPassword1" placeholder="Enter Secontd Number">
    <small id="emailHelp" class="form-text text-muted">Number-2</small>
  </div> 
  <button type="submit" name="sub" class="btn btn-primary">Submit</button>
</form>
</div>
</html>