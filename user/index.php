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
$sql = "SELECT * FROM student  "; 
$result = $mysqli->query($sql); 
$mysqli->close();  
?> 
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  <link rel="stylesheet" href="stylesad.css">
</head>
<style>
  body {
    font-family: "Lato", sans-serif;
  }

  .sidenav {
    height: 100%;
    width: 160px;
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
    font-size: 25px;
    color: #818181;
    display: block;
  }

  .sidenav a:hover {
    color: #f1f1f1;
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
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#clients">Clients</a>
    <a href="#contact">Contact</a>
  </div>

  <!-- navbar -->
  <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item">
        <p class="title">SE wallet</p>
      
      </a>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="button is-danger">
          <a class="button is-danger" href="../logout.php"  class="button is-light">
            Log out
          </a>
        </div>
      </div>
    </div>
    </div>
  </nav>
  <!-- content -->


  </dialog>

  <section class="section">

    <div class="container">

      <h1 class="title">
        สร้างรายการเก็บเงิน
      </h1>
      <button class=" button is-link" type="button" data-toggle="modal" data-target="#assignModal">เพิ่มข้อมูล</button>
      <div class="columns">
        <div class="column ">
        <section class="section">
      <div class="container">
          <div class="card">
         
              <header class="card-header">
                  <p class="card-header-title">
                    A table in a card
                  </p>
                </header>
                <div class="card-content">
                    <table class="table is-fullwidth">
                        <thead>
                          <tr>
                            <th><abbr>#</abbr></th>
                            <th>Student ID</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Class</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                      <tbody>
                      <?php   
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
                        <tr>
                          <td><?php echo $rows['id'];?></td>
                          <td><?php echo $rows['student_id'];?></td>
                          <td><?php echo $rows['firstname'];?></td>
                          <td><?php echo $rows['lastname'];?></td>
                          <td><?php echo $rows['class'];?></td>
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
              <form action="saveStudent.php" method="POST">
                <div class="field">
                  <label class="label">Student ID</label>
                  <div class="control">
                    <input required name="student_id" class="input" type="text" placeholder="Student ID"  class="input" type="text" name="student_id" maxlength="11" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  />
                  </div>
                </div>

                <div class="field">
                  <label class="label">First name</label>
                  <div class="control has-icons-left has-icons-right">
                    <input required name="firstname" class="input is-success" type="text" placeholder="First name" >
                    <span class="icon is-small is-left">
                      <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fas fa-check"></i>
                    </span>
                  </div>
                </div>

                <div class="field">
                  <label class="label">Last name</label>
                  <div class="control has-icons-left has-icons-right">
                    <input  required name="lastname" class="input  is-success" type="text" placeholder="Last name" >
                    <span class="icon is-small is-left">
                      <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fas fa-check"></i>
                    </span>
                  </div>
                </div>

                <div class="field">
                  <label class="label">Class</label>
                  <div class="control">
                    <div class="select">
                      <select name="class">
                        <option>Class 1</option>
                        <option>Class 2</option>
                        <option>Class 3</option>
                        <option>Class 4</option>
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
