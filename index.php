<?php

error_reporting(0);
if(isset($_POST['signIn'])){
  $date = $_POST['password'];

  if ($date == '24 April 2024') {
    header("Location: gift.html");
  } else {
      $salah = "<p style='color:red; text-align: center;'>INVALID DATE</p>";
  }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page - CCN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signIn">
        <h1 class="form-title">Hello <span>Calya</span>, I'am ZiPs Bot. Please insert your Full Name and the Anniversary Date.</h1>
        <form action="" method="post">
        <div class="input-group">
              <i class="fas fa-signature"></i>
              <input type="text" name="username" placeholder="username" required><br>
              <label for="username">Full Name</label>
          </div>
          <div class="input-group">
              <i class="fas fa-hand-holding-heart"></i>
              <input type="text" placeholder="password" name="password" required><br>
              <label for="password">Anniv. Date</label>
              <p>format: Tanggal Bulan Tahun</p>
          </div>
          <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <?php echo $salah; ?>
        <p class="or">
          "My Last Gift for you." - ZiPs Bot Creator
        </p>
      <script src="script.js"></script>
</body>
</html>