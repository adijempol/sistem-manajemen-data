<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
     <!-- Navbar Brand-->
     <a class="navbar-brand ps-5 fs-3 fw-bolder" href="<?= base_url('dashboard') ?>"">oprEJA</a>

     <hr class=" sidebar-divider my-0">
          <!-- Sidebar Toggle-->
          <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>


          <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

          </form>

          <!-- Navbar dropdown -->
          <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                         <span class="me-2 d-none d-lg-inline small fw-bolder"><?= $admin['name']; ?></span>
                         <!-- <i class="fas fa-user"></i> -->
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end my-1" aria-labelledby="navbarDropdown">

                         <li><a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Logout</a></li>
                    </ul>
               </li>
          </ul>
</nav>