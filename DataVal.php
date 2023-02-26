<?php

require 'connection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $email=$_POST['name'];
  $pwd=$_POST['password'];

  $result = $conn->query("select * from agri_reg where Email = '$email'");

  $row = $result->fetch_assoc();

  $pass= $row['Password'];

  $User = $row['UserType'];

  
  if($User == "Consumer"){
    if($pass != $pwd){

      // echo $User; 
      echo '<script>
      alert("Password is wrong");
      window.location.replace("../login.html"); 
      </script>';
      // echo "<h1>Password is wrong<h1><br>";
      // echo "<a href='login.html'>Click here to login again</a>";
    }else{
      echo '<script>
      window.location.replace("../customer.html"); 
      </script>';
    }
  }elseif($User == "Former"){
    
      if($upass != $password){
  
        // echo $User; 
        echo '<script>
        alert("Password is wrong");
        window.location.replace("../login.html"); 
        </script>';
        // echo "<h1>Password is wrong<h1><br>";
        // echo "<a href='login.html'>Click here to login again</a>";
      }else{
        echo '<script>
        window.location.replace("../farmer.html"); 
        </script>';
      }
  }elseif($User == "Merchent"){
    
    if($upass != $password){

      // echo $User; 
      echo '<script>
      alert("Password is wrong");
      window.location.replace("../login.html"); 
      </script>';
      // echo "<h1>Password is wrong<h1><br>";
      // echo "<a href='login.html'>Click here to login again</a>";
    }else{
      echo '<script>
      window.location.replace("../business.html"); 
      </script>';
    }
  }elseif($User == "Shopkeeper"){
    
    if($upass != $password){

      // echo $User; 
      echo '<script>
      alert("Password is wrong");
      window.location.replace("../login.html"); 
      </script>';
      // echo "<h1>Password is wrong<h1><br>";
      // echo "<a href='login.html'>Click here to login again</a>";
    }else{
      echo '<script>
      window.location.replace("../shopkeeper.html"); 
      </script>';
    }
  }else{
    echo '<script>
      alert("User not found");
      window.location.replace("../login.html"); 
      </script>';
  }
}

?>