<?php
// $_GET & $_POST are 'superglobals' in PHP. They are arrays!
include('config/db_connect.php');

//deleteform
if (isset($_POST['delete'])) {
  $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
  $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

  if (mysqli_query($conn, $sql)) {
    //success
    header('Location: index.php');
  } else {
    // error
    echo 'query error:' . mysqli_error($conn);
  }
}

// check GET request id param
if (isset($_GET['id'])) {

  $id = mysqli_real_escape_string($conn, $_GET['id']);

  // make sql
  $sql = "SELECT * FROM pizzas WHERE id = $id";

  // get the query result
  $result = mysqli_query($conn, $sql);

  // fetch result
  $pizza = mysqli_fetch_assoc($result);

  mysqli_free_result($result);
  mysqli_close($conn);

  // print_r($pizza);
}


?>

<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>

<h2 class="text-center text-4xl">Details</h2>

<?php if ($pizza): ?>
  <h3 class="text-xl font-bold underline">
    <?php echo $pizza['title'] . '<br/>' ?>
  </h3>
  <?php echo 'Author: ' . $pizza['email'] ?>
  <p>
    <?php echo 'Created: ' . $pizza['created_at'] ?>
  </p>
  <p>
    <?php echo 'Ingredients: ' . $pizza['ingredients'] ?>
  </p>

  <!-- DELETE FORM -->
  <form action="details.php" method="POST">
    <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
    <input type="submit" name="delete" value="Delete" class="bg-slate-300 p-4 mb-4 cursor-pointer">
  </form>

<?php else: ?>
  <p>There is no such PIZZA!!</p>
<?php endif; ?>



<?php include('footer.php'); ?>

</html>