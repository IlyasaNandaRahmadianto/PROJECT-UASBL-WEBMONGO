<?php
    require 'dbconnect.php';
    $gunungcollection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
    header('Location:admin.php'); 
?>
