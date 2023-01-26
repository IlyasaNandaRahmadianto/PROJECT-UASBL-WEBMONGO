<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pesanan | TickCamp</title>
  <link rel="shortcut icon" type="image/png" href="image/logo-tickcamp1.png">
  <link rel="stylesheet" type="text/css" href="style/form1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <?php
    require 'dbconnect.php';
    $gunung = $gunungcollection->find([]);
    if (isset($_GET['id'])) {
      $form = $formcollection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
   }
   if (isset($_POST['sub'])) {
       $formcollection->updateOne(
           ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
           ['$set' => ['nama' => $_POST['inp_nm'], 'alamat' => $_POST['inp_almt'], 'no_telp' => $_POST['inp_ntlp'], 'gunung' => $_POST['gng'],'password'=>$_POST['password']]]
       );
       header('Location:user.php');
   }
    ?>
</head>
<style>
    body {
        background-color: #E4CDA7;
    }
</style>
<body>
  <br>
  <form method="POST">
    <div class="text-center m-3">
    <h2>TICKCAMP-MU</h2>
    </div>
    <div class="container mb-2">
  <label for="tes" class="form-label">Nama</label>
  <input type="text" class="form-control" id="tes" name="inp_nm" value="<?php echo $form->nama?>" disabled="">
  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
  <input type="text" class="form-control" id="exampleFormControlTextarea1" name="inp_almt" value="<?php echo $form->alamat?>" disabled="">
  <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="inp_ntlp" value="<?php echo $form->no_telp?>" disabled="">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="password" class="form-control" id="exampleFormControlInput1" name="password" value="<?php echo $form->password?>" disabled="">
      <label for="disabledSelect" class="form-label">Pilih Gunung</label>
      <select id="disabledSelect" class="form-select" name="gng" disabled="" >
        <option selected><?php echo $form->gunung?></option><br>
      </select>
    <br><br>
      <div>
        <center>
        <a class="btn btn-success ms-2 fs-5" href="ubahformuser.php?id=<?php echo $form->_id;?>" >Ubah Akun</a>
        <br>
        <br>
        <a href="index.php" class="btn btn-danger ms-2 fs-5">Kembali</a>
      </center>
      </div>  
    </form>
    
   <script type="text/javascript" src="js/form.js"></script>
</body>
</html>