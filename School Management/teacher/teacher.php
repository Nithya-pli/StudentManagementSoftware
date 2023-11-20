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
            <h3>Teacher_Details</h3>
        </div>
        <!-- class form created for style,id form created for js -->
        <form method="post" action="teacher_insert.php" class="form" id="form" >
        
            <input type="hidden" name="id" >
            <div class="form-control">
                <label>Teacher_NAME:</label>
                <input type="text" placeholder="Enter your Name" name="teacherName" id="name">
             
            </div>
            <div class="form-control">
                <label>Subject_Teacher:</label>
                <input type="text" placeholder="Enter your subject" name="subTeacher" >
              
            </div>
            <div class="form-control">
                <label>Class_teacher:</label>
                <input type="text" placeholder="Enter your class" name="classTeacher" id="class">
           
            </div>
            <div class="form-control">
                <label>Mobile Number:</label>
                <input type="text" placeholder="Enter mobile Number" name="mobile" id="num">
         
            </div>
            <div class="form-control">
                <label>Email id:</label>
                <input type="email" placeholder="Enter email id" name="email" id="email">
             
            </div>
            <div class="gender">
                <label>Gender:</label>
                Male<input type="radio" name="gender" value="Male">
                Female<input type="radio" name="gender" value="Female">

            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>