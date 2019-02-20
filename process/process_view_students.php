<?php

  $id = 0;
  // $student_name = "";
  // $student_age = "";
  // $student_address = "";
  // $student_course = "";

  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    
    $mysqli->query("DELETE FROM students WHERE id = $id") or die($mysqli->error());
    
    $_SESSION['message'] = "<strong>Student has been deleted!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
    $_SESSION['msg_type'] = "danger";

  }

  if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM students WHERE id = $id") or die($mysqli->error());
    if(@count($result)==1){ // RECORD HAS BEEN FOUND
      $row = $result->fetch_array(); // RETURN DATA FROM DB
      $student_name = $row['student_name'];
      $student_age = $row['student_age'];
      $student_address = $row['student_address'];
      $student_course = $row['student_course'];
    }
  }

  if(isset($_POST['update'])){
    $id = $_POST['id'];
    $student_name = $row['student_name'];
    $student_age = $row['student_age'];
    $student_address = $row['student_address'];
    $student_course = $row['student_course'];

    $mysqli->query("UPDATE students SET student_name='$student_name', student_age='$student_age', student_address='$student_address', student_course='$student_course' WHERE id=$id") or
      die($mysqli->error());

      $_SESSION['message'] = "<strong>Student has been updated!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
      $_SESSION['msg_type'] = "success";

      // header("Location: students.php?page=edit_student");
  }