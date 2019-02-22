<?php
  if(isset($_POST['save'])){
    $book_name = $_POST['book_name'];
    $book_desc = $_POST['book_desc'];
    $book_author = $_POST['book_author'];
    $book_date_published = $_POST['book_date_published'];

    $mysqli->query("INSERT INTO books (book_name, book_desc, book_author, book_date_published) VALUES('$book_name', '$book_desc', '$book_author', '$book_date_published')") or die($mysqli_error->error);

    $_SESSION['message'] = "<strong>Book has been saved!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
    $_SESSION['msg_type'] = "success";
  }