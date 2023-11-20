<?php
$id = $_GET['id'];

include "include.php";

$data = $dbconn->query("delete from  teacher_detail where id='$id' ");

if ($data){
    header("location:teacher_list.php");
}
else{
    echo "not Deleted";
}

?>