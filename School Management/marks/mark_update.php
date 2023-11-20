<?php
include 'include.php';

$id = $_POST['id'];
$student_id=$_POST['student_id'];
$student_name=$_POST['student_name'];
$teacher_name=$_POST['teacher_name'];
$subject =$_POST['subject'];
$marks =$_POST['marks'];

$a = $dbconn->query ("update marks_detail set student_id='$student_id',student_name='$student_name',
teacher_name='$teacher_name',subject='$subject'
,marks='$marks' ");

if ($a){
    header ('location:marks_list.php');
}else{
    echo "not updated";
}

?>