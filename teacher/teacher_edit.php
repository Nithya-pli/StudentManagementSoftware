<?php
include 'include.php';
$id = $_GET['id'];

$data = $dbconn -> query ("select*from  teacher_detail where id= $id ");
while ($query = mysqli_fetch_array($data)){
    $teacherName = $query ['teacherName']; 
    $subTeacher = $query ['subjectTeacher']; 
    $classTeacher = $query ['classTeacher']; 
    $mobile = $query ['mobile']; 
    $email = $query ['email'];
    $gender = $query ['gender'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management Software</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
<div class="container">
        <div class="head">
            <h3>Student_Details</h3>
        </div>
        <!-- class form created for style,id form created for js -->
        <form method="post" action="teacher_update.php" class="form" id="form" >
        
            <input type="hidden" name="id" value = "<?php echo $id; ?>" >
            <div class="form-control">
                <label>TeacherNAME:</label>
                <input type="text" placeholder="Enter your Name" name="teacherName" id="name" value = "<?php echo $teacherName; ?>">
             
            </div>
            <div class="form-control">
                <label>SubjectTeacher:</label>
                <input type="date" placeholder="Enter your dob" name="subTeacher" i value = "<?php echo $subTeacher; ?>">
              
            </div>
            <div class="form-control">
                <label>ClassTeacher:</label>
                <input type="text" placeholder="Enter your class" name="classTeacher" id="class" value = "<?php echo $classTeacher; ?>">
           
            </div>
            <div class="form-control">
                <label>Mobile Number:</label>
                <input type="text" placeholder="Enter mobile Number" name="mobile" id="num" value = "<?php echo $mobile; ?>">
         
            </div>
            <div class="form-control">
                <label>Email id:</label>
                <input type="email" placeholder="Enter email id" name="email" id="email" value = "<?php echo $email; ?>">
             
            </div>
            <div class="gender">
                <label>Gender:</label>
                Male<input type="radio" name="gender" value="male <?php if($gender == 'male'){echo 'checked';} ?>">
                Female<input type="radio" name="gender" value=" female <?php if($gender == 'female'){echo 'checked';} ?>">      </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>