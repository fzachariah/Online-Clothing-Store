<!DOCTYPE html>
<?php include "DB_Connection.php";?>
<?php include "Functions_Def.php";?>
<?php
session_start();
?>
<?php include 'header.php';?>
      <div class="rightNav">

      <div class ="table">
      <form method="post" action= "check.php" > 
<table class="table table-striped">
  <thead>
    <tr>
      <th>Type</th>
      <th>Size</th>
      <th>Brand</th>
      <th>Gender</th>
      <th>Condition</th>
      <th>value</th>
      <th>Asking Price</th>
      
      <th>Description</th>
      <th></th>
      </tr>
  </thead>
  <tbody>
  <?php 
        viewDonations();
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
</form>
</div>
    </div>
  </section>





<?php include 'popup.php';?>

 </div>


<?php include 'footer.php';?>
</script>

    
</body>
</html>