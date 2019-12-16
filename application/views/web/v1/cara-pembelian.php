	<?php $this->load->view('web/themplate/header'); ?>
	<?php $this->load->view('web/themplate/headbar'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>nassets/styles/categories_styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>nassets/styles/categories_responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>nassets/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>nassets/styles/responsive.css">

	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">
				<?php $this->load->view('web/themplate/breadcrumbs'); ?>
			</div>
		</div>
	</div>


	<div class="blogs mt-4">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Cara Meminta Penawaran</h2>
					</div>
				</div>
			</div>
			
			<?php for ($i=0; $i < 5; $i++) {
				$this->load->view('web/themplate/step');
			} ?>



		</div>
	</div>


	<div class="blogs">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Cara
						 Pembelian</h2>
					</div>
				</div>
			</div>
			<?php for ($i=0; $i < 5; $i++) {
				$this->load->view('web/themplate/step');
			} ?>
		</div>
	</div>


	<div class="blogs">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Cara Mendapatkan Diskon Tambahan</h2>
					</div>
				</div>
			</div>
			<?php for ($i=0; $i < 5; $i++) {
				$this->load->view('web/themplate/step');
			} ?>
		</div>
	</div>




	<?php $this->load->view('web/themplate/footer'); ?>
