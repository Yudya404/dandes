<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data RT</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data RT</h6>
            </div>
            <div class="card-body">
              <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah RT</button>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No RT</th>
                      <th>Alamat</th>
                      <th>Nama Ketua RT</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($desa as $dat) : ?>
                    <tr>
                      <td><?= $dat['nama_desa']; ?></td>
                      <td><?= $dat['alamat']; ?></td>
                      <td><?= $dat['kepala_desa']; ?></td>
                      <td> 
                          <a href="<?= base_url('Desa/hapusdesa/') . $dat['id_desa']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                          <a href="<?= base_url('Desa/editdesa/') . $dat['id_desa']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah RT</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('Desa/tambahdesa') ?>" method="POST">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="No RT" name="nama_desa" id="nama_desa" required>
                  </div> 
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Alamat" name="alamat" id="alamat" required>
                  </div> 
                 <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama Ketua RT" name="kepala_desa" id="kepala_desa" required>
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