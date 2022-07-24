<?php
include 'db.php';
session_start();
$uid = $_SESSION['UserID'];
if($_SESSION['UserID']==""){
    header('location:LOGIN.php');
}
$rol=mysqli_query($conn,"SELECT * FROM login WHERE Login_id='$uid'");
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dealer_dashboard.php" class="brand-link">
      <img src="122.jpg" alt="BRS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BARELL OF BOOKS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <?php while($p=mysqli_fetch_assoc($rol)){ ?>
        <div class="info">
          <a href="#" class="d-block"><?php echo $p['username'];?></a>
        </div>
        <?php } ?>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="dealdash.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="dealreq.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                ORDER REQUEST
              </p>
            </a>
          </li>
              <li class="nav-item">
            <a href="dealerbooks.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                BOOKS
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="add_rentbook.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                BOOK FOR RENT
              </p>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a href="rentbookview.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                RENTED BOOKS
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="dealstock.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                ADD BOOK STOCK
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="visstodeal.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                VIEW BOOK STOCK
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="dealuseorders.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                USER ORDER's
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="deauserorder.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                ORDER HISTORY
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="adddelivery.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                ADD DELIVERY PERSON
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="viewdeli.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                VIEW DELIVERY PERSON
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                CONTACT ADMIN
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="Logout.php" class="nav-link">
              <i class="nav-icon fas fa-reply"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

