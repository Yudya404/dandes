<div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit User</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
            </div>
            <div class="card-body">
              <div class="col-md-6">
              <form role="form" action="" method="POST">
                   <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id user</label>
                    <input type="text" class="form-control" name="id_user" value="<?= $user['id_user']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $user['username']; ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" name="password" value="<?= $user['password']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" value="<?= $user['nama_lengkap']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan</label>
                    <select name="level" class="form-control">
                      <option value="Admin" <?php if($user['level']=="Admin"){echo "selected";} ?> class="form-control">Admin</option>
                      <option value="Ketua RT" <?php if($user['level']=="Ketua RT"){echo "selected";} ?> class="form-control">Ketua RT</option>
					  <option value="Wakil Ketua RT" <?php if($user['level']=="Wakil Ketua RT"){echo "selected";} ?> class="form-control">Wakil Ketua RT</option>
                      <option value="Bendahara" <?php if($user['level']=="Bendahara"){echo "selected";} ?> class="form-control">Bendahara</option>
					  <option value="Sekertaris" <?php if($user['level']=="Sekertaris"){echo "selected";} ?> class="form-control">Sekertaris</option>
					  <option value="Pengurus" <?php if($user['level']=="Pengurus"){echo "selected";} ?> class="form-control">Pengurus</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="update" class="btn btn-primary" value="Update">
                  </div>
              </form>
            </div>
            </div>
          </div>

</div>