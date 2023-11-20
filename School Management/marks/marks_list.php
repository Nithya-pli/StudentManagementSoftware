<?php
include "include.php";

$x=$dbconn->select_db("student");

if ($x){
    echo '<h1> <a href="marks.php">ADD Details </a> </h1>';
}

$a = $dbconn->query("select * from  marks_detail");
echo '<table border=1 width="100%" height="30%">
<tr>
<th>id</th>
<th>student_id</th>
<th>student_name</th>
<th>teacher_name</th>
<th>subject</th>
<th>marks</th>
<th>Action </th>

</tr>';

while($b=mysqli_fetch_array($a)){
    $id = $b ['id'];
    echo "<tr>
    <td> ".$b ['id']."</td>
    <td> ".$b ['student_id']."</td>
    <td> ".$b ['student_name']."</td>
    <td> ".$b ['teacher_name']."</td>
    <td> ".$b ['subject']."</td>
    <td> ".$b ['marks']."</td>
    <td> <a href='mark_del.php ? id=$id'>Delete /</a>
    <a href='mark_edit.php ? id=$id'>Edit </a> </td>
    </tr>";
}
echo "</table>";

?>


