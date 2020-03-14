<?php
 
$connect=mysqli_connect("localhost", "id12804449_dila", "dila12","id12804449_prakter");
 
$query = "SELECT * from admin ";
$result = mysqli_query($connect,$query) or die(mysqli_error());
 
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(

    "id" => $row["id"],
    "username" => $row["username"], 
    "Pasword" => $row["Pasword"]);
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"MENAMPILKAN DATA ADMIN\":" . $data . "}";
?>
