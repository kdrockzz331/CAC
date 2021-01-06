

<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="./profile.php" class="d-block"><?php echo $_SESSION['stdname'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="./home.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
               
              </p>
            </a>
     
          </li>
		   <li class="nav-item">
            <a href="./profile.php" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>
                
				Profile
              </p>
            </a>
          </li>
		     <li class="nav-item">
            <a href="./semisterReg.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Semister Registration
              </p>
            </a>
          </li>
		   <li class="nav-item">
            <a href="attendence.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
				Attendance
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="./result.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
				Result
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./forms.php" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
				Report Problems
              </p>
            </a>
          </li>
		    <li class="nav-item">
            <a href="./index.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
				Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>