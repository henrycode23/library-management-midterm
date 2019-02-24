<?php require_once "process/process_view_borrowers.php"; ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">View Borrowers</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<?php if(isset($_SESSION['message'])): ?>
  <div class="alert alert-<?php echo $_SESSION['msg_type']; ?> alert-dismissible fade show" role="alert"> <!-- ECHO DYNAMIC MSG_TYPE - BOOTSTRAP SUCCES, DANGER, WARNING -->
    <?php
      echo $_SESSION['message']; // ECHO DYNAMIC MESSAGE
      unset($_SESSION['message']);
    ?>
  </div>
<?php endif; ?>

<!-- DataTales Example -->
<div class="card shadow mb-6">

  <?php $result = $mysqli->query("SELECT * FROM students a INNER JOIN borrow b ON a.student_name = b.borrower_student_name") or die($mysqli->error); ?>
  <!-- SELECT borrow.id, students.student_name, books.book_name, borrow.book_date_borrowed, borrow.book_date_returned FROM borrow LEFT JOIN students ON borrow.student_id = students.id LEFT JOIN books ON borrow.book_id = books.id -->
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Borrower Table</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Student Name</th>
            <th>Book Name</th>
            <th>Date Borrowed</th>
            <th>Date Returned</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Id</th>
            <th>Student Name</th>
            <th>Book Name</th>
            <th>Date Borrowed</th>
            <th>Date Returned</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
        <?php
        if($row['date_returned'] == 0000-00-00){
          $not_returned = "NOT RETURNED";
        } else{
          $row['date_returned'];
        }
        ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['borrower_student_name']; ?></td>
            <td><?php echo $row['borrower_book_name']; ?></td>
            <td><?php echo $row['date_borrowed']; ?></td>
          <?php if($row['date_returned'] == 0000-00-00): ?>
            <td><?php echo $not_returned; ?></td>
          <?php else: ?>
            <td><?php echo $row['date_returned']; ?></td>
          <?php endif; ?>
            <td>
              <a href="borrow.php?page=edit-borrower&edit=<?php echo $row['id']; ?>" class="btn btn-info">Return Book</a>
            </td>
          </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>