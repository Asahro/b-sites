	<style type="text/css">
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .d-none{
        display: none !important;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

    #img-upload{
        width: 100%;
        background: white;
    }

    .cropit-preview {
      background-color: #f8f8f8;
      background-size: cover;
      border: 1px solid #ccc;
      border-radius: 3px;
      margin-top: 7px;
      width: 502px;
      height: 453px;
    }

    .cropit-preview-image-container {
      cursor: move;
    }

    .center {
      margin: auto;
      padding: 10px;
      float: none;
    }

    .mt-5{
      margin-top: 5px;
    }

    .modal-dialog{
      margin-top: 10px;
      margin-bottom: 0px;
    }

    .viewer-img{
      background: white;
      height: 373px;
    }

    .text-deskripsi{
      height: 205px !important;
    }

    .m-0{
      margin: 0px !important;
    }
    
    .mb-0{
      margin-bottom: 0px;
    }
    
    .p-7{
      padding: 7px;
    }

    .pb-0{
      padding-bottom: 0px;
    }
</style>

    <div class="image-editor">
        <div class="single-product-tab-area mg-t-15 mg-b-30">
            <div class="container-fluid">
                <form action="<?php echo(base_url())?>admin/upload-data-admin" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                          Pilih Photo Profile 
                                          <input type="file" id="imgInp" name="image" class="cropit-image-input">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <input type="text" name="nama_photo" class="form-control d-none" id="idphoto">
                                <img id='img-upload' class="viewer-img" />
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="single-pro-size">
                                        <h6>Nama</h6>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukan Nama" name="nama" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="single-pro-size">
                                        <h6>Email</h6>
                                        <div class="form-group">
                                            <input type="email" placeholder="Masukan Email" name="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="single-pro-size">
                                        <h6>Nomor Handphone</h6>
                                        <div class="form-group">
                                            <input type="text"  data-mask="089-999-999-999" placeholder="09X-XXX-XXX-XXX" name="handphone"  class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="single-pro-size">
                                        <h6>Role</h6>
                                        <div class="form-group">
                                            <select class="form-control" name="role">
                                                <option value="1">Admin</option>
                                                <option value="2">Super Admin</option>
                                                <option value="3">User</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="single-pro-size">
                                        <h6>Biodata Singkat</h6>
                                        <div class="form-group">
                                            <textarea placeholder="Biodata Admin" name="biodata" class="form-control text-deskripsi"></textarea> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="single-pro-size">
                                        <h6 class="stage">Sosial Media</h6>
                                        <div class="form-group row" style="margin-left: 0;margin-right: 0">
                                            <select class="form-control col-md-6"  style="width: 20%" name="sosialname[]">
                                                <option>IG</option>
                                                <option>FB</option>
                                                <option>TW</option>
                                                <option>Line</option>
                                            </select>
                                            <input type="text" placeholder="Masukan Id Anda Sosial Media" name="sosialvelue[]" class="form-control col-md-6" style="width: 60%">
                                            <div class="btn btn-danger col-md-2 remove" >X</div>
                                        </div>
                                        <div class="form-group">
                                            <div class="btn btn-primary add-more">Add Sosial media</div>
                                        </div>

                                        <div class="copy" style="display: none;">
                                            <div class="form-group row" style="margin-left: 0;margin-right: 0">
                                                <select class="form-control col-md-6"  style="width: 20%" name="sosialname[]">
                                                <option>IG</option>
                                                <option>FB</option>
                                                <option>TW</option>
                                                <option>
                                                <input type="text" placeholder="Masukan Id Anda Sosial Media" name="sosial[]" class="form-control col-md-6" style="width: 60%">
                                                <div class="btn btn-danger col-md-2 remove" >X</div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12">Simpan Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal" tabindex="-1" role="dialog" id="cropit">
          <div class="modal-dialog" role="document">
            <div class="modal-content mt-40">
              <div class="modal-header p-7">

<!--                 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
 -->
              </div>
              <div class="modal-body pb-0">
                  <div class="cropit-preview center"></div>
                  <div class="row mt-4 center">
                    <dir class="col-md-3 col-lg-3 col-sm-3 text-right m-0">
                      <i class="fas fa-undo rotate-ccw"></i>
                    </dir>
                    <dir class="col-md-6 col-lg-6 col-sm-6 mt-5 mb-0">
                      <input type="range" class="cropit-image-zoom-input center">
                    </dir>
                    <dir class="col-md-3 col-lg-3 col-sm-3 text-left m-0">
                      <i class="fas fa-redo rotate-cw"></i>
                    </dir>                    
                  </div>
              </div>
              <div class="modal-footer p-7">
                <button type="button" class="btn btn-primary export">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready( function() {       
        $(document).on('change', '.btn-file :file', function() {
            var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {
            $('#cropit').modal('show');            
            var input = $(this).parents('.input-group').find(':text'),
                log = label;
            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }
        });


        // function readURL(input) {
        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();
                
        //         reader.onload = function (e) {
        //             $('#img-upload').attr('src', e.target.result);
        //         }
                
        //         reader.readAsDataURL(input.files[0]);
        //     }
        // }

        // $("#imgInp").change(function(){
        //     readURL(this);
        // });     

      // $(function() {
      //   $('.image-editor').cropit({
      //     imageState: {
      //       src: 'http://lorempixel.com/500/400/',
      //     },
      //   });

      //   $('.rotate-cw').click(function() {
      //     $('.image-editor').cropit('rotateCW');
      //   });
      //   $('.rotate-ccw').click(function() {
      //     $('.image-editor').cropit('rotateCCW');
      //   });

      //   $('.export').click(function() {
      //     var imageData = $('.image-editor').cropit('export');
      //     window.open(imageData);
      //   });
      // });

    });


      $(function() {
        $('.image-editor').cropit({
          imageState: {
            src: 'http://lorempixel.com/200/100/',
          },
        });

        $('.rotate-cw').click(function() {
          $('.image-editor').cropit('rotateCW');
        });
        $('.rotate-ccw').click(function() {
          $('.image-editor').cropit('rotateCCW');
        });

        $('.export').click(function() {
          var imageData = $('.image-editor').cropit('export');
          $.post( "<?php echo(base_url())?>admin/simpan-gambar", { jenis: "admin", gambar: imageData, gambarsebelumnya : $('#idphoto').val() }, function( data ) { 
            $('#img-upload').attr('src', "http://localhost/tokoonline/gambar/admin/" + data );
            $('#idphoto').val(data);
            $('#cropit').modal('hide');            
          });
        });
      });


    $(".add-more").click(function(){ 
        var html = $(".copy").html();  
        $(".stage").after(html);
      });

      $("body").on("click",".remove",function(){ 
          $(this).parents(".form-group").remove();
      });
      
</script>