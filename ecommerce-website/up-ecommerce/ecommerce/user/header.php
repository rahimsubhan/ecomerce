<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <?php
 session_start();
 if(isset($_session['cart'])){
    $count=count ($_SESSION['cart']);

 }
    ?>
<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid font-monospace text-white">
    <a class="navbar-brand text-white"><h3>My Store</h3></a>
  <span>
  <i class="bi bi-person-circle"></i>
  Hello, <?php echo $_SESSION['user']; ?> |
  <i class="bi bi-box-arrow-right"></i>
  <a href="./logout.php" class= "text-decoration-none text-white ">Logout </a>  |
  <a href="" class= "text-decoration-none text-white ">User Panel </a>
  <?php
  if(isset($__session['user'])){
    echo $_SESSION['user'];
  } else {
  echo "guest";
  }
  ?>
    <a href="./logout.php" class= "text-decoration-none text-white ">Logout </a>  |
  <a href="" class= "text-decoration-none text-white ">User Panel </a>
  </div>
</nav>
<div class ="bg-danger font-monospace">
    <ul class ="list-unstyled d-flex justify-content-center">
        <li><a href="laptop.php" class="text-decoration-none text-white fw-bold fs=4 px-5">LOPTOP</a></li>
        <li><a href="mobile.php" class="text-decoration-none text-white fw-bold fs=4 px-5">moabil</a></li>
        <li><a href="bag.php" class="text-decoration-none text-white fw-bold fs=4 px-5">bags</a></li>
        <li><a href="Jacketinsert.php" class="text-decoration-none text-white fw-bold fs=4 px-5">bags</a></li>
</ul>
</div>
</body>
</html>