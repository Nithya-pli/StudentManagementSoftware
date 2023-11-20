

<?php
$dbconn = mysqli_connect('localhost','root','','student');
if($dbconn){
   // echo "connected sucessfully";
}else{
   die("connection failed:".mysqli_connect_error());
}
?>

