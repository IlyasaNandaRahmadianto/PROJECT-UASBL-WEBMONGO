
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List | TickCamp</title>
  <link rel="shortcut icon" type="image/png" href="image/logo-tickcamp1.png">
  <link rel="stylesheet" href="style/style5.css">
  <?php
  require 'dbconnect.php'
  ?>


<body>
  <header>
    <a href="index.php" class="namalogo">
      <img src="image/logo-tickcamp.png" alt="logo-tickcamp" class="logoku">
    </a>
    <input type="checkbox" id="menu-bar">
    <label for="menu-bar">&#9776</label>
    <nav class="navbar"> 
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="list.php">List</a></li>
            <li><a href="layanan.php">Service</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
  </header>
  <div class="band">
    <?php
      $gunung = $gunungcollection->find([]);
      foreach($gunung as $gng) {
      ?>
        <div class="item-4">
            <a href="" class="card">
            <div class="thumb" style="background-image: url(image/listnew/<?php echo $gng->gambar_gng ?>);"></div>
            <center>
            <article>
            <h1>
            <?php    
            echo $gng->nama_gng;
            ?>
            </h1>
            </article>
            </center>
            </a>
        </div>
        <?php } ?>
  </div>


<footer>
  <div style="text-align: center; font-weight: bold;">
    <hr>
    <p>Institut Teknologi Adhi Tama Surabaya | Copyright© 2022</p>
  </div>
</footer>

</body>
</html>