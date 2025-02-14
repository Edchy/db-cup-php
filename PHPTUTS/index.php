<?php

  //variables
  $name = 'Yoshi';
  $age = 30;
  //constants
  define('BIRTHDATE', 86);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
  <h1 class="text-center"><?php echo'User Profile Page'; ?></h1>
  <div class="text-center text-3xl"> <?php echo $name; ?>
  <div class="text-center text-3xl"> <?php echo $age; ?>
  <div class="text-center text-3xl"> <?php echo BIRTHDATE; ?>
</div>
</body>
</html>