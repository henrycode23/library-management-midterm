<?php
if(isset($_POST['save'])){
  $book_name = $_POST['book_name'];
  $book_desc = $_POST['book_desc'];
  $book_author = $_POST['book_author'];
  $book_date_published = $_POST['book_date_published'];
  $book_quantity = $_POST['book_quantity'];

  $book_image = $_FILES['book_image']['name'];
  $book_image_temp = $_FILES['book_image']['tmp_name'];
  move_uploaded_file($book_image_temp, "img/$book_image");

  $result = $mysqli->query("SELECT book_name FROM books WHERE book_name = '$book_name' ") or die($mysqli->error());
  $count = mysqli_num_rows($result);

  if($count > 0){
    $_SESSION['message'] = "<strong>Book has already been recorded!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
    $_SESSION['msg_type'] = "danger";
    return false;
  } else{
    $mysqli->query("INSERT INTO books (book_name, book_desc, book_author, book_date_published, book_quantity, book_image) VALUES('$book_name', '$book_desc', '$book_author', '$book_date_published', '$book_quantity', '$book_image')") or die($mysqli_error->error);
    
    $_SESSION['message'] = "<strong>Book has been saved!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
    $_SESSION['msg_type'] = "success";
  }
}