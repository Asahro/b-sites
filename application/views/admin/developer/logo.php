    <style type="text/css">
        .mt30{
            margin-top:30px
        }

        .mb30{
            margin-bottom:30px
        }

        .mt100{
            margin-top: 100px
        }

        .pb{
            position: block;
        }

        .profile{
            width: 100%;
        }

        .d-none{
            display: none;
        }

    </style>
        <div class="author-area-pro mt30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="author-widgets-single">
                            <div class="row">
                                <form id="tambah_logo">
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-sm-8 col-xs-8">
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control quicksearch" placeholder="Cari Logo">
                                        </div>    
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-sm-4 col-xs-4">
                                        <div class="btn btn-block btn-primary col" data-toggle="modal" data-target="#tambahModal">Tambah Logo</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <?php  
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                          CURLOPT_URL => base_url()."api/ambil-logo",
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_TIMEOUT => 30,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => "GET",
                          CURLOPT_HTTPHEADER => array(
                            "cache-control: no-cache"
                          ),
                        ));
                        $response = curl_exec($curl);
                        $err = curl_error($curl);
                        curl_close($curl);
                        $response = json_decode($response, true);
                        $logo = $response['data']; 
                    ?>

                    <div class="grid mt100">
                        <?php for($i = 0; $i < count($logo); $i++){ ?>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-sm-6 col-xs-6 mb30">
                                <div class="hpanel responsive-mg-b-30">
                                    <div class="panel-body">
                                        <div class="text-center content-box">
                                            <div class="m icon-box">
                                                <i class="fa <?php echo($logo[$i]['data'])?>" aria-hidden="true"></i>
                                            </div>
                                            <h2 class="m-b-xs"><?php echo($logo[$i]['nama'])?></h2>
                                            <p class="font-bold text-warning"><?php echo($logo[$i]['data'])?></p>
                                            <button class="btn btn-success btn-sm" onclick="ubah(<?php echo($logo[$i]['id'])?>, '<?php echo($logo[$i]['nama'])?>', '<?php echo($logo[$i]['data'])?>')">Ubah</button>
                                            <button class="btn btn-danger btn-sm" onclick="hapus(<?php echo($logo[$i]['id'])?>, '<?php echo($logo[$i]['nama'])?>')">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         <?php } ?>                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
              </div>
              <div class="modal-body">
                <div class="form-group-inner">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Logo" id="nama">
                </div>
                <div class="form-group-inner">
                    <label>Code</label>
                    <input type="text" class="form-control" placeholder="Masukan Code Logo" id="code">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="tambah()">Save changes</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="ubahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
              </div>
              <div class="modal-body">
                <div class="form-group-inner d-none">
                    <label>id</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Logo" id="ubah_id">
                </div>
                <div class="form-group-inner">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Logo" id="ubah_nama">
                </div>
                <div class="form-group-inner">
                    <label>Code</label>
                    <input type="text" class="form-control" placeholder="Masukan Code Logo" id="ubah_code">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="update()">Save changes</button>
              </div>
            </div>
          </div>
        </div>



        <script type="text/javascript">
            function hapus(id, nama){
                swal({
                    title: "Hapus Logo "+nama,
                    text: "Yakin Hapus Logo "+nama+" ?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ya, Hapus !",
                    cancelButtonText: "Batal",
                    closeOnConfirm: false
                }, function (isConfirm) {
                    if (!isConfirm) return;
                    $.ajax({
                        url: "<?php echo base_url()?>api/hapus-logo",
                        type: "POST",
                        data: {
                            id         : id,
                            nama       : nama
                        },
                        dataType: "html",
                        async: false,
                        success: function () {
                            location.reload();
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            swal("Gagal!", "mohon coba lagi..", "error");
                        }
                    });
                });     
            }

            function tambah(){
                $.ajax({
                    url: "<?php echo base_url()?>api/tambah-logo",
                    type: "POST",
                    data: {
                        nama         : document.getElementById("nama").value,
                        data         : document.getElementById("code").value
                    },
                    dataType: "html",
                    async: false,
                    success: function () {
                        location.reload();
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                    }
                });
            }

            function ubah(id, code, nama){
                document.getElementById("ubah_id").value = id;
                document.getElementById("ubah_code").value = nama;
                document.getElementById("ubah_nama").value = code;
                $('#ubahModal').modal('show');
            }

            function update(){
                $.ajax({
                    url: "<?php echo base_url()?>api/ubah-logo",
                    type: "POST",
                    data: {
                        id           : document.getElementById("ubah_id").value,
                        nama         : document.getElementById("ubah_nama").value,
                        data         : document.getElementById("ubah_code").value
                    },
                    dataType: "html",
                    async: false,
                    success: function () {
                        location.reload();
                    },
                    error: function (xhr, ajaxOptions, thrownError) {

                    }
                });
            }
        </script>


