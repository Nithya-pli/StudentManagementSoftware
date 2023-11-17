<?php
include "include.php";

$x=$dbconn->select_db("student");

if ($x){
    echo '<h1> <a href="index.php">ADD Details </a> </h1>';
}

$a = $dbconn->query("select * from  student_detail");
echo '<table border=1 width="100%" height="30%">
<tr>
<th>Name</th>
<th>DOB</th>
<th>Class</th>
<th>Mobile</th>
<th>Email</th>
<th>Gender</th>
<th>Action </th>

</tr>';

while($b=mysqli_fetch_array($a)){
    $id = $b ['id'];
    echo "<tr>
    <td> ".$b ['name']."</td>
    <td> ".$b ['dob']."</td>
    <td> ".$b ['class']."</td>
    <td> ".$b ['mobile']."</td>
    <td> ".$b ['email']."</td>
    <td> ".$b ['gender']."</td>
    <td> <a href='del.php ? id=$id'>Delete /</a>
    <a href='edit.php ? id=$id'>Edit </a> </td>
    </tr>";
}
echo "</table>";

?>


