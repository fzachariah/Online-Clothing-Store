<!DOCTYPE html>



<?php include "DB_Connection.php";?>
<?php include "Functions_Def.php";?>
<?php
				if(isset($_POST['submit']))
				{
					Signup();
					header('location:Login.php');
				}

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sign-up</title>
		<style>
			#case1, #case2, #case3, #case4 {
				display:none;
			}
		</style>
		<script>
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
		</script>
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


        <table align="center" id="tb1">
            <form method="post" action= "Sign-up.php">

                <tr><td><label for="Name">Name</label></td></tr>
                <tr><td> <input type="text" name="name" required /></td></tr>

                <tr><td><label for="Email">Email</label></td></tr>
                <tr><td><input type="text" name="email" required/></td></tr>
				
                <tr><td><label for="City">City</label></td></tr>
                <tr><td><input type="text" name="City" required/></td></tr>
				
                <tr><td><label for="State">State</label></td></tr>
                <tr><td><input type="text" name="state" required/></td></tr>

                <tr><td><label for="Zipcode">Zip Code</label></td></tr>
                <tr><td><input type="number" name="zipcode" required/></td></tr>

                <tr><td><label for="Phone">Phone</label></td></tr>
                <tr><td><input type="text" name="phone" required/></td></tr>

                <tr><td><label for="Connection">Connection</label></td></tr>
                <tr><td> <select name="connection" id="connection" onclick="change()">
                    <option value="default" >Select</option>
					<option value="Student">Student</option>
                    <option value="Faculty">Faculty</option>
                    <option value="Alumni" >Alumni</option>
                    <option value="Friend" >Friend</option></select></td></tr>

				
				<tr id="case1"><td><table align=center>
				<tr><td><label for="Major">Major</label></td></tr>
					<tr><td><input type="text" name="major" /></td></tr>
					<tr><td><label for="Studentid">Student ID</label></td></tr>
					<tr><td><input type="number" name="studentid" /></td></tr>
					</table></td></tr>

                <tr id="case2"><td><table align=center> 
					<tr><td><label for="deptname">Department Name</label></td></tr>
					<tr><td><input type="text" name="deptname" /></td></tr>
					<tr><td><label for="deptnumber">Department Number</label></td></tr>
					<tr><td><input type="number" name="deptnumber" /></td></tr>
					</table></td></tr>
                <tr id="case3"><td><table align=center> 
					<tr><td><label for="Major">Major</label></td></tr>
					<tr><td><input type="text" name="alumnimajor" /></td></tr>
					<tr><td><label for="dateofpass">Date of Pass</label></td></tr>
					<tr><td><input type="date" name="dateofpass" /></td></tr>
					</table></td></tr>
                <tr id="case4"><td><table align=center> 
					<tr><td><label for="association">Association</label></td></tr>
					<tr><td><input type="text" name="association" /></td></tr>
					</table></td></tr>
					
				<tr><td><label for="Username">Username</label></td></tr>
                <tr><td><input type="text" name="username" required/></td></tr>

                <tr><td><label for="Password">Password</label></td></tr>
                <tr><td><input type="text" name="password" required/></td></tr>
				



                <tr><td><input type="submit" name="submit" value="Submit"></td></tr>
            </form>


            <tr><td><br><br></td></tr>





        </table>
    </body>
</html>




</body>
</html>