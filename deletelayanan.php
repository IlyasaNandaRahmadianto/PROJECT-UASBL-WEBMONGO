<?php
    require 'dbconnect.php';
    $layanancollection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
    header('Location:admin.php'); 
?>
