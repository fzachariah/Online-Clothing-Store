<!DOCTYPE html>
<?php include "DB_Connection.php";?>
<?php include "Functions_Def.php";?>
<?php
session_start();
?>
<?php include 'header.php';?>
            <div class="rightNav">
            <div class ="table">


 <form method="post" action= "view-cart.php" >        
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
        <th>IMAGE</th>
      </tr>
  </thead>
  <tbody>
   <?php 
        readCartRows();
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




<?php include 'popup.php';?>

 </div>


<?php include 'footer.php';?>


    
</body>
</html>