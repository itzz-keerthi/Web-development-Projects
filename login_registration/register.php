<?php

$Username1 = $_POST['Username1'];
$mailid = $_POST['mailid'];
$user_pwd1 = $_POST['user_pwd1'];
$user_pwd2 = $_POST['user_pwd2'];

if(!empty($Username1) || !empty($mailid) || !empty($user_pwd1) || !empty($user_pwd2))
{
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="myprojects";

    //creating connection
    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die("Connect Error (".
        mysqli_connect_errno().')'
        .mysqli_connect_error());
    }
    else{
        $SELECT = "SELECT mailid From register
        where mailid= ? Limit 1";

        $INSERT = "INSERT into register(
            Username1,mailid,user_pwd1,user_pwd2)
            values(?,?,?,?)";

        //Prepare statement
        $stmt= $conn->prepare($SELECT);
        $stmt->bind_param("s",$mailid);
        $stmt->execute();
        $stmt->bind_result($mailid);
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        //checkig username
        if($rnum==0){
            $stmt->close();
            $stmt= $conn->prepare($INSERT);
            $stmt->bind_param("ssss",$Username1,$mailid,$user_pwd1,$user_pwd2);
            $stmt->execute();
            /*echo '<script type ="text/JavaScript">';  
            echo 'alert("New record inserted successfully")';  
            echo '</script>';*/
            echo "Registered successfully!";
        }
        else{
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Mail Id already registeres")';  
            echo '</script>';
        }
        $stmt->close();
        $conn->close();

    }
}
else{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("All fields are mandatory")';  
    echo '</script>';
    die();
}
?>