<?php
$showError="false";
$showAlert=false;
if ($_SERVER['REQUEST_METHOD']=="POST") {
    # code...
    include '_dbconnect.php';
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $cpassword=$_POST['cpassword'];
    $existSql="SELECT * FROM `users` WHERE username='$uname'";
    $result=mysqli_query($conn,$existSql);
    $num=mysqli_num_rows($result);
    
    if ($num>0) {
        # code...
        $showError="Username taken";
        header("location:/forum/iforum.php?signupsuccess=false&Error=$showError");
        
         exit();
    }
    else {
        if ($password==$cpassword) {
            # code...
            $hash=password_hash($password,PASSWORD_DEFAULT);
            $sql="INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$uname', '$email', '$hash')";
            $result=mysqli_query($conn,$sql);
            if ($result) {
                # code...
                $showAlert=true;
               header("location:/forum/iforum.php?signupsuccess=true");
            }
            
        }
        else {
            # code...
            $showError="Passwords do not match";
           header("location:/forum/iforum.php?signupsuccess=false&Error=$showError");
            
        }
    }



}




?>