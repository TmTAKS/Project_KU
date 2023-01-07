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
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- header -->
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

<!-- home -->

<section class="home" id="home">
    <div class="content">
        <h1>Sky Picture</h1>
        <p>i like to look at the sky Whether it's day or night or any time, the sky is charming in its own way.every time i travel I have the sky as a friend Companions that never abandon me Wherever you go, go together everywhere</p>
        <a href="#" class="btn">shop now</a>
    </div>
</section>

<section class="about" id="about">
    <h3 class="heading"> <span> About </span> us </h3>
    <div class="row">
        <div class="pic-container">
            <img src="images/Sky By Me.jpg"></img>
        </div>
        <div class="content">
            <h1>why choose us?</h1>
            <p>Sometimes I can't help but compare my life to the sky.It is like our day to day life.Some days are as bright as days that go smoothly.Some days seem gloomy, like a day that goes on with problems and obstacles.</p>
            <p>Even if we can't choose the sky as we want But we can choose to do what is best in our daily lives.</p>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>
</section>

<section class="about" id="about">
    <h1 class="heading"> <span> shop </span></h1>
</section>

  <!-- search -->
<form>
  <input type="text" placeholder="Search for photos...">
  <button type="submit"><i class="fas fa-search"></i></button>
</form>


  <!-- section 
<form class="filter-form">
  <label for="category">Category:</label>
  <select id="category" name="category">
    <option value="all">All</option>
    <option value="landscapes">Landscapes</option>
    <option value="sunsets">Sunsets</option>
    <option value="mountains">Mountains</option>
  </select>
</form>
-->

    <!-- photo  -->
<section class="photos">
  <div class="photo">
    <img src="images/LINE_ALBUM_Sky_230103_38.jpg" alt="Beautiful landscape">
    <span class="price">$10</span>
    <span class="icons-pic"><a href="#" class="fas fa-heart"></a></span>
    <button class="add-to-cart">Add to cart</button>
    
  </div>

  
<div class="photo">
    <img src="images/LINE_ALBUM_Sky_230103_22.jpg" alt="Gorgeous sunset">
    <span class="price">$39</span>
    <span class="icons-pic"><a href="#" class="fas fa-heart"></a></span>
    <button class="add-to-cart">Add to cart</button>
</div>


<div class="photo">
    <img src="images/LINE_ALBUM_Sky_230103_1.jpg" alt="Majestic mountain range">
    <span class="price">$49</span>
    <span class="icons-pic2"><a href="#" class="fas fa-heart"></a></span>
    <button class="add-to-cart">Add to cart</button>
</div>


<div class="photo">
  <img src="images/LINE_ALBUM_Sky_230103_13.jpg" alt="Beautiful landscape">
  <span class="price">$39</span>
  <span class="icons-pic"><a href="#" class="fas fa-heart"></a></span>
  <button class="add-to-cart">Add to cart</button>
</div>
</section>


<section class="photos">
  <div class="photo">
    <img src="images/LINE_ALBUM_Sky_230103_2.jpg" alt="Beautiful landscape">
    <span class="price">$10</span>
    <span class="icons-pic"><a href="#" class="fas fa-heart"></a></span>
    <button class="add-to-cart">Add to cart</button>
  </div>

  
<div class="photo">
    <img src="images/LINE_ALBUM_Sky_230103_11.jpg" alt="Gorgeous sunset">
    <span class="price">$29</span>
    <span class="icons-pic2"><a href="#" class="fas fa-heart"></a></span>
    <button class="add-to-cart">Add to cart</button>
    
</div>


<div class="photo">
    <img src="images/LINE_ALBUM_Sky_230103_21.jpg" alt="Majestic mountain range">
    <span class="price">$10</span>
    <span class="icons-pic2"><a href="#" class="fas fa-heart"></a></span>
    <button class="add-to-cart">Add to cart</button>
</div>


<div class="photo">
  <img src="images/LINE_ALBUM_Sky_230103_12.jpg" alt="Beautiful landscape">
  <span class="price">$10</span>
  <span class="icons-pic"><a href="#" class="fas fa-heart"></a></span>
  <button class="add-to-cart">Add to cart</button>
</div>
</section>

<p>
<section class="about" id="about">
    <h1 class="heading"> <span> Contact Us </span></h1>
    <div class="row">
        <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>
    </div>
</section>
</p>

<!-- footer -->
<section class="about" id="about">
    <h1 class="heading-end">
        <span><div class="contact">
          <div class="link">
                <h2>extra links</h2>
               <p><a href="myaccount.php">my account</a></p> 
               <p><a href="#">my order</a></p> 
               <p><a href="#">my favorite</a></p> 
        </div>

        <div class="link">
            <h2>contact info</h2>
            <p><a href="#">095-118-9473</a></p> 
            <p><p><a href="#">tmgamer13253@gmail.com</a></p> 
            <p><a href="https://www.instagram.com/nxic_ky/">https://www.instagram.com/nxic_ky/</a></p>  
        </div>
    </div>  </span></h1>

</section>
    </div>
 <div class="credit"> created by <span> Mr.Tangpanitan Khongbunpring </span> | all rights reserved </div>
   

    
</body>
</html>


<?php 

}
?>