<div id="layoutSidenav">
     <div id="layoutSidenav_nav">
          <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
               <div class="sb-sidenav-menu mt-4">
                    <div class="nav">
                         <!-- <span class="me-2 d-none d-lg-inline small fw-bolder ">
                              <img class="foto img-circle rounded-circle ms-1 mb-3" width="25%" src="<?= base_url('assets') ?>/img/profile.png" alt="">
                              <?= $admin['name']; ?><span class="cok mt-3">
                                   <br>
                              </span>
                         </span> -->

                         <!-- <div class="user-panel mt-3 pb-3 mb-3">
                              <div class="image">
                                   <img src="<?= base_url('assets') ?>/img/profile.png" class="img-circle elevation-2 ms-3 img-circle rounded-circle ms-1 mb-3" width="25%"" alt=" User Image">
                              </div>
                              <div class="info" style="margin-top: -30%; margin-left: 35%;">
                                   <p>
                                        <?= $admin['name']; ?>
                                   </p>
                                   <span class="spen" style="z-index: 99999; margin-top:-10%;"><i class="fas fa-circle text-success" style="font-size: 10px;"></i>
                                   </span>

                              </div>
                         </div> -->

                         <div class="user-panel">
                              <div class="pull-left image" style="float: left;">
                                   <img src="<?= base_url('assets') ?>/img/profile.png" class="img-circle elevation-2 ms-3 img-circle rounded-circle ms-1 mb-3" width="27%" alt="">
                              </div>
                              <div class="pull-left info" style="float: left; margin-top: -30%; margin-left: 35%;">
                                   <b>
                                        <?= $admin['name']; ?>
                                        <br>
                                        <a class="text-decoration-none text-secondary">
                                             <i class="fas fa-circle text-success" style="font-size: 15px;"></i>
                                             Online</a>

                                   </b>
                              </div>
                         </div>

                         <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                              <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                              Data Central
                              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                         </a> -->
                         <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                              <nav class="sb-sidenav-menu-nested nav">
                                   <a class="nav-link" href="layout-static.html">Ite List</a>
                                   <a class="nav-link" href="layout-sidenav-light.html">Node List</a>
                                   <a class="nav-link" href="layout-sidenav-light.html">Trunk List</a>
                                   <a class="nav-link" href="layout-sidenav-light.html">S Vlan List</a>
                                   <!-- <a class="nav-link" href="layout-sidenav-light.html">mpls l2vc itn List</a>
                                   <a class="nav-link" href="layout-sidenav-light.html">BWA List</a> -->
                              </nav>
                         </div>

                         <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                              <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                              Data Delivery
                              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                         </a> -->
                         <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                              <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                   <a class="nav-link" href="">Project List</a>
                                   <a class="nav-link" href="register.html">Route-Plan Design</a>
                                   <a class="nav-link" href="password.html">Route-Proposed Design</a>
                                   <a class="nav-link" href="password.html">Route-Deploy</a>
                              </nav>
                         </div>

                         <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseGangguan" aria-expanded="false" aria-controls="collapseGangguan">
                              <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                              Data Gangguan
                              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                         </a> -->
                         <div class="collapse" id="collapseGangguan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                              <nav class="sb-sidenav-menu-nested nav">
                                   <a class="nav-link" href="layout-static.html">Coverage info</a>
                                   <a class="nav-link" href="layout-sidenav-light.html">Splice Core info</a>
                              </nav>
                         </div>

                         <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCustomer" aria-expanded="false" aria-controls="collapseCustomer">
                              <div class="sb-nav-link-icon"><i class="fas fa-fw fa-columns"></i></div>
                              Data Customer
                              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                         </a>
                         <div class="collapse" id="collapseCustomer" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                              <nav class="sb-sidenav-menu-nested nav">
                                   <a class="nav-link" href="<?= base_url('customer') ?>">Customer List</a>

                              </nav>
                         </div>



                         <!-- <?php if ($title) : ?>
                              <li class="nav-item active"></li>
                         <?php else : ?>
                              <li class="nav-item"></li>
                         <?php endif; ?> -->



                         <a class="nav-link mt-5" href="<?= base_url('auth/logout'); ?>">
                              <div class="sb-nav-link-icon"><i class="fas fa-fw fa-sign-out-alt"></i></div>
                              Logout
                         </a>

                    </div>
               </div>
          </nav>
     </div>