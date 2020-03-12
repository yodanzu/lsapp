<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">
        ICM
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <li class="nav-item">
                    <a href="{{ route('dashboard')}}" class="nav-link">
                       <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item ">
              <a href="" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                      User Management
                  </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                  Table Maintenance
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav-item nav-treeview">
                <li class="nav-item ml-3">
                  <a href="#" class="nav-link">
                    <i class="far fa-folder nav-icon"></i>
                    <p>
                      Common
                    <i class="right fas fa-angle-left"></i>
                    
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-link ml-2">
                      <a href="#">
                       <i class="nav-icon fas fa-cog"></i>
                        Subject
                      </a>
                    </li>
                    <li class="nav-link ml-2">
                      <a href="#">
                       <i class="nav-icon fas fa-cog"></i>
                        Course
                      </a>
                    </li>

                  </ul>
                </li>
              </ul>
          </li>
          </ul>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

