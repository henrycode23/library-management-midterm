<?php

  $id = 0;

  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    
    $mysqli->query("DELETE FROM borrow WHERE id = $id") or die($mysqli->error());
    
    $_SESSION['message'] = "<strong>Borrower has been deleted!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
    $_SESSION['msg_type'] = "danger";

  }

  if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM borrow WHERE id = $id") or die($mysqli->error());
    if(@count($result)==1){ // RECORD HAS BEEN FOUND
      $row = $result->fetch_array(); // RETURN DATA FROM DB
      $borrower_student_name = $row['borrower_student_name'];
      $borrower_book_name = $row['borrower_book_name'];
      $date_borrowed = $row['date_borrowed'];
      $date_returned = $row['date_returned'];
    }
  }

  if(isset($_POST['update'])){
    $id = $_POST['id'];
    $borrower_student_name = $_POST['borrower_student_name'];
    $borrower_book_name = $_POST['borrower_book_name'];
    $date_borrowed = $_POST['date_borrowed'];
    $date_returned = $row['date_returned'];

    $mysqli->query("UPDATE borrow SET borrower_student_name='$borrower_student_name', borrower_book_name='$borrower_book_name', date_borrowed='now()', date_returned='$date_returned' WHERE id=$id") or
      die($mysqli->error());

      $_SESSION['message'] = "<strong>Borrower has been updated!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
      $_SESSION['msg_type'] = "success";

  }