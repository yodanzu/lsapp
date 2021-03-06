<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">
        
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
                  <i class="nav-icon fas fa-users-cog "></i>
                  <p>
                      User Management
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item ml-5 pb-2">
                      <a href="{{ route('view.user.index') }}">
                       <i class="nav-icon fas fa-cog"></i>
                        User
                      </a>
                    </li>
                  </li>
              </ul>
              <ul class="nav nav-treeview">
                  <li class="nav-item ml-5 pb-2">
                      <a href="{{ route('view.role.index') }}">
                       <i class="nav-icon fas fa-cog"></i>
                        Role
                      </a>
                    </li>
                  </li>
              </ul>
              <ul class="nav nav-treeview">
                  <li class="nav-item ml-5 pb-2">
                      <a href="{{ route('view.permission.index') }}">
                       <i class="nav-icon fas fa-cog"></i>
                        Permission
                      </a>
                    </li>
                  </li>
              </ul>
            </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
                <p>
                  Table & Maintenance
                  <i class="right fas fa-angle-left"></i>
                </p>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item ml-4 pb-2">
                    <a href="{{ route('course.index') }}">
                     <i class="nav-icon fas fa-cog"></i>
                      Subject
                    </a>
                </li>
                 <li class="nav-item ml-4 pb-2">
                    <a href="#">
                     <i class="nav-icon fas fa-cog"></i>
                      Expertise
                    </a>
                </li>
          </ul>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

