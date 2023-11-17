<?php
$id = $_GET['id'];

include "include.php";

$data = $dbconn->query("delete from  student_detail where id='$id' ");

if ($data){
    header("location:list.php");
}
else{
    echo "not Deleted";
}

?>