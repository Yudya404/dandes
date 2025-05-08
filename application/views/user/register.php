<div class="container">

	<!-- Outer Row -->
	<div class="row justify-content-center">

		<div class="col-xl-6 col-lg-6 col-md-6">

			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						
						<div class="col-lg-12">
							<div class="p-5">
								
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Daftar/Registrasi</h1>
									<img src="<?= base_url('assets/img/kablebak.png'); ?>" style="width: 100px; height: 100px;">
								</div><br>
								<form class="user" action="<?= base_url('auth/register') ?>" method="POST">
									<div class="form-group">
										<input class="form-control form-control-sm mb-3" type="text" placeholder="Nama Lengkap" name="nama" id="nama" required>
									</div> 
									<div class="form-group">
										<input class="form-control form-control-sm mb-3" type="text" placeholder="Username" name="username" id="username" required>
									</div> 
									<div class="form-group">
										<input class="form-control form-control-sm mb-3" type="password" placeholder="Password" name="password" id="password" required>
									</div>
									<div class="form-group">
										<label>Level</label>
										<select class="form-control form-control-sm mb-3" name="level">
											<option value="admin">Admin</option>
											<option value="Ketua RT">Ketua RT</option>
											<option value="Wakil Ketua RT">Wakil Ketua RT</option>
											<option value="Bendahara">Bendahara</option>
											<option value="Sekertaris">Sekertaris</option>
											<option value="Pengurus">Pengurus</option>
										</select>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
									<button type="submit" name="register" class="btn btn-sm btn-primary">Lanjutkan</button>
								</div>
								</form>
							<br><center><p>Powered by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>WBS.COM</a></p></center>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>

</div>
