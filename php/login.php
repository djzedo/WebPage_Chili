<?php
   //include("connection.php");
   //session_start();
      // username and password sent from form 
      $user=$_POST['user']; 
      $pass=$_POST['pass'];
      $user = stripcslashes($user);
      $pass = stripcslashes($pass);
      $user = mysql_real_escape_string($user);
      $pass = mysql_real_escape_string($pass);

      //connect server y DB
      mysql_connect("localhost","root","0124");
      mysql_select_db("users");
      
      $result = mysql_query("SELECT * FROM users_tbl WHERE user = '$user' and pass = '$pass'") 
                or die("failed to query database". mysql_error());
      $row = mysql_fetch_array($result);
      if($row['user'] == $user && $row['pass'] == $pass){
          echo "login success, welcome " .$row['user'];
      }esle{
          echo "failed to login";
      }
      
      /*$sql = "SELECT * FROM users_tbl WHERE user = '$user' and pass = '$pass'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $user and $pass, table row must be 1 row
		
      if($count == 1) {
         session_register("user");
         $_SESSION['login_user'] = $user;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }*/
?>