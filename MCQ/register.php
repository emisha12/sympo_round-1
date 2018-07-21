<?php
require_once 'config.php';
$uname=trim($_POST['usrnm']);
$ph=trim($_POST['phone']);
$college=trim($_POST['clg']);
$year=trim($_POST['yr']);
$dept=trim($_POST['dept']);

$sql="insert into candidates(NAME,PHONE_NO,COLLEGE,YEAR,DEPARTMENT) values(?,?,?,?,?)";
//$result = $conn->query($sql);
if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $uname, $ph, $college,$year,$dept);
             if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: instructions.html");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
 ?>


