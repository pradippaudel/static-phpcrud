<?php 

const DB_HOST="localhost";
const DB_USER="root";
const DB_PASSWORD="";
const DB_NAME="test_php";

$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD)
 or die('Error Estalblishing Database connection');

mysqli_select_db($conn,DB_NAME );



/*populate role table*/
$sql="INSERT INTO roles SET title='student', status=1 ";
$query=mysqli_query($conn,$sql);
if($query)
{
	echo "Data is inserted successfully.Data is inserted at id:".mysqli_insert_id($conn);
}

else
{
	echo "There was problem while inserting into database";
	echo mysqli_error($conn);
}


//  echo "<pre>"; 
// print_r($conn);
// echo "</pre>";
echo "</br>";

/*update*/
$sql="UPDATE roles SET title='pradipg' WHERE id=4";
$query=mysqli_query($conn,$sql);
if($query)
{
	echo "Data in Row id 4 is successfully updated";
}
else{
	echo mysqli_error($conn);
    }


// delete

    $sql="DELETE FROM roles WHERE id =4";
    $query=mysqli_query($conn,$sql);
    if($query)
    {
    	echo "Row 4 is deleted successfully";
    }
    else
    {
    	echo mysqli_error($conn);
    }

     echo "</br>";
     echo "</br>";
     $sql="SELECT * FROM roles";
     $query=mysqli_query($conn,$sql);
      if($query)
      {
      	if(mysqli_num_rows($query)>0)
      	{
      		$data=array();
      		while($row=mysqli_fetch_assoc($query))
      		{
      			$data[]=$row;
      		}
      		echo "<pre>";
      		print_r($data);
      		echo "</pre>";
      	}
      }
      else
      {
      	echo mysqli_error($conn);
      }



  ?>