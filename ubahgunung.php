<html>

<head>
<link rel="shortcut icon" type="image/png" href="image/logo-tickcamp1.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>UBAH GUNUNG</title>
    <?php
    require 'dbconnect.php';
    if (isset($_GET['id'])) {
        $gng=$gunungcollection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
    }
    if (isset($_POST['sub'])) {
        $filename = $_FILES["imagess"]["name"];
        $tempname = $_FILES["imagess"]["tmp_name"];
        $folder = "./image/listnew/" . $filename;
        move_uploaded_file($tempname, $folder);
        $gunungcollection->updateOne(
            ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
            ['$set' => ['nama_gng' => $_POST['nm'],'gambar_gng'=>$filename]]
        );
        header('Location:admin.php');
    }
    ?>
</head>

<style>
    body {
        background-color: #E4CDA7;
    }
</style>

<body>
<center>
    <h1>UBAH GUNUNG</h1>
</center>
<form method="POST" enctype="multipart/form-data">
    <div class="form-floating mb-2 ">
        <input type="text" name="nm" class="form-control" id="floatingInput" value="<?php echo $gng->nama_gng ?>">
        <label for="floatingInput">Nama Gunung</label>
        <input type="file" name="imagess" class="form-control" value="Upload" id="floatingInput" accept=".jpeg,.jpg,.png">
    </div>
    <div class="form-floating pt-3">
        <input class="btn btn-success ms-2" type="submit" name="sub" value="INSERT">
        <a href="admin.php" class="btn btn-primary ms-2">Kembali</a>
    </div>
    </form>
    </body>
</html>