<!DOCTYPE html>
<?php include "DB_Connection.php";?>
<?php include "Functions_Def.php";?>
<?php
session_start();
?>
<?php include 'header.php';?>
      <div class="rightNav">
      <div class ="table">
<table class="table table-striped">
  <thead>
    <tr>
    
    <th>Item Id</th>
      <th>Description</th>
      <th>Type</th>
      <th>Size</th>
      <th>Brand</th>
      <th>Gender</th>
      <th>Price</th>
      <th>Image</th>
      
      </tr>
  </thead>
  <tbody>
  <?php 
        viewOrders();
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