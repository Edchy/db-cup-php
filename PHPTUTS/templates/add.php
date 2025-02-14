<?php

include('config/db_connect.php');


$email = $title = $ingredients = '';
$errors = array('email'=> '', 'title'=>'', 'ingredients'=>'');

if(isset($_POST['submit'])) {
  // echo htmlspecialchars($_POST['email']);
  // echo htmlspecialchars($_POST['title']);
  // echo htmlspecialchars($_POST['ingredients']);

  //check email
  if(empty($_POST['email'])) {
    $errors['email'] = 'An email is required <br />';
  } else {
    // echo htmlspecialchars($_POST['email']);
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors['email'] = 'Email must be a valid email address <br />';
    }
  }

  // check title
  if(empty($_POST['title'])) {
    $errors['title'] = 'A title is required <br />';
  } else {
    // echo htmlspecialchars($_POST['title']);
    $title = $_POST['title'];
    if(!preg_match('/^[a-zA-Z\s]+$/', $title)) {
      $errors['title'] = 'Title must be letters and spaces only <br />';
    }
  }

  // check ingredients
  if(empty($_POST['ingredients'])) {
    $errors['ingredients'] = 'At least one ingredient is required <br />';
  } else {
    // echo htmlspecialchars($_POST['ingredients']);
    $ingredients = $_POST['ingredients'];
    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
      $errors['ingredients'] =  'Ingredients must be comma separated <br />';
    }
  }

  if(array_filter($errors)) {
    // echo 'errors' in the form
  } else {
    // 
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

    // create sql
    $sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('$title', '$email', '$ingredients')";

    // save to db and check
    if(mysqli_query($conn, $sql)) {
      // success
      // redirect to main page
      header('Location: index.php');
    } else {
      // error
      echo 'query error:'.mysqli_error($conn);
    }



  }
} // end of POST check

?>


<!DOCTYPE html>
<html lang="en">
<?php include('header.php');?>

<section class="bg-slate-300 flex-col">
  <h4 class="text-center text-2xl font-bold py-4">Add Pizza</h4>
  <form class="text-center p-8" action="add.php" method="POST">
    <label for="">Email:</label>
    <input value="<?php echo htmlspecialchars($email); ?>" type="text" name="email" id="" class="block mx-auto">
    <div class="block mx-auto mb-6 text-red-500">
      <?php echo $errors['email']; ?>
    </div>
    <label for="">Pizza Title:</label>
    <input value="<?php echo htmlspecialchars($title); ?>" type="text" name="title" id="" class="block mx-auto">
        <div class="block mx-auto mb-6 text-red-500">
      <?php echo $errors['title']; ?>
    </div>
    <label for="">Ingredients:</label>
    <input value="<?php echo htmlspecialchars($ingredients); ?>" type="text" name="ingredients" id="" class="block mx-auto">
        <div class="block mx-auto mb-6 text-red-500">
      <?php echo $errors['ingredients']; ?>
    </div>
    <div class="text-center">
      <input class="my-3 bg-green-300 py-3 px-6 rounded-lg cursor-pointer color-white" type="submit" name="submit" value="submit">
    </div>
  </form>
</section>

<?php include('footer.php');?>

</html>