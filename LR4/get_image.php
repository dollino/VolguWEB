<?php 
    session_start();
    if($_SESSION['user']){
        header('Content-type: image/jpeg');
        imagejpeg(imagecreatefromjpeg('images/'. $_GET['img']));
    }else{
        header('Location: index.php');
    }
?>