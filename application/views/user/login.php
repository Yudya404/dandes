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
                    <h1 class="h4 text-gray-900 mb-4">Sistem Informasi Monitoring Dana (SIMoDa)</h1>
                    <img src="<?= base_url('assets/img/kablebak.png'); ?>" style="width: 100px; height: 100px;">
                  </div>
				  <br>
				   <div class="text-center">
                    <a href="<?= base_url('Welcome/halamanberanda/'); ?>" class="btn btn-primary btn-user btn-block">Website Publik</a>
                  </div>
				  <br>
				  <div class="text-center">
                    <a href="" class="btn btn-primary btn-user btn-block" data-toggle="modal" data-target="#exampleModal1">Login (Khusus Anggota)</a>
                  </div>
                  <!--<form class="user" action="<?= base_url('auth/login'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" name="username" value="admin" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" value="admin" required>
                    </div>
                   
                    <input type="submit" name="login" class="btn btn-primary btn-user btn-block" value="Login">
                    <hr>
                   
                  </form>-->
					<br><center><p>Powered by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>WBS.COM</a></p></center>
									
                  <hr>
                  
                  <div class="text-center">
                    <a href="" class="small" data-toggle="modal" data-target="#exampleModal">Bantuan Masuk?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Bantuan Masuk</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <img src= "<?= base_url('assets/img/helpdesk.jpg'); ?>" style="width:100%; height:80%; display:block; margin:auto;" alt="Helpdesk SIMoDa" />
            </div>
            </form>
         </div>
      </div>
   </div>
   <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel1">Login Anggota</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form class="user" action="<?= base_url('auth/login'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" name="username" value="admin" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" value="admin" required>
                    </div>
                   
                    <input type="submit" name="login" class="btn btn-primary btn-user btn-block" value="Masuk">
                    <hr>
                   
                  </form>
         </div>
      </div>
   </div>