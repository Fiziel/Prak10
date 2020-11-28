<?php 
   session_start (); 
   require_once 'connection.php'; 
   $login = $_SESSION ['Login']; 
   $password = $_SESSION ['Password']; 
   if (!count($_POST)>0) {
    $res = mysqli_query ($conn, "SELECT * FROM users WHERE login ='$login' and password = '$password'");
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
      echo "Добро пожаловать, ".$row['first_name']." ".$row['last_name'];
    }
  }
  ?> 
