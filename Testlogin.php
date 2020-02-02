<!DOCTYPE html>
<html>
<link href="Styles.css" rel="stylesheet" type="text/css">


<head>

</head>
 
<body>

<?php
session_start();
$name = $_POST['userName'];
$upassword = crypt($_POST["passWord"]);

$servername = "localhost:3306";

$username = "aj";

$password = "Raffik12";

$dbname = "ProjectNigerianPrince";

/*$dbhandle= new mysqli($localhost, $root, $Raffik12);*/
$mysqli = new mysqli($servername, $username, $password, $dbname);
/*$conn = "mysqli_connect('localhost','aj','Raffik12','ProjectNigerianPrince')";*/
if (mysqli_connect_errno())
//20
  {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

  }

$sql =  "SELECT  * FROM `ProjectNigerianPrince`.`userData`
WHERE userName = '$name'";
$result = mysqli_query($mysqli,$sql);

$table_users = " ";
$table_pass = " "; 

if (mysqli_num_rows($result) >0){
	
	while ($row = mysqli_fetch_assoc($result)) {
		$table_users = $row['userName'];
		$table_pass = $row['passWord'];}
		if (($name == $table_users) && ($upassword == $table_pass)) {
			echo "user found";
			echo $upassword;
		}
		}

		$mysqli->close();

 /*if (mysqli_query($mysqli, $sql)) {

               echo "New record created successfully";
				
               
            } else {

               echo "Error: " . $sql . "" . mysqli_error($mysqli);

            }

            $mysqli->close();*/


?>
<!--<div class="h1"><img src="WebNav\NICENICENICENICE.png" /></div>-->


</body> 
