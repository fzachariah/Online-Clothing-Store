<!DOCTYPE html>
<?php include "DB_Connection.php";?>
<?php include "Functions_Def.php";?>
<?php
session_start();
?>

<html>
<head>
    <title>Shopping Site</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap.js"></script>
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
          <a class="navbar-brand white" style="font-size: 28px" href="#">Online Retail Application</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse right">
          <ul class="nav navbar-nav white right">
           
            <li><a href="index.php">Log Out</a></li>
            
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>
<!-- Header section ends -->





<section class="wrapper">

        
            <div class="leftNav">
              <nav id="spy">
            <ul class="sidebar-nav nav">
                <li class=""> <a href="#home" class=""><span class="fa fa-home solo">Admin</span></a>

                </li>
                <li class="sidebar-brand active"> <a href="Edit-Items.php" data-scroll="" class="">
                            <span class="fa fa-anchor solo">Edit Items</span>
                        </a>

                </li>
               
            </ul>
        </nav>
            </div>
            <div class="rightNav">
            <div class ="table">


 <form method="post" action= "Edit-Items.php" >        
<table class="table table-striped" id="Table1">
  <thead>
    <tr>
    <th></th>
        <th>ITEM ID</th>
        <th>DESCRIPTION</th>
        <th>TYPE</th>
        <th>SIZE</th>
        <th>BRAND</th>
        <th>GENDER</th>
        <th>PRICE</th>
        <th>VALUE</th>
      </tr>
  </thead>
  <tbody>
   <?php 
        readRowsWhichAreNotCheckIn();
        ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>

</div>
        </div>
    
</section>



<!-- footer section -->
<footer class="footer">
      <div class="container">
        <p class="text-muted">Copyright &#169; Online Retail Store.</p>
      </div>
    </footer>


    
</body>
</html>