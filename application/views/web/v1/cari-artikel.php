	<?php $this->load->view('web/themplate/header'); ?>
	<?php $this->load->view('web/themplate/headbar'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>nassets/styles/artikel_styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>nassets/styles/artikel_responsive.css">


			<!-- Product Grid -->
	<style type="text/css">
		.reody{
			border:0; 
			/*color:#f6931f; */
			font-weight:bold;
		}
		input:focus {   
		  border-color: #e3e3e3 !important;
		  box-shadow: none !important;
		  outline: 0 none;
		}
		.product-grid{
			height: unset;
			margin-top: 10px;
		}
		.search{
			border-radius: 0px;
			border-color: #e3e3e3;
			font-family: 'Poppins', sans-serif !important;
			font-size: 14px;
		}
	
		.product-item{
			height: unset !important;
		}
		.product {
			height: unset !important;
		}
		.smr-5{
			margin-right: 0%;
		}
	</style>




	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">

				<!-- Breadcrumbs -->


				<?php $this->load->view('web/themplate/breadcrumbs'); ?>

				<!-- Sidebar -->

				<div class="sidebar">
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Jenis Artikel</h5>
						</div>
						<ul class="sidebar_categories">
							<li><a href="#">Men</a></li>
							<li class="active"><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Women</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">New Arrivals</a></li>
							<li><a href="#">Collection</a></li>
							<li><a href="#">Shop</a></li>
						</ul>
					</div>


					<!-- Sizes -->
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Sizes</h5>
						</div>
						<ul class="checkboxes">
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>S</span></li>
							<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>M</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>L</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>XL</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>XXL</span></li>
						</ul>
					</div>

					<!-- Color -->
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Color</h5>
						</div>
						<ul class="checkboxes">
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Black</span></li>
							<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>Pink</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>
						</ul>
						<div class="show_more">
							<span><span>+</span>Show More</span>
						</div>
					</div>

				</div>

				<!-- Main Content -->

				<div class="main_content">

					<!-- Products -->

					<div class="products_iso">
						<div class="row">
							<div class="col">

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_top row">
									<div class="form-group col-8">
									   <small class="form-text text-muted">Sistem Pencari Realtime</small>
									   <input type="text" class="form-control search" placeholder="Cari Timbangan">
									</div>
									<ul class="product_sorting col-4">
										<small class="form-text text-muted">Sortir Hasil</small>
										<li class="col-md-12">
											<span class="type_sorting_text col-md-12">Normal</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_type">
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Normal</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Harga</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Nama</span></li>
											</ul>
										</li>
									</ul>
								</div>


								<div class="product-grid">



									<?php for ($i=0; $i < 60; $i++) {
										$j = $i + 1;
										if($j % 3 != 0){
											$data['p5'] = "";
										}else{
											$data['p5'] = "smr-5";
										}
										$data['status'] = "women";
										$data['nama_produk'] = "women";
										$data['kapasitas_produk'] = "women";
										$data['hargga_normal'] = "women";
										$data['harga_diskon'] = "women";
										$data['baru'] = "women";
										$data['diskon'] = "women";
										$data['jenis_produk'] = "Jenis Produk";
										$data['gambar'] = "image";
										$data['url_tokped'] = "women";
										$this->load->view('web/themplate/artikel', $data);
									} ?>





								</div>

								<!-- Product Sorting -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php $this->load->view('web/themplate/footer'); ?>
	<script src="<?php echo base_url() ?>nassets/js/artikel_custom.js"></script>

	