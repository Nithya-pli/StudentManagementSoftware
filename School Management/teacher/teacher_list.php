<?php
include "include.php";

$x=$dbconn->select_db("student");

if ($x){
    echo '<h1> <a href="teacher.php">ADD Details </a> </h1>';
}

$a = $dbconn->query("select * from  teacher_detail");
echo '<table border=1 width="100%" height="30%">
<tr>
<th>Teacher_Name</th>
<th>Subject_Teacher</th>
<th>Class_Teacher</th>
<th>Mobile</th>
<th>Email</th>
<th>Gender</th>
<th>Action </th>

</tr>';

while($b=mysqli_fetch_array($a)){
    $id = $b ['id'];
    echo "<tr>
    <td> ".$b ['teacherName']."</td>
    <td> ".$b ['subjectTeacher']."</td>
    <td> ".$b ['classTeacher']."</td>
    <td> ".$b ['mobile']."</td>
    <td> ".$b ['email']."</td>
    <td> ".$b ['gender']."</td>
    <td> <a href='teacher_del.php ? id=$id'>Delete /</a>
    <a href='teacher_edit.php ? id=$id'>Edit </a> </td>
    </tr>";
}
echo "</table>";

?>


