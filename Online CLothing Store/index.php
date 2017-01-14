<!DOCTYPE html>
<?php include "DB_Connection.php";?>
<?php include "Functions_Def.php";?>
<?php

session_start();

        if(isset($_POST['submit']))
        {
        LoginMethod();
        }


        if(isset($_POST['register']))
        {
          Signup();
          header('location:index.php');
        }

        if(isset($_POST['login']))
        {
        AdminLogin();
        }
        ?>
<html>
<head>
  <title>Shopping Site</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="css/bootstrap.min.js"></script>
  <script type="text/javascript" src="css/bootstrap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<!-- Header section -->
<nav class="navbar navbar-default navbar-fixed-top" style="background-color: black;position: relative;">
<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand white" style="font-weight: bolder;
    font-size: x-large;" href="#">PBL Clothing Closet</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse right">
          <ul class="nav navbar-nav white right">
           
           
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>
<!-- Header section ends -->





<section class="wrapper">
<div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login" style="overflow: scroll;
    height: 552px;
    overflow-x: hidden;">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-4">
                <a href="#" class="active" id="login-form-link">Login</a>
              </div>
              <div class="col-xs-4">
                <a href="#" id="register-form-link">Register</a>
              </div>
               <div class="col-xs-4">
                <a href="#" id="admin-form-link">Admin Login</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body ">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="index.php" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                      </div>
                    </div>
                  </div>
                  
                </form>
                <form id="register-form" action="index.php" method="post" role="form" style="display: none;">
                  <div class="form-group">
                    <input type="text" name="name" id="name" required tabindex="1" class="form-control" placeholder="Name" value="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" required tabindex="1" class="form-control" placeholder="Email Address" value="">
                  </div>
                  <div class="form-group">
                    <input type="city" name="City" id="City" required tabindex="2" class="form-control" placeholder="city">
                  </div>
                  <div class="form-group">
                    <input type="state" name="state" id="state" tabindex="2" required class="form-control" placeholder="state">
                  </div>
                  <div class="form-group">
                    <input type="text" name="phone" id="phone" tabindex="2" required class="form-control" placeholder="phone number">
                  </div>
                   <div class="form-group">
                    <input type="number" name="zipcode" id="zipcode" tabindex="2" required class="form-control" placeholder="Zip Code">
                  </div>
                   <div class="form-group">
                    <select name="connection" placeholder="connection" id="connection" onclick="change()">
                    <option value="default" >Select</option>
          <option value="Student">Student</option>
                    <option value="Faculty">Faculty</option>
                    <option value="Alumni" >Alumni</option>
                    <option value="Friend" >Friend</option></select>
                  </div>
                  <div id="case1">
                    <div class="form-group">
                    <input type="text" name="major" id="major" tabindex="2"  class="form-control" placeholder="Major">
                    <div class="form-group">
                    <input type="text" name="studentid" id="studentid" tabindex="2" class="form-control" placeholder="Student Id">
                  </div>
                  </div>
                  </div>

                  <div id="case2">
                    <div class="form-group">
                    <input type="text" name="deptname" id="deptname" tabindex="2" class="form-control" placeholder="Department Name">
                    <div class="form-group">
                    <input type="number" name="deptnumber" id="deptnumber" tabindex="2" class="form-control" placeholder="Department Number">
                  </div>
                  </div>
                  </div>


                   <div id="case3">
                    <div class="form-group">
                    <input type="text" name="alumnimajor" id="alumnimajor" tabindex="2" class="form-control" placeholder="Major">
                    <div class="form-group">
                    <input type="date" name="dateofpass" id="dateofpass" tabindex="2" class="form-control" placeholder="Date Of Pass">
                  </div>
                  </div>
                  </div>


                   <div id="case4">
                    
                    <div class="form-group">
                    <input type="text" name="association" id="association" tabindex="2" class="form-control" placeholder="Association">
                  </div>
                  </div>
                  
               <div class="form-group">
                    <input type="text" name="username" id="username" required tabindex="2" class="form-control" placeholder="User Name">
                  </div>

                  <div class="form-group">
                    <input type="password" name="password" id="password" required tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register" id="register" tabindex="4" class="form-control btn btn-register" value="Register">
                      </div>
                    </div>
                  </div>
                </form>

                 <form id="admin-form" action="index.php" method="post" role="form" style="display: none;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Admin Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Admin Password">
                  </div>
                  
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login" id="login" tabindex="4" class="form-control btn btn-login" value="Log In">
                      </div>
                    </div>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</section>



<?php include 'footer.php';?>


    <script>
      
$(function() {

    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
     $("#admin-form").fadeOut(100);
    $('#admin-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
     $("#admin-form").fadeOut(100);
    $('#admin-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
   $('#admin-form-link').click(function(e) {
    $("#admin-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
     $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});

      $(function() {

    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});
      function change() {
        id=document.getElementById("connection").value;
        switch(id) {
          case "default":
            document.getElementById("case1").style.display="none";
            document.getElementById("case2").style.display="none";
            document.getElementById("case3").style.display="none";
            document.getElementById("case4").style.display="none";
            break;
          case "Student":
            document.getElementById("case1").style.display="block";
            document.getElementById("case2").style.display="none";
            document.getElementById("case3").style.display="none";
            document.getElementById("case4").style.display="none";
            break;
          case "Faculty":
            document.getElementById("case1").style.display="none";
            document.getElementById("case2").style.display="block";
            document.getElementById("case3").style.display="none";
            document.getElementById("case4").style.display="none";
            break;
          case "Alumni":
            document.getElementById("case1").style.display="none";
            document.getElementById("case2").style.display="none";
            document.getElementById("case3").style.display="block";
            document.getElementById("case4").style.display="none";
            break;
          case "Friend":
            document.getElementById("case1").style.display="none";
            document.getElementById("case2").style.display="none";
            document.getElementById("case3").style.display="none";
            document.getElementById("case4").style.display="block";
            break;

        }
      }
    
    window.onload=function(){
       document.getElementById("case1").style.display="none";
            document.getElementById("case2").style.display="none";
            document.getElementById("case3").style.display="none";
            document.getElementById("case4").style.display="none";
    }
    </script>
</body>
</html>