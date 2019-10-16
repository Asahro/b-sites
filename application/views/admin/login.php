    <?php $this->load->view('admin/themplate/header'); ?>
    <style type="text/css">
        .mt-10{
            margin-top: 10%;
        }
        .all{
            height: 700px;
        }
        .checkbox.login-checkbox label {
            padding-left: 20px;
        }       
    </style>
<body>
    <div class="color-line"></div>
    <div class="container-fluid all">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12 mt-10">
                <div class="text-center m-b-md custom-login ">
                    <h3>ERADI ADMIN</h3>
                    <p>Universal Web CMS</p>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="<?php echo base_url() ?>admin/cek-login" method="post">
                            <div class="form-group">
                                <label class="control-label" for="password">Kontak</label>
                                <input type="text" placeholder="admin@admin.com" value="" name="kontak" id="username" class="form-control">
                                <span class="help-block small"></span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" value="" name="password" id="password" class="form-control">
                                <span class="help-block small"></span>
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
										<input type="checkbox" class="i-checks"> 
                                        Remember me 
                                </label>
                            </div>
                            <button class="btn btn-success btn-block loginbtn">Login</button>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#exampleModal">Lupa Password</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>


    <div id="exampleModal" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#">X</a>
                </div>
                <div class="modal-body">
                    <i class="fa fa-check modal-check-pro"></i>
                    <h2>Awesome!</h2>
                    <p>The Modal plugin is a dialog box/popup window that is displayed on top of the current page</p>
                </div>
                <div class="modal-footer">
                    <a data-dismiss="modal" href="#">Cancel</a>
                    <a href="#">Process</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade mt-10" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn btn-primary">Kirim Form Perubahan</button>
          </div>
        </div>
      </div>
    </div>




    <?php $this->load->view('admin/themplate/footer'); ?>
