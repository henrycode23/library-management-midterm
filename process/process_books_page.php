<?php
  if(isset($_GET['page'])){
    $page = $_GET['page'];
  } else{
    $page = "";
  }

  switch($page){
    case 'add-book' :
      include "includes/add_book.php";
      break;
    case 'edit-book' :
      include "includes/edit_book.php";
      break;
    default:
      include "includes/view_books.php";
      break;
  }
