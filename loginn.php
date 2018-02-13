<?php 


    $host="localhost";
    $user="root";
    $pass="";
    $dbname="coder_school";
    $connection=new mysqli($host,$user,$pass,$dbname);
    if($connection->connect_error)
    {

      die($connection->connect_error);
    } 
	
	
	
	
	
	
	 if(isset($_POST['submit']))
  {
 $email= mysqli_real_escape_string($connection,$_POST['email']);
      $password= mysqli_real_escape_string($connection,$_POST['password']);
 
 $login_query="SELECT * FROM log_in WHERE email='$email' AND password='$password'";

 if($connection->query($login_query))
     {
         $result=$connection->query($login_query);
         if($result->num_rows==1)
         {
			
			
		header('location: teacher_entry.php');
			 }
			else{
				   echo "Your Email or Password is invalid";
				 }
                          
               
         }
         
     

  } 
?>




<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
   
    padding-top: 100px;
    padding-left:450px;
     padding-right:450px;
     padding-bottom:100px;
}
</style>
<body background="4.jpg">



<div>
<h1 align="center" style="margin-top:100px">LOG IN</h1>
  <form action="" method="POST">
   
    <input type="text" id="fname" name="email" placeholder="Email Address">

    
    <input type="text" id="lname" name="password" placeholder="Password">

    
    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>
</html>