<?php
if(isset($_POST['save'])){
  $student_name = $_POST['student_name'];
  $student_age = $_POST['student_age'];
  $student_address = $_POST['student_address'];
  $student_course = $_POST['student_course'];

  $student_image = $_FILES['student_image']['name'];
  $student_image_temp = $_FILES['student_image']['tmp_name'];
  move_uploaded_file($student_image_temp, "img/$student_image");

  $result = $mysqli->query("SELECT student_name FROM students WHERE student_name = '$student_name' ") or die($mysqli->error());
  $count = mysqli_num_rows($result);

  if($count > 0){
    $_SESSION['message'] = "<strong>Name has already been recorded!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
    $_SESSION['msg_type'] = "danger";
    return false;
  } else{
    $mysqli->query("INSERT INTO students (student_name, student_age, student_address, student_course, student_image) VALUES('$student_name', '$student_age', '$student_address', '$student_course', '$student_image')") or die($mysqli_error->error);
    
    $_SESSION['message'] = "<strong>Student has been saved!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
    $_SESSION['msg_type'] = "success";
  }
}