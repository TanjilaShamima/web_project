<?php
  $conn = mysqli_connect("localhost", "root", "", "university");
  if(!$conn){
	  echo ("Error Connection:".mysqli_connect_error());
  }
  if(isset($_POST['submit'])){
	  $email = $_POST['email'];
	  $pass = $_POST['pass'];
	  
   $sql = "select * from register where email= '$email' and password = '$pass'";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);
   
   if($count ==1){
	   echo "Login Success";
   }
   else{
	   echo "login failed";
   }
   
  }

?>