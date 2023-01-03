<?php

//  if(isset($_GET['submit'])) {
//    echo $_GET['email'] . '<br />';
//    echo $_GET['title'] . '<br />';
//    echo $_GET['ingredients'] . '<br />';
//  }

  if(isset($_POST['submit'])) {
    echo $_POST['email'] . '<br />';
    echo $_POST['title'] . '<br />';
    echo $_POST['ingredients'] . '<br />';
  }


?>

<!doctype html>
<html lang="en">
<?php include('templates/header.php'); ?>

  <section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="add.php" method="POST" class="white">
      <label for="email">Your email:
        <input type="text" name="email">
      </label>

      <label for="title">Pizza Title:
        <input type="text" name="title">
      </label>

      <label for="ingredients">Ingredients (comma separated):
        <input type="text" name="ingredients">
      </label>

      <div class="center">
        <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
      </div>

    </form>
  </section>

<?php include('templates/footer.php'); ?>
</html>