<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    include '_dbconnect.php';
    $loginUname=$_POST['loginUname'];
    $loginPassword=$_POST['loginPassword'];
// echo "yess<br>";
// echo $loginPassword;
// echo $loginUname;
// echo "<br>";
$sql="select * from users where username='$loginUname'";
    $result= mysqli_query($conn,$sql);
    $numrow=mysqli_num_rows($result);
    // echo $sql;
    // echo "<br>";
    // echo var_dump($result);
    // echo "<br>";
    // echo $numrow;
    if ($numrow==1) {
        # code...
    //    echo "<br>yes<br>";
       session_start();
       $row=mysqli_fetch_assoc($result);
    //    echo var_dump($row);
    //    echo "<br>";
    //    echo $loginUname;
       $_SESSION['loggedin']=true;
       $_SESSION['uname']=$loginUname;
       $_SESSION['sno']=$row['user_id'];
       
        

    }
    header("location:/forum/iforum.php");

}









?>