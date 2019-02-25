<?php require_once "process/process_view_borrowers.php"; ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Borrow Form</h1>
</div>

<?php if(isset($_SESSION['message'])): ?>
  <div class="alert alert-<?php echo $_SESSION['msg_type']; ?> alert-dismissible fade show" role="alert"> <!-- ECHO DYNAMIC MSG_TYPE - BOOTSTRAP SUCCES, DANGER, WARNING -->
    <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
    ?>
  </div>
<?php endif; ?>

<div class="card o-hidden border-0 shadow-lg">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Student's Borrower Form</h1>
              </div>
              <form action="" method="post" class="user" enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="text" name="borrower_student_name" class="form-control form-control-user" id="" placeholder="Student Name" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="text" name="borrower_book_name" value="<?php echo $book_name; ?>" class="form-control form-control-user" id="" placeholder="Book Name" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="hidden" name="date_borrowed" class="form-control form-control-user" id="" placeholder="Date Borrowed" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="hidden" name="date_returned" class="form-control form-control-user" id="" placeholder="Date Returned" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="hidden" name="book_quantity" class="form-control form-control-user" id="" placeholder="Book Quantity" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="submit" name="borrow" class="btn btn-primary btn-user btn-block" id="" value="Borrow">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

