<!DOCTYPE html>
<?php include "DB_Connection.php";?>
<?php include "Functions_Def.php";?>
<?php
session_start();
if(isset($_POST['CheckOut']) )
    {
        checkOut();
    }
?>
<?php include 'header.php';?>
 <div class="rightNav">
         <ul class="list-group">
   <?php 
        readRows();
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
  </ul></div></section>
        

<?php include 'popup.php';?>

 </div>


<?php include 'footer.php';?>
    
</body>
</html>