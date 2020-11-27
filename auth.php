<?php
   session_start();
   require_once 'connection.php'; //підключення скрипту
     if (count($_POST)>0) {
       $res = mysqli_query ($conn, "SELECT * FROM users");
       $row = mysqli_fetch_array($res);
       if (is_array($row)){
         $_SESSION['id'] = $row['id'];
         $_SESSION['login'] = $row['login'];
         Header ("Location: restricted.php"); 
   } else {
     echo 'Invalid password';
      }
   }
   ?> 
