<?php

if(isset($_POST['save'])){
  $borrower_student_name = $_POST['borrower_student_name'];
  $borrower_book_name = $_POST['borrower_book_name'];
  
  $result = $mysqli->query("SELECT * FROM students a INNER JOIN borrow b ON a.student_name = b.borrower_student_name") or die($mysqli->error());
  while($row = $result->fetch_assoc()): 
    $student_name = $row['student_name']; 
  endwhile;

    if($borrower_student_name != $student_name){
      // echo "Fail to Insert";
      $_SESSION['message'] = "<strong>Fail to Insert!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
      $_SESSION['msg_type'] = "danger";
    } else{
      $mysqli->query("INSERT INTO borrow (borrower_student_name, borrower_book_name, date_borrowed) VALUES('$borrower_student_name', '$borrower_book_name', now())") or die($mysqli_error->error);
  
      $_SESSION['message'] = "<strong>Student has been saved!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
      $_SESSION['msg_type'] = "success";
    }
  }