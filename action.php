<?php

//database connection constants

class crud {

	public $id;
	public $name;
	public $location;
	// define('DB_HOST','localhost');
	// define('DB_USER','root');
	// define('DB_PASS','');
	// define('DB_NAME','oop_crud');

	//$connection= mysqli_connect('localhost','root','','oop_crud');
	
	function __construct()
    {
        $this->open_db_connection(); 
        
    }
    public function open_db_connection()
    {
      $this->connection= new mysqli('localhost','root','','oop_crud');
        if($this->connection->connect_errno)
        {
            die("database connection failed".$this->connection->connect_error);

        }

    }

	public function view()
	{

         $result=$this->connection->query ("SELECT* FROM crud") or die($mysqli->error);
         // var_dump($result);
         //loop showing all data
                  while ($row = $result->fetch_assoc()) { ?>
               <tr>
                  <td><?= $row['name']; ?> </td>
                  <td><?= $row['location']; ?> </td>
                  <td>
                  	<a href="update.php?edit=<?=($row['id']); ?>" >Edit  </a> 
                    <a href="delete.php?delete=<?=$row['id']; ?>" >Delete </a> 
                  </td>
              </tr><br>
            <?php   } 
	}

	public function insert($name,$location)
	{

	 
       $sql=$this->connection->query("INSERT INTO crud(name,location) VALUES ('$name','$location')") or die($mysqli->error);
		//var_dump($sql);

		
	}
	

	public function delete($id)
	{

		$sql=$this->connection->query("DELETE FROM crud WHERE  id =$id ") or die($mysqli->error);
	}
	public function edit($id)
	{

		$sql=$this->connection->query("SELECT * FROM crud WHERE  id =$id") or die($mysqli->error);
		if ($sql) {
		
          $row = $sql->fetch_assoc();
		  $this->name = $row['name'];
		  $this->location = $row['location'];


	}

	}
	public function update($id,$name,$location)
	{
	 
       $sql=$this->connection->query("UPDATE crud SET name='$name',location='$location'
		  WHERE id= $id ") or die($mysqli->error);
		//var_dump($sql);

		
	}
}


   $database= new crud();

  //echo $database->connect();
  
  //echo $database->insert();
  //echo $database->delete();
  //echo $database->update();
   
  
//echo $database->edit();

/**
 * 
 */
// class product
// {
	
// 	function find_all_product()
// 	{

//     return self :: find_this_query("SELECT * FROM product");
// 	}

// 	// public function query($sql)
//  //    {
//  //       $result=$connection->query($sql); 
//  //           if(!$result) 
//  //           {
//  //               die("query failed".$this->connection->error);
//  //           }  
//  //           return $result; 
//  //    }


// 	public static function find_this_query($sql)
// 				{

// 				global $connection;
// 				$result_set=$connection->query($sql);
// 				$the_object_array = array();

// 				while($row = mysqli_fetch_array($result_set)) {

// 				    $the_object_array = self::instantation($row);
// 				}

// 				return $the_object_array;
// 				}
// 	public static function instantation($the_record)
// 				{

// 				  $the_object=new self;

// 				  $the_object->id         = $found_user['id'];
// 				  $the_object->name   = $found_user['name'];

// 				  return $the_object;
// 				}
    
// }
//  $find_all_product=product::find_all_product();
// var_dump($find_all_product);
?>