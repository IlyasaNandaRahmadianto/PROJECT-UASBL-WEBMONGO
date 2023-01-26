<html>
<head>
    <title>UBAH FORM</title>
    <link rel="shortcut icon" type="image/png" href="image/logo-tickcamp1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<style>
    body {
        background-color: #E4CDA7;
    }
</style>
<body>
    <?php 
    require 'dbconnect.php';
    $gunung = $gunungcollection->find([]);
    if (isset($_GET['id'])) {
       $form = $formcollection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
    }
    if (isset($_POST['sub'])) {
        
        $formcollection->updateOne(
            ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
            ['$set' => ['nama' => $_POST['nm'], 'alamat' => $_POST['almt'], 'no_telp' => $_POST['ntlp'], 'gunung' => $_POST['gnug'],'password' => $_POST['password']]]
        );
        header('Location:admin.php');
    }
    ?>
    <h1 class="text-center">UBAH FORM ADMIN</h1>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-floating mb-2 ">
        <input type="text" name="nm" class="form-control" id="nama" value="<?php echo $form->nama ?>">
        <label for="nama">Nama</label>
        </div>
        <div class="form-floating mb-2 ">
        <input type="text" name="almt" class="form-control" id="al" value="<?php echo $form->alamat ?>">
        <label for="al">Alamat</label>
        </div>
        <div class="form-floating mb-2 ">
        <input type="text" name="ntlp" class="form-control" id="nt" value="<?php echo $form->no_telp ?>">
        <label for="nt">No Telp</label>
        </div>
        <div class="form-floating mb-2 ">
        <input type="password" name="password" class="form-control" id="pw" value="<?php echo $form->password ?>">
        <label for="pw">Password</label>
        </div>
        <div class="form-floating mb-2 ">
        <select name="gnug" id="gunu" class="form-select"> 
            <option selected><?php echo $form->gunung; ?></option>
            <?php
            foreach($gunung as $gng) {
            ?>
            <option><?php echo $gng->nama_gng?></option>
            <?php } ?>
        </select>
        <label for="gunu">Gunung</label>
            </div>


    <center>
    <div class="form-floating pt-3">
        <input class="btn btn-success ms-2 fs-4" type="submit" name="sub" value="UBAH">
        <a href="admin.php" class="btn btn-primary ms-2 fs-4">Kembali</a>
    </div>
    </center>

</body>
</html>