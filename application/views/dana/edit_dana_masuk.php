<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Edit Dana Masuk</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Dana Masuk</h6>
    </div>
    <div class="card-body">
      <div class="col-md-6">
        <form role="form" action="" method="POST">
          <div class="form-group" hidden>
            <label for="exampleInputEmail1">No Dana Masuk</label>
            <input type="text" class="form-control" name="id_dana_masuk" value="<?= $editdanamasuk['id_dana_masuk']; ?>">
          </div>
          <div class="form-group">
            <label>Tanggal Masuk</label>
            <input type="date" class="form-control" name="tgl_masuk" value="<?= $editdanamasuk['tgl_masuk']; ?>">
          </div>
          <div class="form-group">
            <label>Pemasukan Dari</label>
            <select class="form-control" name="id_instansi"> <!-- Perbaikan: gunakan name "id_instansi" -->
              <?php foreach ($instansi as $dat) { ?>
                <option value="<?= $dat['id_instansi']; ?>" <?php if ($dat['id_instansi'] == $editdanamasuk['id_instansi']) { echo "selected"; } ?>><?= $dat['nama_instansi']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Jenis Dana</label>
            <input type="text" class="form-control" name="lokasi" value="<?= $editdanamasuk['lokasi']; ?>">
          </div>
          <div class="form-group">
            <label>Jumlah Dana</label>
            <input type="text" class="form-control" name="jml_dana" value="<?= $editdanamasuk['jml_dana']; ?>">
          </div>
          <div class="form-group">
            <input type="submit" name="update" class="btn btn-primary" value="Update">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
