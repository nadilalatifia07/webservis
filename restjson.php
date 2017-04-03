<?php
// Check for the path elements
// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

$path = $_SERVER[PATH_INFO];    
if ($path != null) {
$path_params = spliti ("/", $path);
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

if ($path_params[1] == null) {

		$con=mysqli_connect("localhost","root","","akademik");
// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql="SELECT nim,nama,prodi FROM mahasiswa";
	if ($result=mysqli_query($con,$sql))
	{
  // Fetch one and one row
  	 $arr = Array();
	while ($row=mysqli_fetch_assoc($result))
		{
		 $arr[] = $row;
		}
		 echo json_encode($arr);
  // Free result set
	mysqli_free_result($result);
	}
	
	mysqli_close($con);

}
else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
if ($path_params[1] != null) {
		$con=mysqli_connect("localhost","root","","akademik");
// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql="SELECT nim,nama,prodi FROM mahasiswa where nim = '$path_params[1]'";
	
	if ($result=mysqli_query($con,$sql))
	{
  // Fetch one and one row
  	 $arr = Array();
	while ($row=mysqli_fetch_assoc($result))
		{
		 $arr[] = $row;
		}
		 echo json_encode($arr);
	mysqli_free_result($result);
	}
	
	mysqli_close($con);

	
}
}
	
}
?> 