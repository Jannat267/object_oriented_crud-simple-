
<?php 
     
		include "action.php";
		$id= $_GET["edit"];
		$database->edit($id);
		$name=$database->name;
		$location=$database->location;
		
		if (isset($_POST["update"])) {
		    $id=$_POST["id"];
			$name=$_POST['name'];
	 		$location=$_POST['location'];
	 		$database->update($id,$name,$location);
	 		header("location:crud.php");
		}

	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form method="POST">
 	<input type="hidden" name="id" value="<?php echo $id ?>">
 	<label> Name </label><input type="text" name="name" value="<?php echo $name  ?>">
 	<label> Location </label><input type="text" name="location" value="<?php echo $location ?>">

     <button type="submit" value="ok" name="update">Update</button>
              
 	
 </form>
</body>
</html>