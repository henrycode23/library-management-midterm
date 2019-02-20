<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Library <sup>Management</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStudents" aria-expanded="true" aria-controls="collapseStudents">
    <i class="fas fa-fw fa-users"></i>
    <span>Students</span>
  </a>
  <div id="collapseStudents" class="collapse" aria-labelledby="headingStudents" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Manage Students:</h6>
      <a class="collapse-item" href="students.php?page=add_student">Add Student</a>
      <a class="collapse-item" href="students.php">View Students</a>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBooks" aria-expanded="true" aria-controls="collapseBooks">
    <i class="fas fa-fw fa-book"></i>
    <span>Books</span>
  </a>
  <div id="collapseBooks" class="collapse" aria-labelledby="headingBooks" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Manage Books:</h6>
      <a class="collapse-item" href="buttons.html">Add Book</a>
      <a class="collapse-item" href="books.php">View Books</a>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBorrow" aria-expanded="true" aria-controls="collapseBorrow">
    <i class="fas fa-fw fa-book"></i>
    <span>Borrow</span>
  </a>
  <div id="collapseBorrow" class="collapse" aria-labelledby="headingBorrow" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Manage Books:</h6>
      <a class="collapse-item" href="buttons.html">Borrow Book</a>
      <a class="collapse-item" href="cards.html">Borrowed Records</a>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->