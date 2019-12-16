  <?php $this->load->view('web/themplate/header'); ?>
      <div class="welcome d-flex justify-content-center flex-column" style="height: 785px;">
        <div style="height: -webkit-fill-available; margin-top: 30px;">
          <!-- Welcome Section -->
          <div class="welcome-login d-flex justify-content-center flex-column">
            <div class="inner-wrapper mt-auto mb-auto">
              <div class="action-links container container-card text-left" style="max-width: 540px">
                <div class="card mt-auto bg-white">
                  <div class="row mr-0">
                    <div class="col-12">
                      <article class="card-body">
                        <p class="float-right">Sudah Punya Akun ?<br>
                         <a href="<?php echo base_url(); ?>login">Login Disini</a></p> 
                        <h4 class="card-title mb-4 mt-1">Daftar Dengan</h4>
                        <br>
                        <p>
                          <a href="" class="btn btn-block btn-outline-danger"> <i class="fa fa-google"></i>   Daftar dengan Google</a>
                          <a href="" class="btn btn-block btn-outline-primary"> <i class="fa fa-facebook-f"></i>   Daftar dengan Facebook</a>
                        </p>
                        <hr>
                        <form  action="<?php echo base_url(); ?>ceklogin"  target="_top" method="post">
                          <div class="form-group">
                              <input name="id" class="form-control" placeholder="Nama" type="email" required="">
                          </div> <!-- form-group// -->
                          <div class="form-group">
                              <input name="id" class="form-control" placeholder="Email" type="email" required="">
                          </div> <!-- form-group// -->
                          <div class="form-group">
                              <input name="id" class="form-control" placeholder="Nomor Telephone" type="email" required="">
                          </div> <!-- form-group// -->
                          <div class="form-group">
                              <input name="id" class="form-control" placeholder="Nama Perusahaan" type="email" required="">
                          </div> <!-- form-group// -->
                          <div class="form-group">
                              <input class="form-control" placeholder="Password" type="password" name="password" required="">
                          </div> <!-- form-group// -->   
                          <div class="form-group">
                              <input class="form-control" placeholder="Ulangi Password" type="password" name="password" required="">
                          </div> <!-- form-group// -->   

                       </p> 
                        <button type="submit" class="btn btn-primary btn-block col-12"> Daftar  </button>
                        </form>     
                      </article>
                    </div>
                  </div>
                </div> <!-- card.// -->
              </div>
            </div>
          </div>  
        </div>
      </div>
      <?php
        $this->load->view('web/login/part/footer');
      ?>