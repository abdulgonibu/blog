 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="{{ url('/') }}" class="brand-link">
         <span class="brand-text font-weight-light">Global Business Solution</span>
     </a>
     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ !empty(Auth::user()->image) ? url('upload/user_images/' . Auth::user()->image) : url('upload/no-image.png') }}" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">{{ Auth::user()->name }}</a>
             </div>
         </div>
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <li class="nav-item {{ request()->is('users/view', 'profile/view') ? 'menu-open' : '' }}">
                     <a href="#" class="nav-link">
                         <i class="fas fa-tasks"></i>
                         <p>
                             Management
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('users.view') }}" class="nav-link {{ request()->is('users/view') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>User List</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('profile.view') }}" class="nav-link {{ request()->is('profile/view') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Profile View</p>
                             </a>
                         </li>

                     </ul>
                 </li>
                 <li class="nav-item {{ request()->is('logos/view', 'sliders/view', 'sliders/add', 'contacts/view') ? 'menu-open' : '' }}">
                     <a href="#" class="nav-link">
                         <i class="fas fa-cog"></i>
                         <p>
                             Website Setting
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('logos.view') }}" class="nav-link {{ request()->is('logos/view') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Manage Logo</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('sliders.view') }}" class="nav-link {{ request()->is('sliders/view') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Manage Banner</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('categories.view') }}" class="nav-link {{ request()->is('contacts/view') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Category</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('contacts.view') }}" class="nav-link {{ request()->is('contacts/view') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Manage Contact</p>
                             </a>
                         </li>

                     </ul>
                 </li>

                 <li class="nav-item {{ request()->is('contacts/communicate', 'contacts/delllarship', 'contacts/calcutor') ? 'menu-open' : '' }}">
                     <a href="#" class="nav-link">
                         <i class="fas fa-comments"></i>
                         <p>
                             Communication
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('contacts.communicate') }}" class="nav-link {{ request()->is('contacts/communicate') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Contact Communication</p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="{{ route('portfolies.view') }}" class="nav-link {{ request()->is('portfolies/view') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Portfolio Image</p>
                             </a>
                         </li>

                         <li class="nav-item">
                            <a href="{{ route('abouts.view') }}" class="nav-link {{ request()->is('portfolies/view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About</p>
                            </a>
                        </li>
                     </ul>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>