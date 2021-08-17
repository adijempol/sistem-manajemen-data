<div class="container mt-5">
     <div class="row justify-content-center">
          <div class="col-md-5">
               <div class="card shadow-lg border-0 rounded-lg mt-5 my-3">
                    <div class="card-body my-2">

                         <div class="row">

                              <div class="col-lg my-md-2">
                                   <div class="p-2 mt-0">
                                        <div class="text-center">
                                             <h3 class="text-center text-muted fw-bold my-4 fs-1">Login Form</h3>
                                        </div>

                                        <?= $this->session->flashdata('message'); ?>

                                        <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                             <div class="form-group mb-4">
                                                  <input class="form-control" id="username" name="username" type="text" placeholder="username" autocomplete="off" value="<?= set_value('username'); ?>" />

                                                  <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>

                                             </div>
                                             <div class="form-group mb-4">
                                                  <input class="form-control" id="password" name="password" type="password" placeholder="Password" />
                                                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                                             </div>
                                             <div class="d-grid gap-2">
                                                  <button type="submit " class="btn btn-primary btn-block fw-bold">Sign in</button>
                                             </div>
                                             <hr>
                                             <!-- <div class="text-muted"></div> -->
                                             <div class="text-center text-muted mt-2 mb-0 ">
                                                  <!-- <a class="small" href="password.html">Forgot Password?</a> -->
                                                  <a class="text-decoration-none text-secondary"><span>
                                                            <i class="fab fa-xing" style="font-size: 48px;"></i>
                                                       </span>
                                                       <b class="eja" style="font-size: 35px;">Opr EJA</b>

                                                       <br>
                                                       Copyright &copy; 2021 All right reserved <br>
                                                       Aplikanusa Lintasarta
                                                  </a>
                                             </div>
                                        </form>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </div>
</div>
</main>
</div>