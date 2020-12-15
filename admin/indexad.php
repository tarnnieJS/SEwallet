<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SE Payment</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./SEwallet/css/bulma.css">
  <link rel="stylesheet" href="styleslogad.css">


</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <span  style="font-size:30px;cursor:pointer;color:white" onclick="openNav()">&#9776;Menu</span>
  
</nav>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="adddata.php">เพิ่มข้อมูล</a>
  <a href="manageUser.php">จัดการข้อมูล</a>
  <a href="addstatus.php">เพิ่มUser</a>
  <a href="#">ตรวจสอบ</a>
  
  <br>
  <a href="../logout.php" class="login-btn">
         <center> 
         <button class="login-btn" style="font-size:24px;color:red"><i class="fa fa-user-circle">Logout</i></button>
         </center>
         
  </a>
</div>
<!-- content -->
<div id="main">
  <h2>Sidenav Push Example</h2>
  <p>INDEX_ADMMIN</p>
  
</div>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 
