<?php
  if(isset($_GET['page'])){
    $page = $_GET['page'];
  } else{
    $page = "";
  }

  switch($page){
    case 'add-borrower' :
      include "includes/add_borrower.php";
      break;
    case 'edit-borrower' :
      include "includes/edit_borrower.php";
      break;
    default:
      include "includes/view_borrowers.php";
      break;
  }
