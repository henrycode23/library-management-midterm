<?php

$id = 0;

if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  
  $mysqli->query("DELETE FROM borrow WHERE id = $id") or die($mysqli->error());
  
  $_SESSION['message'] = "<strong>Borrower has been deleted!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
  $_SESSION['msg_type'] = "danger";

}

if(isset($_GET['borrow'])){
  $id = $_GET['borrow'];
  $result = $mysqli->query("SELECT * FROM books WHERE id = $id") or die($mysqli->error());
  if(@count($result)==1){ // RECORD HAS BEEN FOUND
    $row = $result->fetch_array(); // RETURN DATA FROM DB
    $book_name = $row['book_name'];
    $book_quantity = $row['book_quantity'];
  }
}

if(isset($_POST['borrow'])){
  $borrower_student_name = $_POST['borrower_student_name'];
  $borrower_book_name = $_POST['borrower_book_name'];
  $date_borrowed = $_POST['date_borrowed'];
  $date_returned = $_POST['date_returned'];

  $mysqli->query("INSERT INTO borrow (borrower_student_name, borrower_book_name, date_borrowed, date_returned) VALUES ('$borrower_student_name', '$borrower_book_name', now(), '$date_returned')") or
    die($mysqli->error());
  $mysqli->query("UPDATE books SET book_quantity = $book_quantity - 1 WHERE id = $id");

    $_SESSION['message'] = "<strong>Borrower has been updated!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
    $_SESSION['msg_type'] = "success";

}

if(isset($_GET['return'])){
  $id = $_GET['return'];

  $mysqli->query("UPDATE borrow SET date_returned = now() AND books SET book_quantity = $book_quantity + 1 WHERE id = $id") or die($mysqli->error());

//  $mysqli->query("UPDATE books SET book_quantity = $book_quantity + 1 WHERE id = $id") or die($mysqli->error());
}

if(isset($_POST['return_button'])){
  
}