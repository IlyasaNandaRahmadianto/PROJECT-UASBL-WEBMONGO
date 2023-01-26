<html>
    <head>
        <title>ADMIN</title>
        <link rel="stylesheet" href="style/sty1.css">
        <link rel="shortcut icon" type="image/png" href="image/logo-tickcamp1.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <?php
        require 'dbconnect.php'
        ?>
    </head>
    <style>
        body {
            background-color: #E4CDA7;
        }

    </style>
    <body>
        <center>
        <br>
        <table class="table table-bordered" style="width:75%">
            <tr>
                <th>ID Gunung</th>
                <th>Nama Gunung</th>
                <th>Gambar Gunung</th>
            </tr>
            <?php
            $gunung = $gunungcollection->find([]);
            foreach($gunung as $gng) { ?>
                <tr>
                <td><?php echo $gng->_id; ?></td>
                <td><?php echo $gng->nama_gng; ?></td>
                <td><?php echo $gng->gambar_gng; ?></td>
                <td><a class="btn btn-outline-info ms-3" href="ubahgunung.php?id=<?php echo $gng->_id;?>">UPDATE</a></td>
                <td><a class="btn btn-outline-info ms-3" href="deletegunung.php?id=<?php echo $gng->_id?>">DELETE</a></td>
                </tr>
            <?php }
            ?>
        </table>
        <br>
        <form>
            <button type="submit" formaction="insertgunung.php" >TAMBAH GUNUNG</button>
        </form>
        
        <table class="table table-bordered" style="width:75%">
            <tr>
                <th>ID Layanan</th>
                <th>Nama Layanan</th>
                <th>Gambar Layanan</th>

            </tr>
            <?php
            $layan = $layanancollection->find([]);
            foreach($layan as $lyn) { ?>
                <tr>
                <td><?php echo $lyn->_id; ?></td>
                <td><?php echo $lyn->nama_lyn; ?></td>
                <td><?php echo $lyn->gambar_lyn; ?></td>
                <td><a class="btn btn-outline-info ms-3" href="ubahlayanan.php?id=<?php echo $lyn->_id;?>">UPDATE</a></td>
                <td><a class="btn btn-outline-info ms-3" href="deletelayanan.php?id=<?php echo $lyn->_id;?>">DELETE</a></td>
                </tr>
            <?php }
            ?>
        </table>
        <br>
        <form>
            <button type="submit" formaction="insertlayanan.php">TAMBAH LAYANAN</button>
        </form>
        <br>
        <table class="table table-bordered" style="width:75%">
            <tr>
                <th>ID Form</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>NoTelp</th>
                <th>Gunung</th>
            </tr>
            <?php
            $form = $formcollection->find([]);
            foreach($form as $frm) { ?>
                <tr>
                <td><?php echo $frm->_id; ?></td>
                <td><?php echo $frm->nama; ?></td>
                <td><?php echo $frm->alamat; ?></td>
                <td><?php echo $frm->no_telp; ?></td>
                <td><?php echo $frm->password; ?></td>
                <td><?php echo $frm->gunung; ?></td>
                <td><a class="btn btn-outline-info ms-3" href="ubahform.php?id=<?php echo $frm->_id;?>">UPDATE</a></td>
                <td><a class="btn btn-outline-info ms-3" href="deleteform.php?id=<?php echo $frm->_id;?>">DELETE</a></td>
                </tr>
                <?php
            } ?>
        </table>
        <h2><a href="index.php" class="btn btn-primary mt-3">Kembali</a></h2>
        </center>
    </body>
</html>