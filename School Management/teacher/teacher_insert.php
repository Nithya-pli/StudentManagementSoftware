

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php

include "include.php";

$id =$_POST['id'];
$teacherName =$_POST['teacherName'];
$subject =$_POST['subTeacher'];
$class =$_POST['classTeacher'];
$mobile =$_POST['mobile'];
$email =$_POST['email'];
$gender =$_POST['gender'];

$data= "insert into teacher_detail(id,teacherName,subjectTeacher,classTeacher,mobile,email,gender) value 
('$id ','$teacherName','$subject','$class','$mobile','$email','$gender')";
$query= mysqli_query($dbconn,$data)or die(mysqli_error($dbconn));


if($query){
header ("location:teacher_list.php");
}
else{
    $response['status']=false;
    $response['message']='inserted failed';
}

?>
</body>
</html>