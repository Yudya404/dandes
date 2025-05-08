<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Dana Masuk</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Dana Masuk</h6>
            </div>
            <div class="card-body">
              <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Dana masuk</button>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
					  <th>No</th>
                      <th>Tanggal Masuk</th>
                      <th>Pemasukan Dari</th>
					  <th>Jenis Dana</th>
                      <th>Jumlah Penerimaan</th>
					  <?php if($this->session->userdata('level')=='admin'){ ?>
                      <th>Aksi</th>
					  <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
					$no = 1; // Inisialisasi nomor urut
					foreach ($danamasuk as $dat) : 
				  ?>
                    <tr>
					  <td><?php echo $no++; ?></td>
                      <td><?= $dat['tgl_masuk']; ?></td>
                      <td><?= $dat['nama_instansi']; ?></td>
					  <td><?= $dat['lokasi']; ?></td>
                      <td style="font-size: 17px; text-align: right;">Rp <?= number_format($dat['jml_dana'] ?? 0, 0, ',', '.'); ?></td>
					  <?php if($this->session->userdata('level')=='admin'){ ?>
                      <td> 
                          <a href="<?= base_url('Dana_masuk/hapusdanamasuk/') . $dat['id_dana_masuk']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
						  <a href="<?= base_url('Dana_masuk/editdanamasuk/') . $dat['id_dana_masuk']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                      </td>
					  <?php } ?>
                    </tr>
                  <?php endforeach; ?> 
                  </tbody>
				  <tr>
                     <td colspan="4" style="text-align: left; font-size: 17px; color: maroon;">Total Penerimaan :</td>
                     <td style="font-size: 17px; text-align: right; "><font style="color: green;">Rp <?= number_format($dat['sisa_saldo'], 0, ',', '.'); ?></font></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah Dana Masuk</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('Dana_masuk/tambahdanamasuk') ?>" method="POST" enctype="multipart/form-data">
                   <div class="form-group">
                    <label>Tanggal Masuk</label>
                     <input class="form-control form-control-sm mb-3" type="date" name="tgl_masuk" id="tgl_masuk" required>
                  </div>
                  <div class="form-group">
                    <label>Pemasukan Dari</label>
                     <select class="form-control" name="id_instansi">
                      <?php foreach ($instansi as $dat) { ?>
                        <option value="<?= $dat['id_instansi']; ?>"><?= $dat['nama_instansi']; ?></option>
                      <?php } ?>
                     </select>
                  </div>
				  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Jenis Dana" name="lokasi" id="lokasi" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Jumlah Pemasukan" name="jml_dana" id="jml_dana" required>
                  </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
               <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>