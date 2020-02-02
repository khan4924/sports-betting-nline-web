<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">


<link rel="stylesheet" type="text/css" href="style.css"/>

</head>

<body class="body">
<div id="inbody">

<div class="main_header">
    <div class="site_name">

    </div>
    <div class="add">
		<?php if(isset($_SESSION['id'])): ?>
  		<a class="link" href="logout.php" style="text-decoration:none">logout</a>
		<?php else: ?>
		<a class="link" href="login.php" style="text-decoration:none">login</a>
		<?php endif; ?>


    </div>
</div>



        <div class="main_body_part"> 