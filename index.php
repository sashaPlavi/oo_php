<?php
require('user_validator.php');
$username = null;
$email = null;

if (isset($_POST['submit'])) {
  $validation = new User_validator($_POST);
  $errors = $validation->validateForm();
  $username = htmlspecialchars($_POST['username']);
  $email = htmlspecialchars($_POST['email']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>form validation</title>
</head>

<body>
  <div class="new-user">
    <H3>Create a new user</H3>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username ?? ''; ?>">
      <div class="error">
        <?php echo $errors['username'] ?? '';  ?>
      </div>
      <label>Email</label>
      <input type="text" name="email" value="<?php echo $email ?? ''; ?>">
      <div class="error">
        <?php echo $errors['email'] ?? '';  ?>
      </div>

      <input type="submit" value="submit" name='submit'>

    </form>
  </div>

</body>

</html>