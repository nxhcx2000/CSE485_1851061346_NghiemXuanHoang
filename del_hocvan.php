<?php 
    session_start();
    define('TEMPLATE', true);
    if(isset($_SESSION['email']) && isset($_SESSION['pass'])){
  
        include_once('../config.php');

        $id = $_GET['id'];
        $sql = "DELETE FROM giaoduc WHERE id=$id";
        $query = mysqli_query($conn, $sql);
        header('location: index.php?page=hocvan');
   }
   else{
       header('location: index.php');
   }
?>