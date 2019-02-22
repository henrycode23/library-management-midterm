<?php
  if(isset($_GET['page'])){
    $page = $_GET['page'];
  } else{
    $page = "";
  }

  switch($page){
    case 'add-student' :
      include "includes/add_student.php";
      break;
    case 'edit-student' :
      include "includes/edit_student.php";
      break;
    default:
      include "includes/view_students.php";
      break;
  }
