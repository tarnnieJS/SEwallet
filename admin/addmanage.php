<?php session_start(); ?>
<?php 
  
// Username is root 
$user = 'root'; 
$password = '';  
  
// Database name is gfg 
$database = 'wallet';  
  
// Server is localhost with 
// port number 3308 
$servername='localhost'; 
$mysqli = new mysqli($servername, $user,  
                $password, $database); 


// Checking for connections 
if ($mysqli->connect_error) { 
    die('Connect Error (' .  
    $mysqli->connect_errno . ') '.  
    $mysqli->connect_error); 
} 
  
// SQL query to select data from database 
$mysqli-> set_charset("utf8");
$sql = "SELECT * FROM manage "; 
$result = $mysqli->query($sql); 
$mysqli->close();  
?> 
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv=Content-Type content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SE Payment</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  <link rel="stylesheet" href="stylesad.css">
</head>
<style>
  body {
    font-family: "Lato", sans-serif;
  }

  .sidenav {
    height: 100%;
    width: 180px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 100px;
  }

  .sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
  }

  .sidenav a:hover {
    color: blue;
  }

  .main {
    margin-left: 160px;
    /* Same as the width of the sidenav */
    font-size: 28px;
    /* Increased text to enable scrolling */
    padding: 0px 10px;
  }

  @media screen and (max-height: 450px) {
    .sidenav {
      padding-top: 15px;
    }

    .sidenav a {
      font-size: 18px;
    }
  }
</style>

<body>
  <div class="sidenav">
    <a href="indexad.php">หน้าแรก</a>
    <a href="adddata.php">เพิ่มข้อมูลนักศึกษา</a>
    <a href="manageUser.php">รายชื่อผู้ดูแลระบบ</a>
    

    <br>
    <a href="../logout.php" class="login-btn">
      <center>
        <button class="login-btn" style="font-size:24px;color:red"><i class="fa fa-user-circle">Logout</i></button>
      </center>

    </a>
  </div>

  <!-- navbar -->
  <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item">
        <p class="title">SE  administrator</p>
      
      </a>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <!-- <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a  class="button is-light" >
           For manager
          </a>
        </div>
      </div>
    </div> -->
    </div>
  </nav>
  <!-- content -->


  </dialog>

  <section class="section">

    <div class="container">

      <h1 class="title">
        ข้อมูลผู้ดูแลระบบ
      </h1>
      <button class=" button is-link" type="button" data-toggle="modal" data-target="#assignModal">เพิ่มข้อมูล</button>
      <div class="columns">
        <div class="column ">
        <section class="section">
      <div class="container">
          <div class="card">
         
              <header class="card-header">
                  <p class="card-header-title">
                    รายชื่อข้อมูลของผู้ดูแลระบบ
                  </p>
                </header>
                <div class="card-content">
                    <table class="table is-fullwidth">
                        <thead>
                          <tr>
                            <th><abbr></abbr></th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Fullname</th>
                            <th>Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                      <tbody>
                      <?php   
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
                        <tr>
                          <td><?php echo $rows['ID'];?></td>
                          <td><?php echo $rows['Username'];?></td>
                          <td><?php echo $rows['Password'];?></td>
                          <td><?php echo $rows['Fullname'];?></td>
                          <td><?php echo $rows['Userlevel'];?></td>
                          <td>
                              <a class="button is-small is-primary">View</a>
                              <a class="button is-small is-danger">Delete</a>
                          </td>
                        </tr>
                        <?php 
                } 
             ?> 
                      </tbody>
                </div>
          </div>
      </div>
  </section>
        </div>
      
      </div>
    </div>
  </section>
  <div class="modal fade" id="assignModal" tabindex="-1" aria-labelledby="exampleModalLabel" role="dialog" data-backdrop="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class=" has-aside-left has-fixed-size has-max-width">

          <div class="card">
            <div class="content">
              <form action="savemanage.php" method="POST">
                <div class="field">
                  <label class="label">Username</label>
                  <div class="control">
                    <input required name="Username" class="input" type="text" placeholder="Username"  class="input" type="text" name="Username" maxlength="11" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  />
                  </div>
                </div>

                <div class="field">
                  <label class="label">Password</label>
                  <div class="control has-icons-left has-icons-right">
                    <input required name="Password" class="input is-success" type="text" placeholder="Password" >
                    <span class="icon is-small is-left">
                      <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fas fa-check"></i>
                    </span>
                  </div>
                </div>

                <div class="field">
                  <label class="label">Fullname</label>
                  <div class="control has-icons-left has-icons-right">
                    <input  required name="Fullname" class="input  is-success" type="text" placeholder="Fullname" >
                    <span class="icon is-small is-left">
                      <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fas fa-check"></i>
                    </span>
                  </div>
                </div>

                <div class="field">
                  <label class="label">Userlevel</label>
                  <div class="control">
                    <div class="select">
                      <select name="Userlevel">
                        <option>Admin</option>
                        <option>Userชั้นปีที่1</option>
                        <option>Userชั้นปีที่2</option>
                        <option>Userชั้นปีที่3</option>
                        <option>Userชั้นปีที่4</option>
                      </select>
                    </div>
                  </div>
                </div>
                <br>
                <div class="field is-grouped">
                  <div class="control">
                    <button type="submit" name="save" class="button is-success">Submit</button>
                  </div>
                  <div class="control">
                    <button type="button" data-dismiss="modal" class="button is-link is-light">Cancel</button>
                  </div>
                </div>
            </div>
            </form><br><br>
          </div>
        </div>

      </div>
    </div>
  </div>


  </body>

</html>


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