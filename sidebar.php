<?php
include 'db.php';
session_start();
$uid = $_SESSION['UserID'];
if($_SESSION['UserID']==""){
    header('location:LOGIN.php');
}
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="122.jpg" alt="BOK'S" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BARELL OF BOOK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="009.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Akshay</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="mainadmin.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DASHBOARD</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="Requests.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                VIEW REQUESTS
              </p>
            </a></li>
              <li class="nav-item">
            <a href="viewusers.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                VIEW USERS
              </p>
            </a>
          </li>
          
          <!-- <li class="treeview"><a class="app-menu_item" href="#" data-toggle="treeview"><i class="app-menuicon fa fa-th-list"></i><span class="app-menu_label">USER</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href=".php"><i class="icon fa fa-circle-o"></i>View User</a></li>
            <li><a class="treeview-item" href="table-data-table.php"><i class="icon fa fa-circle-o"></i>View Rejected User</a></li>
          </ul>
        </li> -->
         
          <li class="nav-item">
            <a href="view_dealers.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                VIEW DEALERS
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="add_dealer.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                ADD DEALERS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="add_books.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                ADD BOOKS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin_view_books.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                VIEW BOOKS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="user_complaints.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                USER COMPLAINTS
              </p></a></li>
          <li class="nav-item">
            <a href="view_orders.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                VIEW ORDERS
              </p>
            </a>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-reply"></i>
              <p>
                LOGOUT
              </p>
              
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

