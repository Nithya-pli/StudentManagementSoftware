<?php
// Assuming you have a function to fetch data from your database
function getStudentsData()
{
    $dbconn = mysqli_connect("localhost", "root", "", "student");

    // Fetching data from the student_detail table
    $studentQuery = "SELECT id, name FROM student_detail";
    $studentResult = mysqli_query($dbconn, $studentQuery);

    $studentData = array();
    while ($studentRow = mysqli_fetch_assoc($studentResult)) {
        $studentData[] = $studentRow;
    }

    // Fetching data from the teacher_detail table
    $teacherQuery = "SELECT id, teacherName FROM teacher_detail";
    $teacherResult = mysqli_query($dbconn, $teacherQuery);

    $teacherData = array();
    while ($teacherRow = mysqli_fetch_assoc($teacherResult)) {
        $teacherData[] = $teacherRow;
    }

    mysqli_close($dbconn);

    return [
        'students' => $studentData,
        'teachers' => $teacherData,
    ];
}

$data = getStudentsData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Details</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <div class="container">
        <div class="head">
            <h3>Student_Details</h3>
        </div>
        <!-- class form created for style, id form created for js -->
        <form method="post" action="mark_insert.php" class="form" id="form">
        
            <!-- Hidden input field to store id -->
            <input type="hidden" name="id">

             <!-- Dropdown to select a student -->
             <div class="form-control">
                <label>Select Student_id:</label>
                <select name="student_id">
                    <option>Select Student_id</option>
                    <?php foreach ($data['students'] as $student): ?>
                        <option value='<?php echo $student['id']; ?>'><?php echo $student['id']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        
            <!-- Dropdown to select a student -->
            <div class="form-control">
                <label>Select Student_Name:</label>
                <select name="student_name">
                    <option>Select Student_Name</option>
                    <?php foreach ($data['students'] as $student): ?>
                        <option value='<?php echo $student['name']; ?>'><?php echo $student['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Dropdown to select a teacher -->
            <div class="form-control">
                <label>Select Teacher:</label>
                <select name="teacher_name">
                    <option>Select Teacher_Name</option>
                    <?php foreach ($data['teachers'] as $teacher): ?>
                        <option value='<?php echo $teacher['teacherName']; ?>'><?php echo $teacher['teacherName']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-control">
                <label>Subject:</label>
                <input type="text" placeholder="Enter subject" name="subject">
            </div>
            <div class="form-control">
                <label>Marks:</label>
                <input type="text" placeholder="Enter marks" name="marks">
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
