<?php

$roll = $_GET['rn'];
$name = $_GET['nm'];
$class = $_GET['cl'];
$pic = $_GET['pic'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
body {background-color: grey;}
.profilecenter 
{
    top:50%;
  left: 50%;
  transform: translate(-50%,-50%);
  position: absolute;
}
</style>
<body>
<div class="profilecenter card" style="width: 20rem;">
  <img class="card-img-top" src="<?php echo $pic ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title text-center">Rollno: <?php echo $roll ?></h5>
    <p class="card-text text-center"><b>Name: </b><?php echo $name ?></p>
    <p class="card-text text-center"><b>Class: </b><?php echo $class ?></p>
  </div>
</div>
</body>
</html>