
      <?php
        $this->load->view('web/login/part/header');
      ?>
      <div class="welcome d-flex justify-content-center flex-column" style="height: 785px;">
        <div style="height: -webkit-fill-available; margin-top: 0px;">
          <!-- Welcome Section -->
          <div class="welcome-login d-flex justify-content-center flex-column">
            <div class="inner-wrapper mt-auto mb-auto">
              <div class="action-links container container-card text-left" style="max-width: 540px">
                <div class="card mt-auto bg-white">
                  <div class="row mr-0">
                    <div class="col-12">
                      <article class="card-body">
                        <h4 class="card-title mb-4 mt-1">Lupa Password</h4>
                        <form  action="<?php echo base_url(); ?>ceklogin"  target="_top" method="post">
                          <div class="form-group">
                              <input name="id" class="form-control" placeholder="Email" type="email" required="">
                          </div>
                          <div class="row ml-0 mr-0">
                            <a class="btn btn-danger btn-block col-6 text-white mt-1" style="height: 40px"  onclick="window.history.go(-1); return false;" > Back</a>
                            <button type="submit" class="btn btn-primary btn-block col-6 mt-1" style="height: 40px"> Kirim</button>
                          </div>
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