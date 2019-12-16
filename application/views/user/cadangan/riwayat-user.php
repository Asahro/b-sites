<!-- 
ID
Nama
Email
Nomor
company
Waktu Daftar
Terakhir Login
halaman access : waktu access -->



	<?php $this->load->view('admin/themplate/header'); ?>
	

<body>
	<?php $this->load->view('admin/themplate/sidebar'); ?>
    <div class="all-content-wrapper">
		<?php $this->load->view('admin/themplate/normal-headbar'); ?>

                <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15 ">
            <div class="container-fluid">
                <div class="row">
                    <?php
                    $data['class'] = 'class="col-lg-3 col-md-3 col-sm-3 col-xs-3"'; 
                    $data['url'] = '#';
                    $this->load->view('admin/themplate/user-card', $data); 
                    ?>

                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
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