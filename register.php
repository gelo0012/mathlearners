<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resgister</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link rel="icon" href="images/school.png" type="image/icon" sizes="16x16">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>




    <!-- We can now combine rows and columns when there's only one column in that row -->
    <div class="row medium-8 large-7 columns">
      <div class="blog-post">
        <br>
        <center> <img src="images/school.png" width="350" height="400"></center>

      <br>
      
        <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
        <fieldset>

            <div class="form-group">
            <label for="name"></label>  
            <div class="col-md-12">
            <div id="errormsg"style="text-align:center;"><br>
                </div>
                <?php

            if (@$_GET['q7']) { echo '<p style="color:red;font-size:1px;">' . @$_GET['q7']; }
            ?></div>
            <div class="form-group">
            <input id="name" name="name" placeholder="Enter your name" autocomplete="off"  type="text" value="<?php if (isset($_GET['name'])){echo $_GET['name'];}?>">
            
            </div>
            </div>

            

        

                <div class="form-group">
                <input id="username" name="username" placeholder="Choose a username" autocomplete="off" type="text" value="<?php
                if (isset($_GET['username'])){echo $_GET['username'];};?>" style="<?php
                if (isset($_GET['q7'])) echo "border-color:red";?>">
                </div>

                <div class="form-group">
                <label class="col-md-12 control-label" for="phno"></label>  
                <div class="col-md-12"><input id="phno" name="phno" placeholder="Contact Number"  type="number" value="<?php
                if (isset($_GET['phno'])) { echo $_GET['phno'];} ?>">

                <div class="form-group">
                <label class="col-md-12 control-label" for="password"></label>
                <div class="col-md-12">
                    <input id="password" name="password" placeholder="Enter your password"  type="password">
                    
                </div>
                </div>

                <div class="form-group">
                <label class="col-md-12control-label" for="cpassword"></label>
                <div class="col-md-12">
                    <input id="cpassword" name="cpassword" placeholder="Confirm Password"  type="password">
                </div>
                </div>

                <div class="form-group">

              <select id="gender" name="gender" placeholder="Select your gender">
              <option value="" <?php
              if (!isset($_GET['gender']))
                  echo "selected";
              ?>>Select Gender</option>
              <option value="M" <?php
              if (isset($_GET['gender']))
              {
              if ($_GET['gender'] == "M")
                  echo "selected";
              }
              ?>>Male</option>
              <option value="F" <?php
              if (isset($_GET['gender']))
              {
              if ($_GET['gender'] == "F")
                  echo "selected";
              }
              ?>>Female</option> </select>
              </div>
              </div>

              <div class="form-group">
              <label class="col-md-12 control-label" for="branch"></label>
              <div class="col-md-12">
                  <select id="branch" name="branch" placeholder="Math" >
                    

              <option value="MATH" <?php
              if (isset($_GET['branch']))
              {if ($_GET['branch'] == "MATH")
              echo "selected";
              }

              ?>>Choose your Course</option>
              <option value="MATH" <?php
              if (isset($_GET['branch']))
              {if ($_GET['branch'] == "MATH")
                  echo "selected";
              }

              ?>>Math</option>
              <option value="MATH" <?php
              if (isset($_GET['branch']))
              {if ($_GET['branch'] == "MATH")
                  echo "selected";
              }


            ?>></option></select>
            </input>
            </div>

                <div class="form-group">
                <label class="col-md-12 control-label" for=""></label>
                <div class="col-md-12" style="text-align: center"> 
                <input  type="submit" value="Register Now" 
                style="border:6px solid #18ab29;
                border:6px solid #18ab29;
                height: 150px
                border: dotted;
                text-align:center;  
                background-color: #148110; 
                border: none; color: white;float: right;
                padding: 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                width: 100%;
                font-size: 16px;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;"/>
                </div>
                <br><br>

                <hr>

                <a href="index.php" style="
                border:6px solid #18ab29;
                border: dotted;
                text-align:center;  
                background-color: #148110; 
                border: none; color: white;float: right;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                width: 100%;
                font-size: 16px;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;"
                >Login In</a>
                <br><br><br>

                 <!-- <center><a href="index.php" style="text-align:center; color: gray;"> <i class="fa fa-repeat fa fw"></i> Back to Log in</a></center> -->
            </div>
            
                </fieldset>
                </form>

            </div>
        </div>
      </div>







    </div><!-- 
    <script>
<function validateForm() {
  var y = document.forms["form"]["name"].value; 
  if (y == null || y == "") {
    document.getElementById("errormsg").innerHTML="Name must be filled out.";
    return false;
  }
  var br = document.forms["form"]["branch"].value;
  if (br == "") {
    document.getElementById("errormsg").innerHTML="Please select your branch";
    return false;
  }
  if (m.length < 10) {
    document.getElementById("errormsg").innerHTML="Passwordr must be 12 digits long";
    return false;
  }
  var g = document.forms["form"]["gender"].value;
  if (g=="") {
    document.getElementById("errormsg").innerHTML="Please select your gender";
    return false;
  }
  var x = document.forms["form"]["username"].value;
  if (x.length == 0) {
    document.getElementById("errormsg").innerHTML="Please enter a valid username";
    return false;
  }
  if (x.length < 4) {
    document.getElementById("errormsg").innerHTML="Username must be at least 4 characters long";
    return false;
  }
  var m = document.forms["form"]["phno"].value;
  if (m.length != 10) {
    document.getElementById("errormsg").innerHTML="Phone number must be 10 digits long";
    return false;
  }
  var a = document.forms["form"]["password"].value;
  if(a == null || a == ""){
    document.getElementById("errormsg").innerHTML="Password must be filled out";
    return false;
  }
  if(a.length<4 || a.length>15){
    document.getElementById("errormsg").innerHTML="Passwords must be 4 to 15 characters long.";
    return false;
  }
  var b = document.forms["form"]["cpassword"].value;
  if (a!=b){
    document.getElementById("errormsg").innerHTML="Passwords must match.";
    return false;
  }
}
</script> -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>



