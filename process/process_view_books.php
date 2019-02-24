<?php

  $id = 0;

  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    
    $mysqli->query("DELETE FROM books WHERE id = $id") or die($mysqli->error());
    
    $_SESSION['message'] = "<strong>Book has been deleted!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
    $_SESSION['msg_type'] = "danger";
  }

  if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM books WHERE id = $id") or die($mysqli->error());
    if(@count($result)==1){ // RECORD HAS BEEN FOUND
      $row = $result->fetch_array(); // RETURN DATA FROM DB
      $book_name = $row['book_name'];
      $book_desc = $row['book_desc'];
      $book_author = $row['book_author'];
      $book_date_published = $row['book_date_published'];
      $book_quantity = $row['book_quantity'];
      $book_image = $row['book_image'];
    }
  }

  if(isset($_POST['update'])){
    $id = $_POST['id'];
    $book_name = $_POST['book_name'];
    $book_desc = $_POST['book_desc'];
    $book_author = $_POST['book_author'];
    $book_date_published = $_POST['book_date_published'];
    $book_quantity = $_POST['book_quantity'];

    $book_image = $_FILES['book_image']['name'];
    $book_image_temp = $_FILES['book_image']['tmp_name'];
    move_uploaded_file($book_image_temp, "img/$book_image");

    if(empty($book_image)){
      $result = $mysqli->query("SELECT * FROM books WHERE id = $id") or die($mysqli->error());
      while($row = $result->fetch_assoc()){
        $book_image = $row['book_image'];
      }
    }

    $mysqli->query("UPDATE books SET book_name='$book_name', book_desc='$book_desc', book_author='$book_author', book_date_published='$book_date_published', book_quantity='$book_quantity', book_image='$book_image' WHERE id=$id") or die($mysqli->error());

      $_SESSION['message'] = "<strong>Book has been updated!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button>";
      $_SESSION['msg_type'] = "success";
  }