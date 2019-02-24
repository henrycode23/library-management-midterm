<?php

if(isset($_POST['save'])){
  $borrower_student_name = $_POST['borrower_student_name'];
  $borrower_book_name = $_POST['borrower_book_name'];
  $date_borrowed = $_POST['date_borrowed'];
  $date_returned = $_POST['date_returned'];
  
  // SELECT * FROM students a INNER JOIN borrow b ON a.student_name = b.borrower_student_name
  $result = $mysqli->query("SELECT student_name FROM students WHERE student_name = '$borrower_student_name' LIMIT 1 ") or die($mysqli->error());
  $count = mysqli_num_rows($result);
  

  if($count == 0){
    $_SESSION['message'] = "<strong>Fail to Record!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
    $_SESSION['msg_type'] = "danger";
    return false;
  } else{
    $mysqli->query("INSERT INTO borrow (borrower_student_name, borrower_book_name, date_borrowed, date_returned) VALUES('$borrower_student_name', '$borrower_book_name', now(), '$date_returned')") or die($mysqli_error->error);
      
    $_SESSION['message'] = "<strong>Borrower has been recorded!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
    $_SESSION['msg_type'] = "success";
  }
}