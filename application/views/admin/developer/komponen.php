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
        .col-12{
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
                                <div class="col-lg-9 col-md-9 col-sm-9 col-sm-8 col-xs-8">
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control quicksearch" placeholder="Cari Logo">
                                    </div>    
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-sm-4 col-xs-4">
                                    <div class="btn btn-block btn-primary col" data-toggle="modal" data-target="#tambahModal">Tambah Komponen</div>
                                </div>                                            
                            </div>
                        </div>
                    </div>

                    <?php  
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                          CURLOPT_URL => base_url()."api/ambil-komponen",
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
                        $komponen = $response['data']; 
                    ?>

                    <div class="grid mt100">
                        <?php for($i = 0; $i < count($komponen); $i++){ ?>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb30">
                                <div class="hpanel responsive-mg-b-30">
                                    <div class="panel-body">
                                            <div class="col-xs-8 col-sm-8 col-md-8">
                                                <h2 class="panel-title float-left"><?php echo $komponen[$i]['nama'] ?></h2>
                                                <p class="float-left"><?php echo $komponen[$i]['deskripsi'] ?></p>
                                            </div>
                                            <div class="btn btn-success col-xs-2 col-sm-2 col-md-2 ml-2" onclick="ubah('<?php echo $komponen[$i]['id'] ?>', '<?php echo $komponen[$i]['nama'] ?>', '<?php echo $komponen[$i]['nama_file'] ?>', '<?php echo $komponen[$i]['version'] ?>',  '<?php echo $komponen[$i]['tinggi'] ?>', '<?php echo $komponen[$i]['deskripsi'] ?>')">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </div>
                                            <div class="btn btn-danger col-xs-2 col-sm-2 col-md-2 ml-2" onclick="hapus('<?php echo $komponen[$i]['id'] ?>', '<?php echo $komponen[$i]['nama'] ?>')">
                                                <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                            </div>
                                            <img src="<?php echo base_url()?>gambar/komponen/<?php echo $komponen[$i]['gambar'] ?>" style="height: 150px; width: 100%;">
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
                    <input type="text" class="form-control" placeholder="Masukan Nama Komponen" id="nama">
                </div>
                <div class="form-group-inner">
                    <label>Nama File</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama File Komponen" id="nama-file">
                </div>
                <div class="form-group-inner">
                    <label>Versi</label>
                    <input type="number" class="form-control" placeholder="Masukan Nama Komponen" id="versi">
                </div>
                <div class="form-group-inner">
                    <label>Tinggi</label>
                    <input type="number" class="form-control" placeholder="Masukan Tinggi Komponen" id="tinggi">
                </div>
                <div class="form-group-inner">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" placeholder="Masukan Deskripsi Komponen" id="deskripsi">
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
                    <input type="text" class="form-control" placeholder="Masukan Nama Logo" id="ubah-id">
                </div>
                <div class="form-group-inner">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Komponen" id="ubah-nama">
                </div>
                <div class="form-group-inner">
                    <label>Versi</label>
                    <input type="number" class="form-control" placeholder="Masukan Nama Komponen" id="ubah-versi">
                </div>
                <div class="form-group-inner">
                    <label>Nama File</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama File Komponen" id="ubah-nama-file">
                </div>
                <div class="form-group-inner">
                    <label>Tinggi</label>
                    <input type="number" class="form-control" placeholder="Masukan Tinggi Komponen" id="ubah-tinggi">
                </div>
                <div class="form-group-inner">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" placeholder="Masukan Deskripsi Komponen" id="ubah-deskripsi">
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
                    title: "Hapus Komponen "+nama,
                    text: "Yakin Hapus Komponen "+nama+" ?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ya, Hapus !",
                    cancelButtonText: "Batal",
                    closeOnConfirm: false
                }, function (isConfirm) {
                    if (!isConfirm) return;
                    $.ajax({
                        url: "<?php echo base_url()?>api/hapus-komponen",
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

            function ubah(id, nama, nama_file, versi, tinggi, deskripsi){
                document.getElementById("ubah-id").value = id;
                document.getElementById("ubah-nama").value = nama;
                document.getElementById("ubah-nama-file").value = nama_file;
                document.getElementById("ubah-versi").value = versi;
                document.getElementById("ubah-tinggi").value = tinggi;
                document.getElementById("ubah-deskripsi").value = deskripsi;
                $('#ubahModal').modal('show');
            }

            function update(){
                $.ajax({
                    url: "<?php echo base_url()?>api/ubah-komponen",
                    type: "POST",
                    data: {
                        id           : document.getElementById("ubah-id").value,
                        nama         : document.getElementById("ubah-nama").value,
                        nama_file    : document.getElementById("ubah-nama-file").value,
                        version      : document.getElementById("ubah-versi").value,
                        tinggi       : document.getElementById("ubah-tinggi").value,
                        deskripsi    : document.getElementById("ubah-deskripsi").value
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

            function tambah(){
                $.ajax({
                    url: "<?php echo base_url()?>api/tambah-komponen",
                    type: "POST",
                    data: {
                        nama              : document.getElementById("nama").value,
                        tinggi            : document.getElementById("tinggi").value,
                        nama_file         : document.getElementById("nama-file").value,
                        deskripsi         : document.getElementById("deskripsi").value,
                        gambar            : document.getElementById("nama-file").value+".jpg",
                        version           : document.getElementById("versi").value
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


