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

$Report = $_POST["student_id"];

$check = "
	SELECT  student_id 
	FROM payment  
	WHERE student_id = '$Report' 
	";
$result1 = mysqli_query($conn, $check) or die(mysqli_connect_error());
$num = mysqli_num_rows($result1);

if ($num < 0) {
	echo "<script>";
	echo "alert(' ข้อมูลซ้ำ  !');";
	echo "window.history.back();";
	echo "</script>";
} else {

	$sql = "INSERT INTO report (id, student_id,firstname ,lastname ,class ,status ,activities ,amount  )
VALUES (NULL, '$Report','$_POST[firstname]', '$_POST[lastname]', '$_POST[class]', '$_POST[status]', '$_POST[activities]', '$_POST[amount]')";

	$result = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_connect_error());
}
mysqli_close($conn);
if ($result) {
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'http://localhost:88/wallet/user/report.php'; ";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "window.location = 'http://localhost:88/wallet/user/report.php'; ";
	echo "</script>";
}

?>