

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php

include "include.php";

$id =$_POST['id'];
$student_id=$_POST['student_id'];
$student_name=$_POST['student_name'];
$teacher_name=$_POST['teacher_name'];
$subject =$_POST['subject'];
$marks =$_POST['marks'];


$data= "insert into marks_detail(id,student_id,student_name,teacher_name,subject,marks) value 
('$id ','$student_id ','$student_name ','$teacher_name ','$subject','$marks')";
$query= mysqli_query($dbconn,$data)or die(mysqli_error($dbconn));


if($query){
header ("location:marks_list.php");
}
else{
    $response['status']=false;
    $response['message']='inserted failed';
}

?>
</body>
</html>