

    <div class="color-line"></div>
    <div class="container-fluid all">
        <div class="alert alert-error alert-error-style1 alert-error-stylenone">
            <button type="button" class="close error-op" data-dismiss="alert" aria-label="Close">
                    <span class="icon-sc-cl" aria-hidden="true">×</span>
                </button>
            <i class="fa fa-check adminpro-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i>
            <p class="message-alert-none"><strong>Success!</strong> Indicates a successful or positive action.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12 mt-10">
                <div class="text-center m-b-md custom-login ">
                    <h3>ERADI ADMIN</h3>
                    <p>Universal Web CMS</p>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label" for="password">Kontak</label>
                            <input type="text" placeholder="admin@admin.com" value="" name="kontak" id="username" class="form-control">
                            <span class="help-block small"></span>
                        </div>
                        <button class="btn btn-success btn-block loginbtn" onclick="checkemail()">Konfirmasi</button>
                        <a class="btn btn-default btn-block" href="<?php echo base_url() ?>admin/login" >Login</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>

<script type="text/javascript">    
    function checkemail(){
        $.post("<?php echo base_url() ?>admin/cek-lupa-password", {email: $("#username").val()}, function(result){
            if(result){
            }else{
                setTimeout(function(){ 
                    $('div.alert .close').parent().alert('close');        
                }, 5000);
            }
        });
    } 
</script>