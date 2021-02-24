<?php
		include "action.php";
		$id= $_GET["delete"];
		$database->delete($id);
		header("location:index.php");
	
		
	
       //$sql=$this->connection->query("DELETE FROM crud WHERE  id =6") or die($mysqli->error);
		//var_dump($sql);

		


?>