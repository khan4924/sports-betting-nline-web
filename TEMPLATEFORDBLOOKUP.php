<!DOCTYPE html>
<html>
<link href="Styles.css" rel="stylesheet" type="text/css">


<head>

</head>
 
<body>

<!--//TEMPLATE TO GRAB DATA FROM DB--!>

<?php
session_start();
$name = $_POST["userName"];
$upassword = $_POST["passWord"];

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

$sql =  "SELECT  * FROM `ProjectNigerianPrince`.`gameBase`
WHERE GameId=2";

$result = mysqli_query($mysqli,$sql);


$GameID = " ";
$GameType = " ";
$DateOfGame = " ";
$Team1 = " ";
$Team1Icon = " ";
$Team2 = " ";
$Team2Icon = " ";
$StatCalc = " ";
$StreamLink = " ";

if (mysqli_num_rows($result) >0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$GameID = $row["GameID"];
		$GameType = $row["GameType"];
		$DateOfGame = $row["DateOfGame"];
		$Team1 = $row["Team1"];
		$Team1Icon = $row["Team1Icon"];
		$Team2 = $row["Team2"];
		$Team2Icon = $row["Team2Icon"];
		$StatCalc = $row["StatCalc"];
		$StreamLink = $row["StreamLink"];
	}
}

echo "$GameID $GameType $Team1 $Team2";
?>
<?php
$sql =  "SELECT  * FROM `ProjectNigerianPrince`.`gameBase`
WHERE GameId=3";

$result = mysqli_query($mysqli,$sql);


$GameID = " ";
$GameType = " ";
$DateOfGame = " ";
$Team1 = " ";
$Team1Icon = " ";
$Team2 = " ";
$Team2Icon = " ";
$StatCalc = " ";
$StreamLink = " ";

if (mysqli_num_rows($result) >0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$GameID = $row["GameID"];
		$GameType = $row["GameType"];
		$DateOfGame = $row["DateOfGame"];
		$Team1 = $row["Team1"];
		$Team1Icon = $row["Team1Icon"];
		$Team2 = $row["Team2"];
		$Team2Icon = $row["Team2Icon"];
		$StatCalc = $row["StatCalc"];
		$StreamLink = $row["StreamLink"];
	}
}

echo "$GameID $GameType $Team1 $Team2";
?>
</body>

