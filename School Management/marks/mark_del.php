<?php
$id = $_GET['id'];

include "include.php";

$data = $dbconn->query("delete from  marks_detail where id='$id' ");

if ($data){
    header("location:marks_list.php");
}
else{
    echo "not Deleted";
}

?>