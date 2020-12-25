<?php
error_reporting(0);
?>
<meta charset="utf-8">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wallet";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection

$UsrID = $_POST["user_id"];

$check = "
	SELECT  user_id 
	FROM spuser  
	WHERE user_id = '$UsrID' 
	";
$result1 = mysqli_query($conn, $check) or die(mysqli_connect_error());
$num = mysqli_num_rows($result1);

if ($num > 0) {
	echo "<script>";
	echo "alert(' ข้อมูลซ้ำ  !');";
	echo "window.history.back();";
	echo "</script>";
} else {

	$sql = "INSERT INTO spuser (id, user_id,firstname ,lastname ,class  )
VALUES (NULL, '$UsrID','$_POST[firstname]', '$_POST[lastname]', '$_POST[class]')";

	$result = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_connect_error());
}
mysqli_close($conn);
if ($result) {
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'http://localhost:88/wallet/admin/manageUser.php'; ";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "window.location = 'http://localhost:88/wallet/admin/manageUser.php'; ";
	echo "</script>";
}
?>