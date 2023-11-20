<?php
include 'include.php';

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

$id = $_GET['id'];
$data_query = $dbconn->query("SELECT * FROM marks_detail WHERE id = $id");
while ($query = mysqli_fetch_array($data_query)) {
    $student_id = $query['student_id'];
    $student_name = $query['student_name'];
    $teacher_name = $query['teacher_name'];
    $subject = $query['subject'];
    $marks = $query['marks'];
}
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
            <h3>Edit_Details</h3>
        </div>
        <!-- class form created for style, id form created for js -->
        <form method="post" action="mark_update.php" class="form" id="form">
        
            <!-- Hidden input field to store id -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <!-- Dropdown to select a student_id -->
            <div class="form-control">
                <label>Select Student_id:</label>
                <select name="student_id">
                    <option>Select Student_id</option>
                    <?php foreach ($data['students'] as $student): ?>
                        <option value='<?php echo $student['id']; ?>' <?php echo ($student['id'] == $student_id) ? 'selected' : ''; ?>><?php echo $student['id']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        
            <!-- Dropdown to select a student_name -->
            <div class="form-control">
                <label>Select Student_Name:</label>
                <select name="student_name">
                    <option>Select Student_Name</option>
                    <?php foreach ($data['students'] as $student): ?>
                        <option value='<?php echo $student['name']; ?>' <?php echo ($student['name'] == $student_name) ? 'selected' : ''; ?>><?php echo $student['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Dropdown to select a teacher_name -->
            <div class="form-control">
                <label>Select Teacher:</label>
                <select name="teacher_name">
                    <option>Select Teacher_Name</option>
                    <?php foreach ($data['teachers'] as $teacher): ?>
                        <option value='<?php echo $teacher['teacherName']; ?>' <?php echo ($teacher['teacherName'] == $teacher_name) ? 'selected' : ''; ?>><?php echo $teacher['teacherName']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-control">
                <label>Subject:</label>
                <input type="text" placeholder="Enter subject" name="subject" value="<?php echo $subject; ?>">
            </div>
            <div class="form-control">
                <label>Marks:</label>
                <input type="text" placeholder="Enter marks" name="marks" value="<?php echo $marks; ?>">
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
