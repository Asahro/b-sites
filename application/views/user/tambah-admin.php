
	<?php $this->load->view('admin/themplate/header'); ?>
	<style type="text/css">
    .btn-file {
        position: relative;
        overflow: hidden;
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
    </style>
<body>
	<?php $this->load->view('admin/themplate/sidebar'); ?>
    <div class="all-content-wrapper">
		<?php $this->load->view('admin/themplate/normal-headbar'); ?>
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-t-15 mg-b-30">
            <div class="container-fluid">
                <form action="<?php echo(base_url())?>admin/upload-data-admin" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div class="form-group" style="min-height: 483px;background: white;">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Pilih Photo Profile 
                                            <input type="file" id="imgInp" name="image">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <img id='img-upload'/>
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
                                            <textarea placeholder="Biodata Admin" name="biodata" class="form-control" style="height: 280px"></textarea> 
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
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12">Simpan Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php $this->load->view('admin/themplate/footer'); ?>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<script type="text/javascript">
    $(document).ready( function() {
        $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {
            
            var input = $(this).parents('.input-group').find(':text'),
                log = label;
            
            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }
        
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#img-upload').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
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