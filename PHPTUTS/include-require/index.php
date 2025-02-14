<?php 

include('ninjas.php');
require('ninjas.php');
echo 'end';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
    <?php include('ninjas.php') ?>
  </h1>
  <?php require('content.php') ?>
</body>
</html>