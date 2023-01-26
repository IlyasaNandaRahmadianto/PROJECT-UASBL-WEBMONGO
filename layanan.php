<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan | TickCamp</title>
    <link rel="shortcut icon" type="image/png" href="image/logo-tickcamp1.png">
    <link rel="stylesheet" href="style/style4.css">
    <?php
    require 'dbconnect.php';
    ?>
</head>
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

  <main>
    <section class='FlexContainer'>
      <div>
        
      </div>
      <div>
        
      </div>
      <div>
        
      </div>
    </section>
    <div class="flexbox">
    <?php
        $layan = $layanancollection->find([]);
        foreach($layan as $lyn) {
        ?>
    
      <div class="left">
        <a href=""><img src="image/layanan/<?php echo $lyn->gambar_lyn; ?>" alt="" style="height: 200px; width: 200px; border-radius: 50%; "></a> 
        <a href="" style="text-decoration: none; color:black">
        <h1><?php
          echo $lyn->nama_lyn;        
        ?>
        </h1></a>
      </div>
      
        <?php } ?>
    </div>
  </main>

  <footer>
    <div style="text-align: center; font-weight: bold;">
      <hr>
      <p>Institut Teknologi Adhi Tama Surabaya | Copyright© 2022</p>
    </div>
  </footer>
    
</body>
</html>