    <!-- BEGIN SLIDER -->
	<div class="main">
      <div class="container">
	  <br>
	  <br>
		<div class="page-slider margin-bottom-35">
			<div id="carousel-example-generic" class="carousel slide carousel-slider">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					<li data-target="#carousel-example-generic" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<!--<div class="carousel-inner" role="listbox">
					<div class="item carousel-item-four active">
						<div class="container">
							
						</div>
					</div>
					
					<div class="item carousel-item-five">
						<div class="container">
							
						</div>
					</div>

					<div class="item carousel-item-six">
						<div class="container">
							
						</div>
					</div>
				</div>-->
				<br>
				<br>
				<div class="main">
				  <div class="container">
					<!-- BEGIN SIDEBAR & CONTENT -->
					<div class="row margin-bottom-40">
					  <!-- BEGIN CONTENT -->
					  <div class="col-md-12 col-sm-12">
						<h1>Laporan Keuangan Bulanan</h1>
						<div class="content-page">
						<div class="col card-header py-3 text-left">
							<h3>Penerimaan</h3>
						</div>
						<div class="col card-header py-3 text-right">
							<div class="btn-group" role="group">
								<a href="<?= base_url('Laporan/cetak_pdf'); ?>" class="btn btn-danger"><i class="fa fa-print"> PDF</i></a>
								<a href="<?php echo site_url('laporan/exportToExcel'); ?>" class="btn btn-success"><i class="fa fa-print"> Excel</i></a>
							</div>
						</div>
						<br>
						<br>
						  <div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							  <thead>
								<tr>
								  <th>Tanggal Masuk</th>
								  <th>Pemasukan Dari</th>
								  <th>Jenis Dana</th>
								  <th>Jumlah Biaya</th>								  
								  <th>Saldo Awal</th>
								</tr>
							  </thead>
							  <tbody>
							  <?php foreach ($laporan as $dat) : ?>
								<tr>
								  <td><?= $dat['tgl_masuk']; ?></td>
								  <td><?= $dat['nama_instansi']; ?></td>							  
								  <td><?= $dat['lokasi']; ?></td>
								  <td style="font-size: 17px; text-align: right; "><?= $dat['jml_dana']; ?></font></td>
								  <td style="font-size: 17px; text-align: right; "><?= $dat['saldo_awal']; ?></font></td>
								</tr>
							  <?php endforeach; ?> 
							  </tbody>
							  <tr>
								 <td colspan="3" style="text-align: left; font-size: 17px; color: maroon;">Total Penerimaan :</td>
								 <td colspan="2" style="font-size: 17px; text-align: center; "><font style="color: green;"><?= $dat['sisa_saldo']; ?></font></td>
							  </tr>
							</table>
						  </div>
						  <br>
						  <div class="col card-header py-3 text-left">
							<h3>Pengeluaran</h3>
						  </div>
						  <br>
						  <div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							  <thead>
								<tr>
								  <th>Tanggal Keluar</th>
								  <th>Keperluan</th>
								  <th>Jumlah Biaya</th>
								</tr>
							  </thead>
							  <tbody>
							  <?php foreach ($danakeluar as $dat) : ?>
								<tr>
								  <td><?= $dat['tgl_keluar']; ?></td>
								  <td><?= $dat['kebutuhan']; ?></td>
								  <td style="font-size: 17px; text-align: right; "><?= $dat['jml_biaya']; ?></font></td>
								</tr>
							  <?php endforeach; ?> 
							  </tbody>
							  <tr>
								<td colspan="2" style="text-align: left; font-size: 17px; color: maroon;">Total Pengeluaran :</td>
								<td style="font-size: 17px; text-align: right; "><font style="color: green;"><?= $dat['total_pengeluaran']; ?></font></td>
							  </tr>
							   <tr>
								<td colspan="1" style="text-align: left; font-size: 17px; color: maroon;">Saldo Akhir :</td>
								<td colspan="2" style="font-size: 17px; text-align: center; "><font style="color: green;"><?= $dat['total_pengeluaran']; ?></font></td>
							  </tr>
							</table>
						  </div>
						</div>
					  </div>
					  <!-- END CONTENT -->
					</div>
					<!-- END SIDEBAR & CONTENT -->
				  </div>
				</div>
				<!-- Controls -->
				<a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="prev">
					<i class="fa fa-angle-left" aria-hidden="true"></i>
				</a>
				<a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="next">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	 </div>
	</div>
    <!-- END SLIDER -->
    

    