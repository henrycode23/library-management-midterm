<?php

  $id = 0;

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
      $student_image = $row['student_image'];
    }
  }

  if(isset($_POST['update'])){
    $id = $_POST['id'];
    $student_name = $_POST['student_name'];
    $student_age = $_POST['student_age'];
    $student_address = $_POST['student_address'];
    $student_course = $_POST['student_course'];

    $student_image = $_FILES['student_image']['name'];
    $student_image_temp = $_FILES['student_image']['tmp_name'];
    move_uploaded_file($student_image_temp, "img/$student_image");

    if(empty($student_image)){
      $result = $mysqli->query("SELECT * FROM students WHERE id = $id") or die($mysqli->error());
      while($row = $result->fetch_assoc()){
        $student_image = $row['student_image'];
      }
    }

    $mysqli->query("UPDATE students SET student_name='$student_name', student_age='$student_age', student_address='$student_address', student_course='$student_course', student_image='$student_image' WHERE id=$id") or
      die($mysqli->error());

      $_SESSION['message'] = "<strong>Student has been updated!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
      $_SESSION['msg_type'] = "success";

  }