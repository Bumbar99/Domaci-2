<?php
 if (session_status()==PHP_SESSION_NONE) {
  session_start();
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.2/css/bootstrap.min.css" integrity="sha512-SCpMC7NhtrwHpzwKlE1l6ks0rS+GbMJJpoQw/A742VaxdGcQKqVD8F/y/m9WLOfIPppy7mWIs/kS0bKgSI0Bfw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.2/js/bootstrap.min.js" integrity="sha512-HSNvqjhsAxRPvbSBEdXWlkR9uYmJtUvXEyfAvUzlA0uS5SyFZMZdczgz8oPWTz2NUEBaXkIYL4kdrBJkP66jYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style.css">
    <title>Subscribe</title>
</head>
<body>
<div class="wrapper">
  <form action="subscribeCheck.php" method="POST" class="card-content">
    <div class="container">
      <div class="image">
        <i class="fas fa-envelope"></i>
      </div>
      <h1>Why Choose App ? </h1>
      <p>Subscribe for update</p>
    </div>
    <div class="form-input">
      <label for="email"></label>
      <input type="text" placeholder="Your Email" name="email">
      <button class="subscribe-btn">Subscribe</button>
      

    </div>
  </form>
  
</div>    
</body>
</html>


