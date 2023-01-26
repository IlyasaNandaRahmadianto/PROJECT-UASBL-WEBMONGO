<?php
if (isset($_POST['sub'])) {
    require 'dbconnect.php';
    $data=$admincollection->findOne(['username' => 'admin']);
    $datauser = $formcollection->findOne(['nama'=>$_POST['username']]);
    
    if ($_POST['username'] == $data['username'] && $_POST['password'] == $data['password']) {
        header('location:admin.php');
    }else if($_POST['username']==$datauser['nama']&& $_POST['password']==$datauser['password']){
        header('location:user.php?id=' . $datauser->_id);
    } else {
        echo '<script type="text/JavaScript"> 
        alert("Username dan Password Salah");
        </script>';
        header('location:index.php');
    }
}
?>