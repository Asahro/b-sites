
     <?php $this->load->view('admin/themplate/header'); ?>    
<body>
    <?php $this->load->view('admin/themplate/sidebar'); ?>
    <div class="all-content-wrapper">
        <?php $this->load->view('admin/themplate/normal-headbar'); ?>

        <div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">

                                <!-- Tab Utama user dan admin -->
                                <ul id="myTab4" class="tab-review-design">
                                    <li class="active col-md-4 col-sm-4 col-xs-4 col-lg-6"><a href="#grafikpengurus"><i class="fa fa-user" aria-hidden="true"></i> Grafik Pengajar</a></li>
                                    <li class="col-md-4 col-sm-4 col-xs-4 col-lg-6"><a href="#datapengurus"><i class="fa fa-user" aria-hidden="true"></i> Daftar Pengajar</a></li>
                                </ul>

                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="grafikpengurus">
                                        <?php $this->load->view('admin/themplate/grafik-pengajar'); ?>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="datapengurus">
                                        <?php $this->load->view('admin/themplate/data-pengajar'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $this->load->view('admin/themplate/footer'); ?>
