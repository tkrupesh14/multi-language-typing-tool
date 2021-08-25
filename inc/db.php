<?php
$dbname = 'techtyping';
$uname = 'root';
$pass = '';
$dbhost = 'localhost';

$con = mysqli_connect($dbhost, $uname, $pass, $dbname);
if($con){
    // echo "connected successfuly";
}else{
    echo "db error" or die($con);
}

?>