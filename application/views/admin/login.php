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
                            <a class="btn btn-default btn-block" href="<?php echo base_url() ?>admin/login/lupa-password" >Lupa Password</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>
