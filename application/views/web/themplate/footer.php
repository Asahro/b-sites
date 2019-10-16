
	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<?php 
                    $jaminan = $this->modeljaminan->daftar_jaminan();
                    for ($i=0; $i < count($jaminan); $i++) { ?>
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="<?php echo $jaminan[$i]['logo'] ?>" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6><?php echo $jaminan[$i]['title'] ?></h6>
								<p><?php echo $jaminan[$i]['keterangan'] ?></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Berlangganan Info ?</h4>
						<p>Jangan Sampai melewatkan setiap diskon mingguannya</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
						<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
						<button id="newsletter_submit" class="newsletter_submit_btn trans_300" onclick="langganan()">Langganan</button>
					</div>
				</div>
			</div>
		</div>
	</div>

    <script type="text/javascript">
        function langganan(){
            var dataemail = document.getElementById("newsletter_email").value;
            if(dataemail){
                swal({
                    title: "Subscribe",
                    text: "Anda akan melakukan subscribe dengan email "+dataemail+". Tekan oke untuk setuju.",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Saya ingin Subscribe!",
                    cancelButtonText: "Batal",
                    closeOnConfirm: false
                }, function (isConfirm) {
                    if (!isConfirm) return;
                    $.ajax({ 
                        url: "<?php echo base_url();?>langganan",
                        type: "POST",
                        data: { email:  dataemail},
                        success: function (response) {
                            swal({
                                title: "Selesai!",
                                text: "Anda berhasil subscribe !",
                                type: "success"
                            },function () {
                                document.getElementById("newsletter_email").value = "";
                            });
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            swal("Gagal!", "mohon coba lagi..", "error");
                        }
                    });
                });            
            }else{

            }
        }
    </script>
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-left">
						<div>Design by <a href="https://colorlib.com/">Colorlib</a></div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-right">
						<ul>
							<?php 
			                    $sosial = $this->modelsosial->daftar_sosial();
			                    for ($i=0; $i < count($sosial); $i++) { ?>
									<li><a href="<?php echo $sosial[$i]['url'] ?>" title="<?php echo $sosial[$i]['title'] ?>"><i class="<?php echo $sosial[$i]['logo'] ?>" aria-hidden="true"></i></a></li>
							<?php } ?>

								<!-- <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li> -->

						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="<?php echo base_url() ?>nassets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>nassets/styles/bootstrap4/popper.js"></script>
<script src="<?php echo base_url() ?>nassets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>nassets/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>nassets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url() ?>nassets/plugins/easing/easing.js"></script>
<script src="<?php echo base_url() ?>nassets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

</body>
</html>

<script type="text/javascript">
	swal({
            title: "Ingin Subscribe ?",
            text: "Dengan melakukan subscribe anda akan mendapatkan !",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Subscribe !",
            cancelButtonText: "Batal",
            closeOnConfirm: false
        }, function (isConfirm) {
            if (!isConfirm) return;
            $.ajax({ 
                url: "<?php echo base_url();?>setup/delete_organization/"+id_berita,
                type: "POST",
                dataType: "html",
                success: function () {
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    swal("Gagal!", "mohon coba lagi..", "error");
                }
            });
        }

    
    <?php if($this->session->userdata('selamat datang')){ ?>
        Lobibox.notify('success', {
            showClass: 'fadeInDown',
            hideClass: 'fadeUpDown',
            delay: 15000,
            sound: false,
            title: 'Login Sukses',
            position: 'top right',
            img: '<?php echo base_url() ?>/gambar/admin/<?php echo $this->session->userdata('photo'); ?>',
            msg: '<?php echo $this->session->userdata('selamat datang'); 
                             $this->session->unset_userdata('selamat datang'); ?>'
        });
    <?php } ?>

    <?php if($this->session->userdata('error')){ ?>
       Lobibox.notify('error', {
            showClass: 'fadeInDown',
            hideClass: 'fadeUpDown',
            sound: false,
            delay: 15000,
            title: 'Error',
            position: 'top right',
            msg: '<?php echo $this->session->userdata('error');
                             $this->session->unset_userdata('error');
                     ?>'
        });
    <?php } ?>

    <?php if($this->session->userdata('success')){ ?>
       Lobibox.notify('success', {
            showClass: 'fadeInDown',
            hideClass: 'fadeUpDown',
            sound: false,
            delay: 15000,
            title: 'Success',
            position: 'top right',
            msg: '<?php echo $this->session->userdata('success');
                             $this->session->unset_userdata('success');
                     ?>'
        });
    <?php } ?>


    //     Lobibox.notify('error', {
    //         position: 'top right',
    //         delay: 15000,
    //         msg: "<?php echo $this->session->flashdata('error') ?>"
    //     });





    // Lobibox.notify('error', {
    //         showClass: 'fadeInDown',
    //         hideClass: 'fadeUpDown',
    //         // width: 300,
    //         sound: false,
    //         // size: 'large',
    //         title: 'Info title',
    //         // icon: false,
    //         // delay: false,
    //         position: 'top right',
    //         img: '<?php echo base_url() ?>dassets/img/notification/1.jpg',
    //         msg: 'Lorem ipsum dolor sit amet against apennine any created, spend loveliest, building stripes.'
    //     });

    
</script>