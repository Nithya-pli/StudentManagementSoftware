<?php
include 'include.php';

$id =$_POST['id'];
$name =$_POST['name'];
$date =$_POST['dob'];
$class =$_POST['class'];
$mobile =$_POST['number'];
$email =$_POST['email'];
$gender =$_POST['gender'];

$a = $dbconn->query ("update student_detail set name='$name',dob='$date',class='$class',mobile='$mobile'
,email='$email',gender='$gender' ");

if ($a){
    header ('location:list.php');
}else{
    echo "not updated";
}

?>