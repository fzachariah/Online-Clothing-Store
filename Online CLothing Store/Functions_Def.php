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

        //echo "Login Success";
        while($row = $result->fetch_assoc()) {
        session_start();
        $_SESSION["person_id"] = $row['PERSON_ID'];
        //echo $_SESSION["person_id"] ;
        header('location:View-Items.php');
    }

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
        
        //$CurValue = $_POST['valueChange'][$selected];
        //echo $CurValue;
        $count++;
        //echo $CurValue;
        $query = "UPDATE item SET Checked_In=1, value='$selected', date_posted='$current_date' WHERE item_id='$selected'";
        echo $query;
        //echo $query;
       // $query .= "Checked_In = '1',";
       // $query .= "VALUE = $CurValue,";
       // $query .= "DATE_POSTED = '$current_date' ";
       // $query .= "WHERE ITEM_ID = '$selected' ";
        $result = mysqli_query($connection, $query);
        if(!$result) {

            die("QUERY FAILED123" . mysqli_error($connection));    
        }else {
            //$message = "Item/Items Updated!";
            //if($count==1)
           
//echo "<script type='text/javascript'>alert('$message');</script>";
            // header('location:Edit-Items.php');
            //echo "Ordered"; 

        }
    
    
}

 //echo "<script>window.location.reload()</script>";

}

function deleteItems()
{
    global $connection;
     $count = 0;
     foreach($_POST['updateId'] as $selected){
       
        
        $count++;
        //echo $CurValue;
        $query = "DELETE from item WHERE ITEM_ID = '$selected' ";
       
        $result = mysqli_query($connection, $query);
        if(!$result) {

            die("QUERY FAILED123" . mysqli_error($connection));    
        }else {
            //$message = "Item/Items Updated!";
            //if($count==1)
            
            //echo "<script type='text/javascript'>alert('$message');</script>";
            
            //echo "Ordered"; 

        }
        
        $query = "DELETE from item_category WHERE ITEM_ID_FK = '$selected' ";
       
        $result = mysqli_query($connection, $query);
        if(!$result) {

            die("QUERY FAILED123" . mysqli_error($connection));    
        }else {
            //$message = "Item/Items Updated!";

            
            
            
            //echo "Ordered"; 

        }
        
        
       $query = "DELETE from item_color WHERE ITEM_ID_FK = '$selected' ";
       
        $result = mysqli_query($connection, $query);
        if(!$result) {

            die("QUERY FAILED123" . mysqli_error($connection));    
        }else {
           // $message = "Item/Items Updated!";
           // if($count==1)
            
            //echo "<script type='text/javascript'>alert('$message');</script>";
            
            //echo "Ordered"; 

        }
        
        $query = "DELETE from donate WHERE ITEM_ID_FK = '$selected' ";
       
        $result = mysqli_query($connection, $query);
        if(!$result) {

            die("QUERY FAILED123" . mysqli_error($connection));    
        }else {
           // $message = "Item/Items Updated!";
            //if($count==1)
            
            //echo "<script type='text/javascript'>alert('$message');</script>";
            
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
        echo"<button type=\"submit\" class=\"btn btn-success margin-left\" align=\"center\" value=\"submit\" name=\"MakeChanges\"  >Submit</button>";
        echo"<button type=\"submit\" class=\"btn btn-success margin-left\" align=\"center\" value=\"Delete\" name=\"DeleteChanges\"  >Delete</button>";
        echo "</form>";
    } else {
        echo "0 results";
    }
    if(isset($_POST['MakeChanges'])&& isset($_POST['valueChange']) && isset($_POST['updateId']) && count($_POST['updateId']) >  0)
    {
        updateItems();
    }

    
    
}



function readRows(){
    global $connection;
   // echo $_SESSION["person_id"] ;
    $query = "SELECT * FROM ITEM WHERE IS_SOLD='0' and Checked_In='1'";
    $result = mysqli_query($connection, $query);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $value=$row["ITEM_ID"];
            
         /*  echo "<tr>
            <td><input type=\"checkbox\" name=\"deleteId[]\" value=\"$value\" /></td>
            <td>".$row["ITEM_ID"]."</td>
            <td>".$row["DESCRIPTION"]."</td>
            <td>".$row["TYPE"]."</td>
            <td>".$row["SIZE"]."</td>
            <td>".$row["BRAND"]."</td>
            <td>".$row["GENDER"]."</td>
            <td>".$row["VALUE"]."</td>
            <td><img src='data:image/jpeg;base64,".base64_encode( $row["PICTURE"] )."'/></td>
            
            </tr>"; */
         


       echo  "<li class=\"list-group-item\">
                    <div class=\"row\">
                        <div class=\"col-xs-2 col-md-1\">
                            
                        </div>
                        <div class=\"col-xs-6 col-md-8\">
                            <a href=\"item.venue.url\" data-ng-click=\"showVenuePhotos(item.venue.id,item.venue.name)\">
                                <h4 class=\"venueName\">".$row["TYPE"]. "</h4>
                            </a>
                        </div>
                        <div class=\"col-xs-4 col-md-3\">
                            &nbsp;
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-2 col-md-1\">
                            <span class=\"badge\">".$row["ITEM_CONDITION"]."</span>
                        </div>
                        <div class=\"col-xs-6 col-md-8\">
                            <p class=\"text-warning\">".$row["BRAND"]."</p>
                            <p>".$row["DESCRIPTION"]. "</p>
                            <hr class=\"seperator\" />
                            <form method=\"post\" style=\"display:inline-block\" action= \"View-Items.php\"><input type=\"submit\" name=\"addToCart\" class=\"btn btn-info\" value=\"Add To Cart\"/><input type=\"hidden\" name=\"itemId\" value=\"$value\"/></form>
                             <a  style=\"padding-left:150px; text-decoration:none\">Size :".$row["SIZE"]."</a>
                            <a  style=\"padding-left:150px; text-decoration:none\">Price : $".$row["VALUE"]."</a>
                        </div>
                        <div class=\"col-xs-4 col-md-3\">
                            
                                <img src='img/".$row["TYPE"].".jpeg' class=\"img-class\" style=\"margin-top:-30px\" />

                        </div>
                    </div>

                </li>"; 
             }

        echo "</table>";
       echo"<form method=\"post\" action= \"View-Items.php\" >  ";
        echo"<input type=\"submit\" style=\"margin-left: 500px;
    margin-top: 10px;\" class=\"btn btn-success\" align=\"center\" value=\"Check Out\" name=\"CheckOut\" >";
        
        echo "</form>";
    } else {
       
    }
    if(isset($_POST['addToCart']) )
    {
        addToCart();
        
    }



}


function readCartRows()
{
 
    global $connection;
    $personId= $_SESSION["person_id"] ;
    $query = "SELECT * FROM cart WHERE PERSON_ID_FK='$personId'";
    $result = mysqli_query($connection, $query);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $itemId=$row["ITEM_ID"];
            $query1 = "SELECT * FROM ITEM WHERE IS_SOLD='0' and Checked_In='1' and ITEM_ID='$itemId'";
            $result1 = mysqli_query($connection, $query1);
            while($row1 = $result1->fetch_assoc()) {
            $value=$row1["ITEM_ID"];
            echo "<tr>
            <td><input type=\"checkbox\" name=\"deleteId[]\" value=\"$value\" /></td>
            <td>".$row1["ITEM_ID"]."</td>
            <td>".$row1["DESCRIPTION"]."</td>
            <td>".$row1["TYPE"]."</td>
            <td>".$row1["SIZE"]."</td>
            <td>".$row1["BRAND"]."</td>
            <td>".$row1["GENDER"]."</td>
            <td>".$row1[""]."</td>
            <td><img src='img/".$row1["TYPE"].".jpeg' class=\"img-class\" /></td>
            
            </tr>";
            }
        }
        echo "</table>";
        echo"<input type=\"submit\" style=\"margin-left:20px\" class=\"btn btn-success\" align=\"center\" value=\"Order\" name=\"Order\" >";
        echo"<input type=\"submit\" class=\"btn btn-success\" style=\"margin-left:20px\"align=\"center\" value=\"Delete\" name=\"Delete\" >";
        echo "</form>";
    } else {
        
    }
    if(isset($_POST['Order'])&&  isset($_POST['deleteId']) && count($_POST['deleteId']) >  0)
    {
        updateOrder();
    }
    if(isset($_POST['Delete'])&&  isset($_POST['deleteId']) && count($_POST['deleteId']) >  0)
    {
        deleteOrderCart();
    }

    
    
}


function deleteOrderCart()
{
    global $connection;
     $id=$_SESSION["person_id"];
    foreach($_POST['deleteId'] as $selected){
        
        $query1 = "DELETE FROM cart ";
        $query1 .= "WHERE PERSON_ID_FK = $id AND ITEM_ID= $selected ";
        $result = mysqli_query($connection, $query1);
    }
    
}


function updateOrder() {

    global $connection;
     $id=$_SESSION["person_id"];

    foreach($_POST['deleteId'] as $selected){
        $current_date = date("Y-m-d H:i:s");
        $query = "UPDATE item SET ";
        $query .= "IS_SOLD = '1',";
        $query .= "DATE_SOLD = '$current_date' ";
        $query .= "WHERE ITEM_ID = '$selected' ";
        $result = mysqli_query($connection, $query);
        if(!$result) {
            

            die("QUERY FAILED123" . mysqli_error($connection));    
        }else {
            
            $query1 = "DELETE FROM cart ";
             $query1 .= "WHERE PERSON_ID_FK = $id and ITEM_ID = '$selected'";
            $result = mysqli_query($connection, $query1);
           

        }
        
        
        $query = "INSERT INTO buy(ITEM_ID_FK,PERSON_ID_FK) ";
        $query .= "VALUES ('$selected', '$id')";
        $result = mysqli_query($connection, $query);
        if(!$result) {

            die("QUERY FAILED" . mysqli_error($connection));    
        }else {

            echo '<script language="javascript">';
            echo 'alert("Items Ordered successfully")';
            echo '</script>';
           // updateOrder();

        }}

}







function addToCart()
{
    echo "checking";
    global $connection;
    $itemId= $_POST['itemId'];
    echo $itemId;
    echo " ";
    $personId=$_SESSION["person_id"];
    echo $personId;
    $query = "INSERT INTO cart(PERSON_ID_FK,ITEM_ID) ";
    $query .= "VALUES ('$personId', '$itemId')";
    echo $query;
    $result = mysqli_query($connection, $query);
    
}

function checkOut()
{
    header('location:view-cart.php');
}




function showAllData() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];

        echo "<option value='$id'>$id</option>";

    }

}

function createRows() {

    if(isset($_POST['submit'])) {
        global $connection;

        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($connection, $username );   
        $password = mysqli_real_escape_string($connection, $password );


        $hashFormat = "$2y$10$"; 
        $salt = "iusesomecrazystrings22";
        $hashF_and_salt = $hashFormat . $salt;
        $password = crypt($password,$hashF_and_salt);   

        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query FAILED' . mysqli_error());

        } else {

            echo "Record Create"; 

        }



    }


}


function UpdateTable() {
    if(isset($_POST['submit'])) {

        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if(!$result) {

            die("QUERY FAILED" . mysqli_error($connection));    
        }else {

            echo "Record Updated"; 

        }

    }


}

//Donate item

function Donateitem() {

     
    global $connection;
    $personId=$_SESSION["person_id"];

    $description = $_POST['description'];
     
    $type = $_POST['type'];
    
    $size = $_POST['Size'];
    
    $brand = $_POST['Brand'];
    
    $gender=$_POST['gender'];
    
    $condition=$_POST['Condition'];
   
    $askingPrice=$_POST['AskingPrice'];
    

    $Category1=$_POST['Category1'];
    $Category2=$_POST['Category2'];
    $Category3=$_POST['Category3'];

    $colour1=$_POST['Colour1'];
    $colour2=$_POST['Colour2'];
   
    //$imagename=$_FILES["fileToUpload"]["name"];

    $current_date = date("Y-m-d H:i:s");

    $imagetmp=addslashes (file_get_contents($_FILES['fileToUpload']['tmp_name']));
    $query = "INSERT INTO item(TYPE,SIZE,BRAND,GENDER,ITEM_CONDITION,ASKING_PRICE,DESCRIPTION,DATE_ACQUIRED,PICTURE) ";
    $query .= "VALUES ('$type', '$size','$brand','$gender','$condition','$askingPrice','$description','$current_date','$imagetmp')";




    $result = mysqli_query($connection, $query);
    if(!$result) {
       // die('Query FAILED' . mysqli_error());

    } else {
        $id = mysqli_insert_id($connection);
        $queryDonate = "INSERT INTO donate(PERSON_ID_FK,ITEM_ID_FK,RECIEPT_ID_FK)";
        $queryDonate .= "VALUES ('$personId','$id',1)";
        $resultDon = mysqli_query($connection,$queryDonate);

       // echo "item has beeen aded to store.U will get  the reciept in 2 bussiness days"; 
            $cat = $Category1;
     
            $clr = $colour1;
            $queryCat = "INSERT INTO item_category(ITEM_ID_FK,CATEGORY) ";
            $queryCat .= "VALUES ('$id', '$cat')";
        
            $queryClr = "INSERT INTO item_color(ITEM_ID_FK,COLOR) ";
            $queryClr .= "VALUES ('$id', '$clr')"; 

            $result = mysqli_query($connection, $queryCat);
            $result1 = mysqli_query($connection, $queryClr);

            if(!$result) {
                die('Query FAILED' . mysqli_error());

            } else {

                 

            }
            
            if(!$result1) {
                die('Query FAILED' . mysqli_error());

            } else {

               

            }
        

        if(isset($Category2)){
            $cat = $Category2;
            $queryCat = "INSERT INTO item_category(ITEM_ID_FK,CATEGORY) ";
            $queryCat .= "VALUES ('$id', '$cat')";

            $result = mysqli_query($connection, $queryCat);
            if(!$result) {
                die('Query FAILED' . mysqli_error());

            } else {

               

            }
        }

        if(isset($Category3)){
            $cat = $Category3;
            

            $result = mysqli_query($connection, $queryCat);
            if(!$result) {
                die('Query FAILED' . mysqli_error());

            } else {

                

            }
        }
        
        if(isset($colour2)){
            $clr = $colour2;
            $result1 = mysqli_query($connection, $queryClr);
            if(!$result1) {
                die('Query FAILED' . mysqli_error());

            } else {
 echo '<script language="javascript">';
            echo 'alert("Items Ordered successfully")';
            echo '</script>';
                

            }
        }

    }
}







//View donations


function viewDonations(){
    global $connection;
    //start_session();
    $personid =$_SESSION["person_id"];
    //echo $personid;

    $query = "SELECT * FROM item where item_id in (select item_id_fk from donate where person_id_fk = '$personid' and Checked_In='1') ";
   // echo $query;
     $result = mysqli_query($connection, $query);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $value  = $row["ITEM_ID"];
        echo "<tr><td>".$row["TYPE"]."</td><td>".$row["SIZE"]."</td><td>".$row["BRAND"]."</td><td>".$row["GENDER"]."</td>
        <td>".$row["ITEM_CONDITION"]."</td><td>".$row["VALUE"]."</td><td>".$row["ASKING_PRICE"]."</td>
        <td>".$row["DESCRIPTION"]."</td><td>
        <a href='check.php?hello=$value'>Print Reciept</a></td></tr>";

        
        //echo"<input type=\"submit\" align=\"center\" align=\"center\" value=\"View\" name=\"View\" >";
        //echo "</form>"

    }
    /* if(isset($_POST['receiptId']) && count($_POST['receiptId']) >  0)
    {
        echo "test";
        session_start(); 
        $_SESSION["item_id"] = $_POST['receiptId'];
        header('location:check.php');
    }*/

} else {
    
}

}




// View Orders

function viewOrders(){
    
        global $connection;
        $id=$_SESSION["person_id"];
        
        $query = "SELECT * FROM buy WHERE PERSON_ID_FK = $id";
        //echo $query;
        $result = mysqli_query($connection, $query);
        $count= mysqli_num_rows($result);
       
        if ( $count > 0) {
             
            while($row = mysqli_fetch_array($result)){
                $id1 =  $row['ITEM_ID_FK'];
                
                $query1 = "SELECT * FROM ITEM WHERE ITEM_ID='$id1'";
                $result1 = mysqli_query($connection, $query1);
                while($row1 = $result1->fetch_assoc()) {
                    $value=$row1['ITEM_ID'];
                    echo "<tr>
                    <td>".$row1['ITEM_ID']."</td>
                    <td>".$row1['DESCRIPTION']."</td>
                    <td>".$row1['TYPE']."</td>
                    <td>".$row1['SIZE']."</td>
                    <td>".$row1['BRAND']."</td>
                    <td>".$row1['GENDER']."</td>
                    <td>".$row1['ASKING_PRICE']."</td>

                    </tr>";
                
            }
            }
        echo "</table>";
        
        echo "</form>";
    } else {
       
    }
}


//Delete Rows

function deleteRows() {

    if(isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if(!$result) {

            die("QUERY FAILED" . mysqli_error($connection));    
        }else {

            echo "Record Deleted"; 

        }

    }

}


?>
















