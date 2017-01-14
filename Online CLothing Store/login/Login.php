<!DOCTYPE html>



<?php include "DB_Connection.php";?>
<?php include "Functions_Def.php";?>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>

        <h1 align="center"><font size="10" color="black">Online Clothing Store</font></h1>
        <h3 align="center"><color="black">Catawba College</font></h3>
        <table align="center" cellpadding=30>
            <tr>
                <td><form action="Login.php" method="post"><input type="submit" value="Login" name="login" ></form></td>
                <td><form action="Sign-up.php" method="post"><input type="submit" value="Sign-up" name="signup"></form></td>
                <td><form action="Admin-Login.php" method="post"><input type="submit" value="Admin-Login" name="adminlogin"></form></td>

            </tr>
        </table>


        <table align="center">
            <form method="post" action= "Login.php">

                <tr><td><label for="Username">Username</label></td></tr>
                <tr><td> <input type="text" name="username" required /></td></tr>

                <tr><td><label for="Password">Password</label></td><tr>
                <tr><td><input type="text" name="password" required/></td></tr>
				<tr><td><?php
				if(isset($_POST['submit']))
				{
				LoginMethod();
				}

				?></td></tr>


                <tr><td><input type="submit" name="submit" value="Submit"></td></tr>
            </form>


            <tr><td><br><br></td></tr>





        </table>

    </body>
</html>




</body>
</html>