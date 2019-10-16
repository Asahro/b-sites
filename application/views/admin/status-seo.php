<!-- 
jumlah view
jumlah member
jumlah permintaan penawaran
jumlah pembelian
tabel halaman dan jumlah view
tabel produk, jumlah penawaran, pembelian
calender proses berisi data view, permintaan, dan pembelian

jumlah dashboard ada 3 sesuai tpe user
 -->


	<?php $this->load->view('admin/themplate/header'); ?>

<body>
	<?php $this->load->view('admin/themplate/sidebar'); ?>
    <div class="all-content-wrapper">
		<?php $this->load->view('admin/themplate/normal-headbar'); ?>

        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject text-uppercase"><b>Pengunjung Bulanan</b></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-grey active">
													<input type="radio" name="options" class="toggle" id="option1" checked="">Today</label>
                                                <label class="btn btn-grey">
													<input type="radio" name="options" class="toggle" id="option2">Week</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline cus-product-sl-rp">
                                <li>
                                    <h5><i class="fa fa-circle" style="color: #24caa1;"></i>Bags</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle" style="color: #3f4d9f;"></i>Shoes</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle" style="color: #ff7f5a;"></i>Jewelery</h5>
                                </li>
                            </ul>
                            <div id="sparklinehome" class="sparkline-container">Loading..</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="white-box analytics-info-cs mg-b-10 res-mg-t-30">
                            <h3 class="box-title">Total Visit</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-success">8659</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs mg-b-10">
                            <h3 class="box-title">Total Page Views</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-purple">7469</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs mg-b-10">
                            <h3 class="box-title">Unique Visitor</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-info">6011</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs">
                            <h3 class="box-title">Bounce Rate</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash4"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-down" aria-hidden="true"></i> <span class="text-danger">18%</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15 ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Riwayat <span class="table-project-n">Login dan Transaksi</span> Table</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="name" data-editable="true">Product Title</th>
                                                <th data-field="company" data-editable="true">Stock</th>
                                                <th data-field="price" data-editable="true">Price</th>
                                                <th data-field="date" data-editable="true">Date</th>
                                                <th data-field="task" data-editable="true">Status</th>
                                                <th data-field="email" data-editable="true">Total Sales</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>1</td>
                                                <td>Product Title</td>
                                                <td>Out Of Stock</td>
                                                <td>$54</td>
                                                <td>Jul 14, 2017</td>
                                                <td>Active</td>
                                                <td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>21</td>
                                                <td>Product Title</td>
                                                <td>In Of Stock</td>
                                                <td>$5</td>
                                                <td>Jul 14, 2017</td>
                                                <td>Active</td>
                                                <td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php $this->load->view('admin/themplate/footer'); ?>