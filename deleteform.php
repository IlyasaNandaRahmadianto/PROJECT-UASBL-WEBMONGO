<?php
    require 'dbconnect.php';
    $formcollection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
    header('Location:admin.php'); 
?>
