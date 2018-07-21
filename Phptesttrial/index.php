<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'config.php';
        $name = $_POST['usrnm'];
        $pword=$_POST['psw'];
        $count=0;
  
        $sql="select * from user";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
    // output data of each row
            while($row = $result->fetch_assoc()) {
                if($row["USERNAME"]==$name && $row["PASSWORD"]==$pword){
                   header("location:dashboard.html");
                }else {
                    $count++;
                }
            }
            if($count!=0){
            echo " Incorrect username or password. Please try again";
        }
        }
        
$conn->close();
// put your code here
        ?>
    </body>
</html>
