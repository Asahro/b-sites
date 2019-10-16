    <style type="text/css">
        .hapus{
            position: absolute;
            margin-left: 300px;
            font-size: 20px;
            margin-top: -10px;
            color: red;
        }
        
        .edit{
            position: absolute;
            margin-left: 270px;
            font-size: 20px;
            margin-top: -10px;
            color: blue;
        }
        
        .view{
            position: absolute;
            margin-left: 240px;
            font-size: 20px;
            margin-top: -10px;
            color: green;
        }
        
        .mt30{
            margin-top:30px
        }

        .mt100{
            margin-top: 100px
        }

        .pb{
            position: block;
        }

        .profile{
            width: 100%
        }
    </style>
        <div class="author-area-pro mt30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="author-widgets-single">
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control quicksearch" placeholder="Cari Logo">
                                    </div>    
                                </div>
                                <a href="<?php echo base_url()?>admin/daftar-admin/tambah-admin" class="col-lg-3 col-md-3 col-sm-3 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="btn btn-block btn-primary col">Tambah Logo</div>
                                </a>                                            
                            </div>
                        </div>
                    </div>

                    <?php  
                        $logo = $this->modeladmin->ambil_logo(); 
                    ?>

                    <div class="grid mt100">
                        <?php for($i = 0; $i < count($logo); $i++){ ?>
                            asesssuuu

                         <?php } ?>                        
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function hapus(nama, id, gambar){
                swal({
                    title: "Hapus Admin "+nama,
                    text: "Kirim Pesan Anda ?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ya, Kirimkan !",
                    cancelButtonText: "Batal",
                    closeOnConfirm: false
                }, function (isConfirm) {
                    if (!isConfirm) return;
                    $.ajax({
                        url: "<?php echo base_url()?>admin/daftar-admin/hapus-admin/"+id,
                        type: "POST",
                        data: {
                            photo         : gambar,
                            nama          : nama
                        },
                        dataType: "html",
                        async: false,
                        success: function () {
                            //swal("Sukses!", "Pesan Telah Terkirim, Saya Akan Balas Secepatnya", "success");
                            location.reload();
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            swal("Gagal!", "mohon coba lagi..", "error");
                        }
                    });
                });     
            }
        </script>


