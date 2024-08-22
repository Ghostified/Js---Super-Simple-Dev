<!-- 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo</title>
  </head>
  <body>
    <?php
      $studentName = $_POST['studentName'];
      $grade = $_POST['grade'];
      $section = $_POST['section'];
      $teacher = $_POST['teacherName'];

      echo"<hi> Student Information </h1>";
      echo "Student Name is:" . $studentName . '<br>';
      echo "He is in Grade: " . $grade . '</br>';
      echo "He is in section". $section . '</br>';
      echo "Class Teacher is ". $teacher. '</br>';
    
    ?>
  </body>
</html> 

-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo</title>
  </head>
  <body>
  <?php
      $studentName = $_POST['studentName'] ?? '';
      $grade = $_POST['grade'] ?? '';
      $section = $_POST['section'] ?? '';
      $teacher = $_POST['teacherName'] ?? '';

      echo "<h1>Student Information</h1>";
      echo "Student Name is: " . htmlspecialchars($studentName) . '<br>';
      echo "He is in Grade: " . htmlspecialchars($grade) . '<br>';
      echo "He is in Section: " . htmlspecialchars($section) . '<br>';
      echo "Class Teacher is: " . htmlspecialchars($teacher) . '<br>';
    ?>
  </body>
</html>
