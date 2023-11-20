<?php
include 'include.php';

$id =$_POST['id'];
$teacherName =$_POST['teacherName'];
$subTeacher =$_POST['subTeacher'];
$classTeacher =$_POST['classTeacher'];
$mobile =$_POST['mobile'];
$email =$_POST['email'];
$gender =$_POST['gender'];

$a = $dbconn->query ("update teacher_detail set teacherName='$teacherName',subjectTeacher='$subTeacher',classTeacher='$classTeacher',mobile='$mobile'
,email='$email',gender='$gender' ");

if ($a){
    header ('location:teacher_list.php');
}else{
    echo "not updated";
}

?>