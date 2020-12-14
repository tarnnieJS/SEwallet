<?php 
session_start();
        if(isset($_POST['Username'])){
				//connection
                  include("../connect/connection.php");
				//รับค่า user & password
                  $Username = $_POST['Username'];
                  $Password = $_POST['Password'];
				//query 
                  $sql="SELECT * FROM user Where Username='".$Username."' and Password='".$Password."' ";

                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);
                      $_SESSION["user_id"] = $row["ID"];
                      $_SESSION["Username"] = $row["Username"];
                      $_SESSION["Userlevel"] = $row["Userlevel"];
                      $_SESSION["Fullname"] = $row["Fullname"];
                      

                      if($_SESSION["Userlevel"]=="User"){   //สิทธิ์ user ดูได้อย่างเดียว

                        Header("Location: ../user/paymentStatus.php");

                      }

                      if ($_SESSION["Userlevel"]=="Admin"){   //สิทธิ์ admin ในการ manage
                      
                      Header("Location: ../admin/manageUser.php");
                      
                      
                      }
                      if ($_SESSION["Userlevel"]=="Admin"){  
                      
                        Header("Location: ../admin/adddata.php"); //สิทธิ์ admin ในการ เพิ่มข้อมูล
                        
                        
                        }

                        if ($_SESSION["Userlevel"]=="Admin"){  
                      
                          Header("Location: ../admin/indexad.php");
                          
                          
                          }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: indexad.php"); //user & password incorrect back to login again

        }
      
?>