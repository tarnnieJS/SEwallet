<?php session_start(); ?>
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
  <link rel="stylesheet" href="stylesad.css">
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <span style="font-size:30px;cursor:pointer;color:white" onclick="openNav()">&#9776;Menu</span>
  </nav>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h2>เพิ่มข้อมูล</h2>
    <a href="indexad.php">หน้าแรก</a>
    <a href="manageUser.php">ManageUser</a>
    <a href="addstatus.php">ManageStatus</a>
    <a href="#">ตรวจสอบ</a>
    <br><br>
    <a href="../logout.php" class="login-btn">
      <center>
        <button class="login-btn" style="font-size:24px;color:red"><i class="fa fa-user-circle">Logout</i></button>
      </center>
    </a>
  </div>
  <!-- content -->
  <div id="main">
    <div class="container">
      <form action="/action_page.php">
        <div class="row">
          <div class="col-25">
            <label for="std_id">รหัสนักศึกษา</label>
          </div>
          <div class="col-25">
            <input type="text" id="std_id" name="std_id" placeholder="Your ID..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="codeyears">Submajor</label>
          </div>
          <div class="col-25">
            <select id="codeyears" name="codeyears">
              <option value="59">59</option>
              <option value="58">58</option>
              <option value="57">57</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="flname">ชื่อ-นามสกุล</label>
          </div>
          <div class="col-25">
            <input type="text" id="flname" name="flname" placeholder="Your name..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="years">ชั้นปี</label>
          </div>
          <div class="col-25">
            <select id="years" name="years">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="activitys">กิจกรรม</label>
          </div>
          <div class="col-25">
            <select id="activitys" name="activitys">
              <option value="1">กิจกรรมรับน้อง</option>
              <option value="2">กิจกรรมกีฬาสีภายในสาขา</option>
              <option value="3">กิจกรรมวันไหว้ครู</option>
              <option value="4">ค่าบำรุงห้องเรียน</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="pmact">ค่ากิจกรรม</label>
          </div>
          <div class="col-25">
            <input type="text" id="pmact" name="pmact" placeholder="ระบุจำนวน..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">Descriptions</label>
          </div>
          <div class="col-10">
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
          </div>
        </div>
        <div class="row">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
      }
    </script>
</body>

</html>