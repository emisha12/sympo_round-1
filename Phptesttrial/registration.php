<?php
require_once 'config.php';
$uname=trim($_POST['username']);
$mail=trim($_POST['email']);
$pword=trim($_POST['psw']);
$repword=trim($_POST['psw-repeat']);

$sql="insert into user(USERNAME,PASSWORD,EMAIL) values(?,?,?)";
//$result = $conn->query($sql);
if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $uname, $pword, $mail);
             if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.html");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
