<?php 
   session_start (); 
   require_once 'connection.php'; 
   if (!count($_POST)>0) {
    $res = mysqli_query ($conn, "SELECT * FROM users");
    $row = mysqli_fetch_array($res);
   if (!($_SESSION['id'] = $row['id'] && $_SESSION['login'] = $row['login'])) 
    {
      echo "Cпробуйте ще раз <br> "; 
       echo "<html> 
       <head><title>Information</title>
       <a href='login.php'>login</a>
       </head> 
       </Html> ";
    }
    else{
      echo "Ваша сторінка";
    }
  }
  ?> 