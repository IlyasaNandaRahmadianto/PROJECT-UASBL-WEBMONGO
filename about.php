<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About | TickCamp</title>
  <link rel="shortcut icon" type="image/png" href="image/logo-tickcamp1.png">
  <link rel="stylesheet" href="style/style3.css">
</head>

<style>
  .logoku {
    height: 70px;
    width: 70px;
    border-radius: 50%;
    border: 2px solid #E3CAA5;
  }

  header{
    position: fixed;
    top: 0; left: 0; right: 0;
    background: #FFE6BC;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 1);
    padding: 1% 5%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
  }

  header .navbar ul{
    list-style: none;
  }

  header .navbar ul li{
    position: relative;
    float: left;
  }

  header .navbar ul li a{
    font-size: 20px;
    padding: 20px;
    color: black;
    display: block;
  }

  header .navbar ul li a:hover{
    background:  #E3CAA5;
    border-radius: 10px;
    transition: all ease-in-out .25s;
    color: whitesmoke;
  }

  #menu-bar{
    display: none;
  }

  header label{
    font-size: 20px;
    color: black;
    cursor: pointer;
    display: none;
  }

  @media(max-width:991px){
    header{
        padding: 20px;
    }

    header label{
        display: initial;
    }

    header .navbar{
        position: absolute;
        top: 100%; left: 0; right: 0;
        background: #FFE6BC;
        border-top: 1px solid rgba(0, 0, 0, 1);
        display: none;
    }

    header .navbar ul li{
        width: 100%;

    }

    #menu-bar:checked ~ .navbar{
        display: initial;
    }
  }
</style>

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
<center>
  <section class="about" id="about">
      <div class="box-container-logo">
        <div class="box-logo">
            <img src="image/logo-tickcamp.png" alt="logo-tickcamp">
            <p>TickCamp (Ticket Camping) merupakan layanan website yang memfasilitasi kegiatan-kegiatan di luar ruangan (Outdoor) seperti Berkemah (Camping), Outbound, Pendakian Gunung.</p>
        </div>
    </div>
      <div class="box-container">
          <div class="box">
              <img src="image/our-team/profile-1.jpeg" alt="profile-2">
              <h3>Ilyasa Nanda Rahmadianto</h3>
              <p>Student Collage</p>
              <p>I'm from Surabaya East Java, I study at Institut Teknologi Adhi Tama in Informatics Engineering.</p>
              <div>
                <a href="https://www.instagram.com/ilyasa_nr/" target="_blank">
                  <img src="image/ig.png" alt="icon-ig" id="ig">
                </a>
              </div>
          </div>
      </div>

      <div class="box-container">
        <div class="box">
            <img src="image/our-team/profile-2.jpeg" alt="profile-3">
            <h3>Allan Krisnanta Wijaya</h3>
            <p>Student Collage</p>
            <p>I'm from Surabaya East Java, I study at Institut Teknologi Adhi Tama in Informatics Engineering.</p>
            <div>
              <a href="https://www.instagram.com/allan.wjy/" target="_blank">
                <img src="image/ig.png" alt="icon-ig" id="ig">
              </a>
            </div>
        </div>
    </div>

    <div class="box-container">
      <div class="box">
          <img src="image/our-team/profile-3.jpeg" alt="profile-4">
          <h3>Rahimatus Syifa</h3>
          <p>Student Collage</p>
          <p>I'm from Surabaya East Java, I study at Institut Teknologi Adhi Tama in Informatics Engineering.</p>
          <div>
            <a href="https://www.instagram.com/cipaaaaaaa30/" target="_blank">
              <img src="image/ig.png" alt="icon-ig" id="ig">
            </a>
          </div>
      </div>
    </div>
  </section>
</center>
<footer>
  <section class="footer">
    
    <div>
      <hr>
      <p>Institut Teknologi Adhi Tama Surabaya | Copyright© 2022</p>
      
    </div>
  </section>
</footer>
</body>
</html>