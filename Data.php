<?php

require 'connection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name =$_POST['username'];
  $email =$_POST['email'];
  $user =$_POST['UserType'];
  $pwd =$_POST['password'];

  $sql = "insert into agri_reg values('$name','$email','$user','$pwd')";

  if(mysqli_query($conn,$sql)){
    echo '<script>
      alert("Succesfuly registerd");
      window.location.replace("../login.html"); 
      </script>';
  }
  else{
    echo "Error : ".$mysqli_error($conn);
  }


}


?>