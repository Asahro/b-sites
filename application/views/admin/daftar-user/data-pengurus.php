            <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="author-widgets-single">
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control quicksearch" placeholder="Cari User">
                                    </div>    
                                </div>
                                <a href="<?php echo base_url()?>admin/daftar-admin/tambah-admin" class="col-lg-3 col-md-3 col-sm-3 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="btn btn-block btn-primary col">Tambah Admin</div>
                                </a>                                            
                            </div>
                        </div>
                    </div>

                    <div class="grid mt100">

                        <?php 

                        $data = $this->modeladmin->daftar_admin();
                        for($i = 0; $i < count($data); $i++){ ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 element-item mt30 pb" data-category="admin">
                                <div class="author-widgets-single res-mg-t-30">
                                    <a href="<?php echo base_url()?>admin/daftar-admin/data-lengkap-admin/id" class="view">
                                        <i class="fas fa-eye"></i>   
                                    </a>
                                    <a href="<?php echo base_url()?>admin/daftar-admin/hapus-admin/id" class="edit">
                                        <i class="fas fa-edit"></i>   
                                    </a>
                                    <a href="<?php echo base_url()?>admin/daftar-admin/hapus-admin/id" class="hapus">
                                        <i class="fas fa-book"></i> 
                                    </a>
                                    <div class="author-wiget-inner">
                                        <div class="perso-img">
                                            <img src="<?php echo base_url() ?>gambar/admin/<?php echo $data[$i]['photo'] ?>" class=" circle-border m-b-md profile" alt="profile">
                                        </div>
                                        <div class="persoanl-widget-hd persoanl1-widget-hd">
                                            <h2 class="nama"><?php echo $data[$i]['nama'] ?></h2>
                                            <p class="email"><?php echo $data[$i]['email'] ?></p>
                                            <p class="handphone"><?php echo $data[$i]['nomor_telepone'] ?></p>
                                        </div>
                                        <div class="social-widget-result social-widget1-result">

                                            <span>100 Tweets</span> |
                                            <span>350 Following</span> |
                                            <span>610 Followers</span>
                                        </div>
                                    </div>                                 
                                </div>
                            </div>
                         <?php } ?>                        

                    </div>


                    
                </div>
            </div>

            
    <style type="text/css">
        .hapus{
            position: absolute;
            margin-left: 270px;
            font-size: 20px;
            margin-top: -10px;
            color: red;
        }

        .back{
            position: absolute;
            margin-left: 270px;
            font-size: 20px;
            margin-top: -10px;
            color: green;
        }
        
        .edit{
            position: absolute;
            margin-left: 240px;
            font-size: 20px;
            margin-top: -10px;
            color: blue;
        }
        
        .view{
            position: absolute;
            margin-left: 210px;
            font-size: 20px;
            margin-top: -10px;
            color: green;
        }
        
        .mt30{
            margin-top:30px
        }


        .mt-4{
            margin-top: 10px
        }

        .mt100{
            margin-top: 100px
        }

        .pb{
            position: block;
        }

        .profile{
            height: 300px;
            width: 100%
        }

    </style>
