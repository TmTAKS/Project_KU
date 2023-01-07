<?php 

    session_start();

    if ($_SESSION['id'] == "") {
        header("location: signin.php");
    } else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

<header>
    <p> <a href="#" class="logo">SkyByMe<span>.</span></a></p>
    <nav>
          <ul class="nav-links">
          <li><a href="welcome.php"><i class="fas fa-home"></i></a></li>
          <li><a href="#"><i class="fas fa-info-circle"></i></a></li>
          <li><a href="#"><i class="fas fa-envelope"></i></a></li>
          <li><a href="#"><i class="fas fa-heart"></i></a></li>
        <div class="shopping-cart">
        <a href="#"><i class="fas fa-shopping-cart"></i> (<span id="item-count">0</span>)</a>
        <div class="dropdown">
            <ul id="cart-items"></ul>
            <div class="total"> Total: $<span id="total-price">0</span></div>
        </div>
        </div>
    <li><a href="logout.php"><i class="fas fa-door-open"></i></a></li>
        </ul>
    </nav>
</header>

<div class="container">
        <h1 class="mt-5">Welcome, <?php echo $_SESSION['fname']; ?></h1>
        <hr>
        <p>
            Welcome to the sky by me website. May you be happy in buying the sky you like.        
        </p>
        <hr>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>

<?php 

}
?>