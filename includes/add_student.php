<?php require_once "process/process_add_student.php"; ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Add Student</h1>
</div>

<?php if(isset($_SESSION['message'])): ?>
  <div class="alert alert-<?php echo $_SESSION['msg_type']; ?> alert-dismissible fade show" role="alert"> <!-- ECHO DYNAMIC MSG_TYPE - BOOTSTRAP SUCCES, DANGER, WARNING -->
    <?php
      echo $_SESSION['message']; // ECHO DYNAMIC MESSAGE
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
                <h1 class="h4 text-gray-900 mb-4">Student Form</h1>
              </div>
              <form action="" method="post" class="user" enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="text" name="student_name" class="form-control form-control-user" placeholder="Student Name" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="number" name="student_age" class="form-control form-control-user" placeholder="Age" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="text" name="student_address" class="form-control form-control-user" placeholder="Address" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="text" name="student_course" class="form-control form-control-user" placeholder="Course" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <label for="student_image">Profile Picture
                    <input type="file" name="student_image" class="form-control-file">
                    </label>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="submit" name="save" class="btn btn-primary btn-user btn-block" value="Save">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

