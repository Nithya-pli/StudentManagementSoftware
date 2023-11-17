

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php

include "include.php";

$id =$_POST['id'];
$name =$_POST['name'];
$date =$_POST['dob'];
$class =$_POST['class'];
$mobile =$_POST['number'];
$email =$_POST['email'];
$gender =$_POST['gender'];

$data= "insert into student_detail(id,name,dob,class,mobile,email,gender) value 
('$id ','$name','$date','$class','$mobile','$email','$gender')";
$query= mysqli_query($dbconn,$data)or die(mysqli_error($dbconn));


if($query){
header ("location:list.php");
}
else{
    $response['status']=false;
    $response['message']='inserted failed';
}

?>
</body>
</html>