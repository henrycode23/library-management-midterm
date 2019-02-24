<?php require_once "process/process_view_books.php"; ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">View Books</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<?php if(isset($_SESSION['message'])): ?>
  <div class="alert alert-<?php echo $_SESSION['msg_type']; ?> alert-dismissible fade show" role="alert"> <!-- ECHO DYNAMIC MSG_TYPE - BOOTSTRAP SUCCES, DANGER, WARNING -->
    <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
    ?>
  </div>
<?php endif; ?>

<!-- DataTales Example -->
<div class="card shadow mb-6">

  <?php $result = $mysqli->query("SELECT * FROM books") or die($mysqli->error); ?>

  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Books Table</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Book Cover</th>
            <th>Book Name</th>
            <th>Description</th>
            <th>Author</th>
            <th>Date Published</th>
            <th>Quantity</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Id</th>
            <th>Book Cover</th>
            <th>Book Name</th>
            <th>Description</th>
            <th>Author</th>
            <th>Date Published</th>
            <th>Quantity</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><a href="img/<?php echo $row['book_image']; ?>" target="_blank"><img src="img/<?php echo $row['book_image']; ?>" width="50" height="50"></a></td>
            <td><?php echo $row['book_name']; ?></td>
            <td><?php echo $row['book_desc']; ?></td>
            <td><?php echo $row['book_author']; ?></td>
            <td><?php echo $row['book_date_published']; ?></td>
            <td><?php echo $row['book_quantity']; ?></td>
            <td>
              <a href="books.php?page=edit-book&edit=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete?')" href="books.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>