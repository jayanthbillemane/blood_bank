<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="login";


function dbConnection($servername, $username, $password,$db_name)
	{
		$connection = new mysqli($servername, $username, $password,$db_name);
		if (!$connection)
			{
				$function_execution_status=array("Status"=>"Failed","Message"=>"[Error]:".mysqli_error($connection));	
				return $function_execution_status;	
			}
		else 
			{
				$function_execution_status=array("Status"=>"Succuss","Message"=>"DB connection is successfull","Conn"=>$connection);
				// print_r($connection);	
				return $function_execution_status;					
					# code...
			}		
	}
// 	}
$Value=dbConnection($servername, $username, $password,$db_name);
// print_r($Value);


?>
</body>>
</html>