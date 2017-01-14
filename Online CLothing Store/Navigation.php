<!DOCTYPE html>


<?php include "DB_Connection.php";?>
<?php include "Functions_Def.php";?>

<?php
if(isset($_POST['submit']))
{
    LoginMethod();
}



?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Navigation</title>
    </head>
    <body>
        <form action="Navigation.php" method="post"><input type="submit" value="submit" name="submit" ></form>
        <?php

        $current_date = date("Y-m-d H:i:s");
        echo $current_date;
        ?>
    </body>
</html>