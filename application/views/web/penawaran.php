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

<script type="text/javascript">
	function demoFromHTML() {
        var pdf = new jsPDF('p', 'pt', 'letter');
        // pdf.internal.scaleFactor = 2.25;
        // var options = {format:"PNG", background:"#ffffff"}
        pdf.addHTML($('#selectori')[0], function () {
            pdf.save('diagnostik.pdf');
        });
    }
</script>

	<div class="blogs mt-0">
		<div class="container">
			<div class="d-flex justify-content-end">
				<a class="btn btn-success col-1"><i class="text-white fa fa-envelope"></i></a>
				<a class="btn btn-danger col-1" onclick="demoFromHTML()"><i class="text-white fa fa-download"></i></a>
			</div>
			<div class="border bg-white" id="selectori">
				<div class="pl-4 ml-4 pr-4 mr-4 pt-4 mt-4 pb-4 mb-4">
					<div class="d-flex justify-content-center">
						<img src="<?php echo base_url();?>gambar/themplate/logo-surat.png">				
					</div>
					<h2 class="d-flex justify-content-center">Surat Penawaran</h2>
					<p class="d-flex justify-content-end text-dark">Tanggal	:	HHHHH hh-bb-tttt</p>
					<p class="text-dark">Yth	:</p>
					<p class="ml-4 text-dark">
						Bpk. xxxxxxxx 		<br>
						PT. YYYYYYYYYYYYYY	<br>
											<br>
						Berikut adalah penawaran dari barang barang yang bapak minta.
					</p>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Barang</th>
								<th>Kuantitas</th>
								<th>Harga Barang</th>
								<th>Jumlah Harga</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								for($p = 1; $p < 12; $p++){
							?>
								<tr>
									<th><?php echo $p; ?></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
								</tr>
							<?php 
								}
							?>
							
						</tbody>
					</table>

					<p class="text-dark">Note :</p>
					<p class="ml-4 text-dark">
						1. Proses pembelian melalui <br>
						2. Proses pembelian melalui <br>
						3. Proses pembelian melalui <br>
						4. Proses pembelian melalui <br>
						5. Proses pembelian melalui
					</p><br><br><br><br>
					<p class="text-dark">Hormat Saya		
										<br>
										<br>
										<br>
										<br>
						Ahmad Sahro		<br>
						admin Website	<br>
					</p>
				</div>
			</div>
		</div>
	</div>


	<?php $this->load->view('web/themplate/footer'); ?>
