<!DOCTYPE html>

<?php include "DB_Connection.php";?>
<?php include "Functions_Def.php";?>
<?php
session_start();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edit Items</title>
        <style>

        </style>
    </head>


    <body>


        <h1 align="center"><font size="10" color="black">Online Clothing Store</font></h1>
        <h3 align="center"><color="black">Catawba College</font></h3>
        <table align="center" cellpadding=30>
            <tr>
               
               

            </tr>
        </table>


        <?php 
        readRowsWhichAreNotCheckIn();
        ?>



    </body>
</html>