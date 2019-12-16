	<?php $this->load->view('web/themplate/header'); ?>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>nassets/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>nassets/styles/responsive.css">
<style type="text/css">	
	.corner-ribbon{
	  width: 100%;
	  background: #e43;
	  position: absolute;
	  bottom: 25px;
	  text-align: center;
	  line-height: 50px;
	  letter-spacing: 1px;
	  color: #f0f0f0;
	  font-size: 25px;
	}
	.promo{
		font-size: 30px;
		color: white;
	}
	.corner-ribbon.sticky{
	  /*position: fixed;*/
	}
	.corner-ribbon.shadow{
	  box-shadow: 0 0 3px rgba(0,0,0,.3);
	}
	.harga_asli{
		font-size: 20px !important;
	}
	.corner-ribbon.red{background: #e43;}
</style>


	<?php $this->load->view('web/themplate/home/bestseller'); ?>

	<?php $this->load->view('web/themplate/footer'); ?>

	<script src="<?php echo base_url() ?>nassets/js/custom.js"></script>