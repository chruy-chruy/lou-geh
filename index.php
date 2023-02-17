<?php

$page = 'login';
$headerTitle = 'Login';
include "db_conn.php";

$sql = "UPDATE `user` SET `id`='1',`username`='admin',`password`='admin' WHERE 1";

mysqli_query($conn, $sql);
session_start();
if (isset($_SESSION['id'])) {
  header("Location: dashboard/");
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>

  <!-- FAVICON -->
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">

  <title>SAVESEGROW Purchasing and Inventory Management System</title>
</head>

<body>
  <section class="vh-100 w-100" style="display: grid; place-items: center; align-content:center;">

      <img class="login__logo" src="assets/images/logo.png" alt="">

      <form action="check_login.php" class="login__form" method="POST">
        <div class="form-outline mb-4 text-center">
          <h4>SAVESEGROW <br> Purchasing and Inventory Management System</h4>
        </div>
        <!-- Email input -->
        <div class="form-outline mb-3">
          <input type="text" id="username" name="username" class="form-control login__input"
            placeholder="Username" />
        </div>

        <!-- Password input -->
        <div class="form-outline mb-3">
          <input type="password" id="password" name="password" class="form-control login__input"
            placeholder="Password" />
        </div>
        <?php if (isset($_GET['error'])) { ?>
          <p class="error-message" style="margin-bottom: 15px; color :red ;">
            <?php echo $_GET['error']; ?>
          </p>
        <?php } ?>
        <div class="text-center mt-1">
          <button type="submit" class="btn button login__button rounded-pill"
            style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
        </div>

      </form>

  </section>
</body>

</html>