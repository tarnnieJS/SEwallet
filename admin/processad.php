<?php include 'connectDB.php';

     //    print_r($_POST);
     $studentid = $_POST['std_id'];
     $submajor = $_POST['codeyears'];
     $fullname = $_POST['flname'];
     $years = $_POST['clyears'];
     $activitys = $_POST['activitys'];
     $payment = $_POST['pmact'];
     $subject = $_POST['subject'];

    mysqli_query($dbconnect,"INSERT INTO mprofile (std_id,codeyears,flname,years,activitys,pmact,subject)
                             VALUES('$studentid','$submajor',' $fullname','$years','$activitys','$payment','$subject')");

?>