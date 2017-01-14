<!DOCTYPE html>
<?php include "DB_Connection.php";?>
<?php include "Functions_Def.php";?>
<?php
session_start();
if(isset($_POST['submit']))
{
    Donateitem();
}

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
          <a class="navbar-brand white" href="#">Online Retail Application</a>
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
                <li class="sidebar-brand active"> <a href="#home" class=""><span class="fa fa-home solo">Home</span></a>

                </li>
                <li class=""> <a href="View-Items.php" data-scroll="" class="">
                            <span class="fa fa-anchor solo">View Items</span>
                        </a>

                </li>
                <li class=""> <a href="View-Orders.php" data-scroll="" class="">
                            <span class="fa fa-anchor solo">View Orders</span>
                        </a>

                </li>
                <li class=""> <a href="Donate-Items.php" data-scroll="" class="">
                            <span class="fa fa-anchor solo">Donate Items</span>
                        </a>

                </li>
                <li class=""> <a href="View-Donations.php" data-scroll="" class="">
                            <span class="fa fa-anchor solo">ViewDonations</span>
                        </a>

                </li>
            </ul>
        </nav>
            </div>
            <div class="rightNav">
            <div style="text-align:center;color: #1c1c1d;font-size: 30px;font-style: italic;">Donate Clothing</div>
            <hr class="seperatorClass">
            <form method="post" class="form-class" action= "Donate-Items.php">
                 


              
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Description</label>
  <div class="col-xs-3">
    <input class="form-control" type="text" name="description" required id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-form-label">Type</label>
  <div class="col-xs-3">
    <select name="type" id="type">
                    <option value="Shirt">Shirt</option>
                    <option value="Suits">Suits</option>
                    <option value="Children">Jeans</option>
                    <option value="Jackets">Jackets</option>
                    <option value="Sweater">Sweater</option></select>
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Size</label>
  <div class="col-xs-3">
    <input class="form-control" type="number" name="Size" required id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Brand</label>
  <div class="col-xs-3">
    <input class="form-control" type="text" name="Brand" required id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Gender</label>
  <div class="col-xs-3">
   <select name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option></select>

  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Condition</label>
  <div class="col-xs-3">
    <input class="form-control" type="text" name="Condition" required id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Asking Price</label>
  <div class="col-xs-3">
    <input class="form-control" type="number" name="AskingPrice" required id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Category</label>
  <div class="col-xs-9">
    <input class="form-control inline-style" type="text" name="Category1" required id="example-text-input">
    <input class="form-control inline-style" type="text" name="Category2" id="example-text-input">
    <input class="form-control inline-style" type="text" name="Category3" id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Color</label>
  <div class="col-xs-6">
    <input class="form-control inline-style" type="text" name="Colour1" required id="example-text-input">
    <input class="form-control inline-style" type="text" name="Colour2" id="example-text-input">
    
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Select Image to upload</label>
  <div class="col-xs-4">
    <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
   
    
  </div>
</div>


                <div><button class="btn btn-success" style="margin-left: 150px" type="submit" name="submit" value="Submit">Donate</button>
            </form>


          
    
</section>



<!-- footer section -->
<footer class="footer">
      <div class="container">
        <p class="alignCenter">Copyright &#169; Online Retail Store.</p>
      </div>
    </footer>


    
</body>
</html>