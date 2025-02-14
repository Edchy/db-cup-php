<?php

include('config/db_connect.php');
  
  // write query for all pizzas
  $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

  // make query & get result
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // free result from memory
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);

  // print result
  // print_r($pizzas);

  // print_r(explode(',', $pizzas[0]['ingredients']));
?>



<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
<h4 class="text-center text-5xl">Pizzas!</h4>
<div class="">
  <?php foreach($pizzas as $pizza) { ?>
    <div class="container mx-auto mb-4 bg-slate-300 shadow-lg border-collapse text-center">
  <div class="text-5xl"><?php echo htmlspecialchars($pizza['id']); ?></div>
  <div class="font-bold"><?php echo htmlspecialchars($pizza['title']); ?></div>
  <ul>
    <?php foreach(explode(',', $pizza['ingredients']) as $ingredient) { ?>
      <li> <?php echo htmlspecialchars($ingredient); ?> </li>
    <?php } ?>
  </ul>
  <div><a class="underline text-blue-300" href="details.php?id=<?php echo $pizza['id']; ?>">More Info</a></div>
</div>
<?php } ?>  

<!-- Alternative Syntax -->
 <?php if(count($pizzas) < 4): ?>
  <p>there are less than 4 pizzas</p>
 <?php else: ?>
  <p>there are more than 4 pizzas</p> 
 <?php endif; ?>


</div>
<?php include('footer.php'); ?>

</html>