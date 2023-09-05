 <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">VBlog</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
         <a class="nav-link" href="/dashboard">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         WPULaravel - Personal
     </div>

     <!-- Nav Item - My Blog -->
     <li class="nav-item {{ Request::is('dashboard/blog*') ? 'active' : '' }}">
         <a class="nav-link" href="/dashboard/blog">
             <i class="fa-solid fa-blog"></i>
             <span>My Blog</span></a>
     </li>

     <!-- Nav Item - About -->
     <li class="nav-item {{ Request::is('dashboard/about') ? 'active' : '' }}">
         <a class="nav-link" href="/dashboard/about">
             <i class="fa-solid fa-address-card"></i>
             <span>About</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     @can('admin')
         <!-- Heading -->
         <div class="sidebar-heading">
             Panel - Admin
         </div>

         <!-- Nav Item - all blogs -->
         <li class="nav-item {{ Request::is('dashboard/blogs*') ? 'active' : '' }}">
             <a class="nav-link" href="/dashboard/blogs">
                 <i class="fa-solid fa-blog"></i>
                 <span>All Blogs</span></a>
         </li>
         <!-- Nav Item - categories -->
         <li class="nav-item {{ Request::is('dashboard/categories*') ? 'active' : '' }}">
             <a class="nav-link" href="/dashboard/categories">
                 <i class="fa-solid fa-tag"></i>
                 <span>Categories</span></a>
         </li>
         <!-- Nav Item - users -->
         <li class="nav-item {{ Request::is('dashboard/users*') ? 'active' : '' }}">
             <a class="nav-link" href="/dashboard/users">
                 <i class="fa-solid fa-user"></i>
                 <span>Users</span></a>
         </li>
     @endcan

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>
 </ul>
