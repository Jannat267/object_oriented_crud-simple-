<?php

include('action.php');
$name="";
$location="";

if (isset($_POST["submit"])) {
	
	 $name=$_POST['name'];
	 $location=$_POST['location'];
	 $database->insert($name,$location);	 
	 
}
if (isset($_GET["edit"])) {
	$id = $_GET['edit'];
	$database->edit($id);
}
$database->view();
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form method="POST">
 	<br>
 	<label> Name </label><input type="text" name="name">
 	<label> Location </label><input type="text" name="location">

     <button type="submit" value="ok" name="submit">Submit</button>
              
 	
 </form>
</body>
</html>