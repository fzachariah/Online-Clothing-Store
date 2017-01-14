<?php include "DB_Connection.php";?>
<?php


//Function from Navigation Page
function LoginMethod() {
    global $connection;
	$username = $_POST['username'];
	$password = $_POST['password'];

			
    $query = "SELECT PERSON_ID FROM person WHERE USERNAME='$username' AND PASSWORD='$password'";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }
    if ($result->num_rows == 1) {

        echo "Login Success";
        session_start(); 
        $_SESSION["person_id"] = $row['PERSON_ID'];
        header('location:View-Items.php');

    }

	    else {

        echo "Login Failed. Please try again";
        
    }
}

function AdminLogin() {
	global $connection;
	$username = $_POST['username'];
	$password = $_POST['password'];
	
    $query = "SELECT ADMIN_ID_FK FROM login WHERE USER_ID='$username' AND PASSWORD='$password'";
	
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }
    if ($result->num_rows == 1) {

        echo "Login Success";
        header('location:Edit-Items.php');

    }

	    else {

        echo "Login Failed. Please Try Again.";
        
    }
}

function Signup() {


    global $connection;
    $name = $_POST['name'];
	
    $email = $_POST['email'];
    $city = $_POST['City'];
    $state = $_POST['state'];
    $zipcode=$_POST['zipcode'];
    $phone=$_POST['phone'];
    $conn=$_POST['connection'];
	$username=$_POST['username'];
	$password=$_POST['password'];


    $query = "INSERT INTO person (name,email,city,state,zip,phone,connection,username,password,is_admin)";
    $query .= "VALUES ('$name','$email','$city','$state','$zipcode','$phone','$conn','$username','$password',0)";

    $result = mysqli_query($connection, $query);
	if(!$result) {
        die('Query FAILED' . mysqli_error());
    }
	else 
	{
		$query0 = "SELECT PERSON_ID FROM person WHERE email='$email'";
		$result0 = mysqli_query($connection, $query0);

	
		
		if(!$result0) 
		{
			die('Query FAILED' . mysqli_error());
		}
		else
		{
			while($row = $result0->fetch_assoc()) {
			$personid=$row["PERSON_ID"];
			}
		}
		
		if($conn == "Student")
		{
			$major=$_POST['major'];
			$studentid=$_POST['studentid'];
			$query1 = "INSERT into student(id_fk,major, student_id) VALUES('$personid','$major','$studentid')";
			$result1 = mysqli_query($connection, $query1);
				if(!$result1) 
				{
				die('Query FAILED' . mysqli_error());
				}
				else
				{
					echo "Your profile has been created. Please Login";
					
				}
		}
		if($conn == "Faculty")
		{
			$deptname=$_POST['deptname'];
			$deptnumber=$_POST['deptnumber'];
			$query2 = "INSERT into faculty(id_fk,dept_name, dept_no) VALUES('$personid','$deptname','$deptnumber')";
			$result2 = mysqli_query($connection, $query2);
				if(!$result2) 
				{
				die('Query FAILED' . mysqli_error());
				}
				else
				{
					echo "Your profile has been created. Please Login";
					
				}
		}
		if($conn == "Alumni")
		{
			$alumnimajor=$_POST['alumnimajor'];
			$dateofpass=$_POST['dateofpass'];
			$query3 = "INSERT into alumni(id_fk,major, date_of_pass) VALUES('$personid','$alumnimajor','$dateofpass')";
			$result3 = mysqli_query($connection, $query3);
				if(!$result3) 
				{
				die('Query FAILED' . mysqli_error());
				}
				else
				{
					echo "Your profile has been created. Please Login";
					
				}
		}
		if($conn == "Friend")
		{
			$association=$_POST['association'];
		

			$query4 = "INSERT into friends(id_fk,association) VALUES('$personid','$association')";
			$result4 = mysqli_query($connection, $query4);
				if(!$result4) 
				{
				die('Query FAILED' . mysqli_error());
				}
				else
				{
					echo "Your profile has been created. Please Login";
					
				}
		}
		
	}
}
function updateItems()
{
	global $connection;
	 $count = 0;
	 foreach($_POST['updateId'] as $selected){
        $current_date = date("Y-m-d H:i:s");
		$CurValue = $_POST['valueChange'][$count];
		echo $CurValue;
		$count++;
		//echo $CurValue;
        $query = "UPDATE item SET Checked_In=1, value='$CurValue, date_posted='$current_date' WHERE item_id='$selected'";
        //$query .= "Checked_In = '1',";
		//$query .= "VALUE = $CurValue,";
		//$query .= "DATE_POSTED = '$current_date'";
        //$query .= "WHERE ITEM_ID = '$selected' ";
        $result = mysqli_query($connection, $query);
        if(!$result) {

            die("QUERY FAILED123" . mysqli_error($connection));    
        }else {
            $message = "Item/Items Updated!";
            if($count==1)
			
			echo "<script type='text/javascript'>alert('$message');</script>";
			
            //echo "Ordered"; 

        }
	
	
}
}



function readRowsWhichAreNotCheckIn()
{
	 global $connection;
    $query = "SELECT * FROM ITEM WHERE IS_SOLD='0' and Checked_In='0'";
    $result = mysqli_query($connection, $query);
    if ($result->num_rows > 0) {
        echo "<form method=\"post\" action= \"Edit-Items.php\" >
        <table align=\"center\" class=\"DataDisplay\" id =\"Table1\"><tr>
        <th> </th>
        <th>ITEM ID</th>
        <th>DESCRIPTION</th>
        <th>TYPE</th>
        <th>SIZE</th>
        <th>BRAND</th>
        <th>GENDER</th>
        <th>PRICE</th>
        <th>Value</th>

        </tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $value=$row["ITEM_ID"];
            echo "<tr>
            <td><input type=\"checkbox\" name=\"updateId[]\" value=\"$value\" /></td>
            <td>".$row["ITEM_ID"]."</td>
            <td>".$row["DESCRIPTION"]."</td>
            <td>".$row["TYPE"]."</td>
            <td>".$row["SIZE"]."</td>
            <td>".$row["BRAND"]."</td>
            <td>".$row["GENDER"]."</td>
            <td>".$row["ASKING_PRICE"]."</td>
            <td><input type=\"text\" name=\"valueChange[]\" /></td>
            </tr>";
        }
        echo "</table>";
        echo"<input type=\"submit\" align=\"center\" value=\"submit\" name=\"MakeChanges\"  >";
        echo "</form>";
    } else {
        echo "0 results";
    }
    if(isset($_POST['MakeChanges'])&& isset($_POST['valueChange']) && isset($_POST['updateId']) && count($_POST['updateId']) >  0)
    {
        updateItems();
    }

	
	
}
?>