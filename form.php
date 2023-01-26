<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pesanan | TickCamp</title>
  <link rel="shortcut icon" type="image/png" href="image/logo-tickcamp1.png">
  <link rel="stylesheet" type="text/css" href="style/form1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <?php
    require 'dbconnect.php';
    $gunung = $gunungcollection->find();
    if (isset($_POST['sub'])) {
        require 'dbconnect.php';
        $insertOneResult = $formcollection->insertOne([
            'nama' => $_POST['inp_nm'],
            'alamat' => $_POST['inp_almt'],
            'no_telp' => $_POST['inp_ntlp'],
            'gunung' => $_POST['gng'],
            'password' => $_POST['password']
        ]);
        header('Location:index.php');
    }
    ?>
</head>
<style>
    body {
        background-color: #E4CDA7;
    }
</style>
<body>
  <section>
  <form method="post">
  <div>
  <h4>PEMESANAN TICKCAMP</h4>
  </div>
<div class="container mb-2">
  <label for="exampleFormControlInput1" class="form-label">Nama</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan nama" name="inp_nm">
  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="masukan alamat" name="inp_almt"></textarea>
  <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan no.telp" name="inp_ntlp">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="masukan password" name="password">
      <label for="disabledSelect" class="form-label">Pilih Gunung</label>
      <select id="disabledSelect" class="form-select" name="gng" placeholder="Pilih Gunung">
      <option>--PILIH GUNUNG--</option><br>
       <?php foreach ($gunung as $gng) { ?>
       <option value="<?php echo $gng->nama_gng; ?>"><?php echo strtoupper($gng->nama_gng);?></option>
      <?php } ?>
      </select>
      <center>
      <br>
      <button type="submit" class="btn btn-success" name="sub" onclick="tes()">Pesan</button>
      <br><br>
      <a href="index.php" class="btn btn-danger">Kembali</a>
      </center>
      </div>
  </form>
  </section>
  
   <script type="text/javascript" >
    function tes(){
        var nama = document.getElementById("inp_nm");
        alert("Haiii, "+nama+ " !!!, Tiketmu berhasil diproses\nTerima kasih");
    }
   </script>
</body>
</html>