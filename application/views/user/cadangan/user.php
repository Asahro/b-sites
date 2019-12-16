<!-- 
ID
Nama
Email
Nomor
company
Waktu Daftar
Terakhir Login
halaman access : waktu access -->



	<?php $this->load->view('admin/themplate/header'); ?>
	

<body>
	<?php $this->load->view('admin/themplate/sidebar'); ?>
    <div class="all-content-wrapper">
		<?php $this->load->view('admin/themplate/normal-headbar'); ?>

        
		<div class="author-area-pro mt-30">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">                        
                        <div class="row">
                            <?php for($i = 0; $i < 4; $i++){ ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" <?php if($i >= 1) echo "style='margin-top:30px'" ?>>
                                <div class="author-widgets-single res-mg-t-30">
                                    <div class="persoanl-widget-hd persoanl1-widget-hd">
                                        <h2>Fire Foxy</h2>
                                    </div>
                                    <h4>Fire Foxy</h4>
                                    <h4>Fire Foxy</h4>
                                    <h4>Fire Foxy</h4>
                                    <h4>Fire Foxy</h4>
                                    <h4>Fire Foxy</h4>
                                    <h4>Fire Foxy</h4>
                                    <h4>Fire Foxy</h4>
                                    <h4>Fire Foxy</h4>
                                    <h4>Fire Foxy</h4>
                                    <h4>Fire Foxy</h4>
                                </div>                            
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="author-widgets-single">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" placeholder="Cari User">
                                                </div>    
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                <select name="select" class="form-control pro-edt-select form-control-primary">
                                                    <option value="opt1">Sortir Berdasarkan</option>
                                                    <option value="opt2">2</option>
                                                    <option value="opt3">3</option>
                                                    <option value="opt4">4</option>
                                                    <option value="opt5">5</option>
                                                    <option value="opt6">6</option>
                                                </select>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            <?php for($i = 0; $i < 200; $i++){ 
                                $data['class'] = 'class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="margin-top:30px"';
                                $data['url'] = base_url().'admin/daftar-user/riwayat-user/4';
                                ?>
                                <?php $this->load->view('admin/themplate/user-card', $data); ?>
                             <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php $this->load->view('admin/themplate/footer'); ?>