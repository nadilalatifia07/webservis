<html>
<head>
<title>Rest Web Services</title>
</head>
<body>
<?php
if (isset ($_POST['id'])) {
$url = 'https://nadilalatifia07.000webhostapp.com/admin2.php';
//$data = "[{\"id\":\".$_POST['id'].\",\"Username\":\".$_POST['Username'].\",\"Pasword\":\".$_POST['Pasword'].\"}]";//
$data="{\"id\":\"".$_POST['id']."\",\"username\":\"".$_POST['username']."\",\"Pasword\":\"".$_POST['Pasword']."\"}";
echo "datanya ".$data;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
echo "response ".$response;
curl_close($ch);
}
?>
<form method="POST" action="admin1.php">
<table>
<tr>
<td>id</td>
<td><input type="text" name="id" id="id"></td>
</tr>
<tr>
<td>username</td>
<td><input type="text" name="username" id="username"></td>
</tr>
<tr>
<td>Pasword</td>
<td><input type="text" name="Pasword" id="Pasword"></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="Tambah"></td>
<td></td>
</tr>
</table>
</form>
</body>
</html>