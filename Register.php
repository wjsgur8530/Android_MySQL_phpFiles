<?php 
    $con = mysqli_connect("localhost", "root", "jj9672@@", "hyuk");
    mysqli_query($con,'SET NAMES utf8');
 
    $UserEmail = $_POST["UserEmail"];
    $UserPwd = $_POST["UserPwd"];
    $UserName = $_POST["UserName"];
 
    $statement = mysqli_prepare($con, "INSERT INTO usertest VALUES (?,?,?)");
    mysqli_stmt_bind_param($statement, "sss", $UserEmail, $UserPwd, $UserName);
    mysqli_stmt_execute($statement);
 
 
    $response = array();
    $response["success"] = true;
 
   
    echo json_encode($response);
?>
