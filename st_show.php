<!DOCTYPE html>
<html lang="en">
<head>
  <title>Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .row.content {height: 550px}
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    
	.table{
		font-size:22px;
		text-decoration:none;
		text-align:right;
		
}
  </style>
</head>
<body>
<div class="head">
            <div class="head_left" style="background-color:#BFD0D8">
                <img src="image/logo2_main.png">
            </div>
            
        </div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
       
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      
    </div>
    <div class="col-sm-8 text-center"> 
    <h3 class="text-center btn-info"><b>Profile of Student<b></h3><br>
   <table>
   <tr><td style="margin-left:100px; padding-left:260px">
    <img src="1.jpg" alt="not found" style="height:150px; width:150px" >
    </td>
    <td style="font-size:25px; color:#120E6B; padding-left:10px">Student name</td>
   </tr>
  </table><br>
    <table class="table">
    <tr>
    <td> Name:</td>
   <td> from database</td>
   </tr>
    
     <tr>
    <td> ID:</td>
   <td> from database</td>
   </tr>
   
   <tr>
    <td> Section:</td>
   <td> from database</td>
   </tr>
    <tr>
    <td> Phone Number:</td>
   <td> from database</td>
   </tr>
   
    <tr>
    <td> Email:</td>
   <td> from database</td>
   </tr>
    
    <tr>
    <td> Address:</td>
   <td> from database</td>
   </tr>
    
    </table>
    
    </div>
    <div class="col-sm-2 sidenav">
    
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>