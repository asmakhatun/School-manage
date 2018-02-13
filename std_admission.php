<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="icon" href="file:///C|/xampp/htdocs/project_school/image/t_log.png">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<link href="css/admin_main.css" rel="stylesheet" type="text/css">
<link href="css/t_entry_design.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="head">
            <div class="head_left">
                <img src="image/logo2_main.png">
            </div>
            
        </div>
        <div class="menu">
            <ul>
                <li><a>Home</a></li>
                <li><a>Contact</a></li>
                <li><a>Admission</a></li>
                <li><a>Logout</a></li>
            </ul>
        </div>
        <div class="t_content">
            <br>
            <form action="" method="POST">
            
            <div class="col-sm-3"><label class="box"> Select class</label></div>
                <div class="col-sm-9"><input type="text" name="Select_class" placeholder="Name of class" class="i_box" required=""></div>
           
                <div class="col-sm-3"><label class="box"> Student Name</label></div>
                <div class="col-sm-9"><input type="text" name="s_name" placeholder="Student Name" class="i_box" required=""></div>
                <div class="col-sm-3"><label class="box"> Date of birth</label></div>
                <div class="col-sm-9"><input type="date" name="s_date" class="i_box" required=""></div>
                
              
                <div class="col-sm-3"><label class="box">  Phone Number</label></div>
                <div class="col-sm-9"><input type="number" name="s_phone" placeholder=" Phone Number" class="i_box"required=""></div>
                
                <div class="col-sm-3"><label class="box">  E-mail</label></div>
                <div class="col-sm-9"><input type="email" name="s_email" placeholder=" E-mail" class="i_box"required=""></div>
                
                <div class="col-sm-3"><label class="box"> Father's Name</label></div>
                <div class="col-sm-9"><input type="text" name="father_name" class="i_box" required=""></div>
                
           <div class="col-sm-3"><label class="box"> Father's Occupation</label></div>
                <div class="col-sm-9"><input type="text" name="Father_Occupation" class="i_box" required=""></div>
                
           <div class="col-sm-3"><label class="box"> Father's Contact no.</label></div>
                <div class="col-sm-9"><input type="numbbr" name="Father_Contact"class="i_box" required=""></div>
                <div class="col-sm-3"><label class="box">  Mother's Name</label></div>
                <div class="col-sm-9"><input type="text" name="Mother_Name" class="i_box"required=""></div>
                
                <div class="col-sm-3"><label class="box"> Mother's Contact no.</label></div>
                <div class="col-sm-9"><input type="number" name="Mother_Contact" class="i_box"required=""></div>
           
                <div class="col-sm-3"><label class="box"> Present Address</label></div>
                <div class="col-sm-9"> <textarea row="8" cols="90" class="area_box"required=""></textarea></div>
                
                 <div class="col-sm-3"><label class="box"> Parmanent Address</label></div>
                <div class="col-sm-9"> <textarea row="6" cols="90" class="area_box"required=""></textarea></div>
                
                
                
                 <div class="col-sm-3"><label class="box"required=""> Gender</label></div>
                <div class="col-sm-9 radio" >
                    <input type="radio" value="Male" name="gender"> Male &nbsp;&nbsp;&nbsp;
                    <input type="radio" value="Male" name="gender"> Female
                </div>
                
                
                <div class="col-sm-12 null">  </div>
                <div class="col-sm-3"><label class="box"required="">Profile Picture</label></div>
                <div class="col-sm-9 file"><input  type="file" name="myFile"></div>
                
               
               
                 
                
                
                 <div class="col-sm-6"></div>
                    <div class="col-sm-6"><input  class="alert-success"type="submit" name="submit" value="SUBMIT">
                   <input  class="alert-danger"type="reset" name="reset" value="RESET" ></div>
                
                </div>
                    
        
            </form>  
        </div>
        
         <div class="footer">
            
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
