<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Laporan Dana RT</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laporan Dana RT</h6>
            </div>
			 <div class="col card-header py-3 text-right">
				<div class="btn-group" role="group">
					<button type="button" id="print-button" class="btn btn-primary" target="_blank"><i class="fa fa-print"></i></button>
					<a href="<?= base_url('Laporan/cetak_pdf'); ?>" class="btn btn-danger"><i class="fa fa-file-pdf"> PDF</i></a>
					<a href="<?php echo site_url('laporan/exportToExcel'); ?>" class="btn btn-success"><i class="fa fa-file-excel"> Excel</i></a>
				</div>
			  </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
					  <th>No</th>
                      <th>Tanggal Masuk</th>
                      <th>Pemasukan Dari</th>
					  <th>Jenis Dana</th>
                      <th>Jumlah Penerimaan</th>
					  <th>Tanggal Keluar</th>
                      <th>Keperluan</th>
					  <th>Jumlah Biaya</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
					 $no = 1; // Inisialisasi nomor urut
					 foreach ($laporan as $dat) : 
				  ?>
                    <tr>
					  <td><?php echo $no++; ?></td>
                      <td><?= $dat['tgl_masuk']; ?></td>
                      <td><?= $dat['nama_instansi']; ?></td>
					  <td><?= $dat['lokasi']; ?></td>
					  <td style="font-size: 17px; text-align: right;">Rp <?= number_format($dat['jml_dana'] ?? 0, 0, ',', '.'); ?></td>					  
					  <td><?= $dat['tgl_keluar']; ?></td>
                      <td><?= $dat['kebutuhan']; ?></td>
					  <td>Rp <?= number_format($dat['jml_biaya'], 0, ',', '.'); ?></td>
                    </tr>
                  <?php endforeach; ?> 
                  </tbody>
				  <tr>
                     <td colspan="2" style="text-align: left; font-size: 17px; color: maroon;">Total Penerimaan :</td>
                     <td colspan="3"style="font-size: 17px; text-align: right; "><font style="color: green;">Rp <?= number_format($dat['sisa_saldo'], 0, ',', '.'); ?></font></td>
                  </tr>
				  <tr>
                     <td colspan="2" style="text-align: left; font-size: 17px; color: maroon;">Total Pengeluaran :</td>
                     <td colspan="7"style="font-size: 17px; text-align: right; "><font style="color: green;">Rp <?= number_format($dat['total_pengeluaran'], 0, ',', '.'); ?></font></td>
                  </tr>
				  <tr>
                     <td colspan="2"style="text-align: left; font-size: 17px; color: maroon;">Saldo Akhir :</td>
                     <td colspan="7" style="font-size: 17px; text-align: center; "><font style="color: green;">Rp <?= number_format($dat['sisa_saldo'], 0, ',', '.'); ?></font></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

</div>

