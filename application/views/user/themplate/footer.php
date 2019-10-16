
        <div class="footer-copyright-area mt-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Themplate by <a href="https://colorlib.com/wp/templates/">Colorlib</a> <?php echo $this->session->flashdata('login') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        .mt-30{
            margin-top: 30px;
        }
    </style>


    <script src="<?php echo base_url() ?>dassets/js/vendor/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/wow.min.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/calendar/moment.min.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/calendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/calendar/fullcalendar-active.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/chart/jquery.peity.min.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/data-table/tableExport.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/data-table/data-table-active.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/data-table/bootstrap-table-export.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/jquery-price-slider.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/jquery.meanmenu.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/jquery.sticky.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/metisMenu/metisMenu-active.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/input-mask/jasny-bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/sparkline/jquery.charts-sparkline.js"></script>

    
    
    <script src="<?php echo base_url() ?>dassets/js/notifications/Lobibox.js"></script>

    <script src="<?php echo base_url() ?>nassets/plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/summernote/summernote.min.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/summernote/summernote-active.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/peity/peity-active.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/tab.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script src="<?php echo base_url() ?>dassets/js/plugins.js"></script>
    <script src="<?php echo base_url() ?>dassets/js/main.js"></script>
    
</body>
</html>

<script type="text/javascript">
    
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