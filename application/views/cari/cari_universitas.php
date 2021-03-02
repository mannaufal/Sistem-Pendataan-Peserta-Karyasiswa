<?php  ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Sistem Pendataan Peserta Karya Ilmiah BP2SDM LHK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A simple Calendar in JS Vanilla">
    <meta name="author" content="https://github.com/marssola/vanilla-calendar">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.png') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/home.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/vanilla-calendar-min.css')?>">
    <script src="<?php echo base_url().'assets/js/vanilla-calendar-min.js'?>"></script>
  </head>
  <body>
    <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          			<i class="fa fa-bars"></i>
	          			<span class="sr-only">Toggle Menu</span>
	        		</button>
        		</div>
        		<div class="image-logo">
        			<img src="<?php echo base_url('assets/img/logo.png')?>" width="70px" height="70px">
        		</div>
	  			<h1><a class="logo md-4">Sistem Pendataan Peserta Karyasiswa BP2SDM LHK</a></h1>
        		<ul class="list-unstyled components mb-5">
          			<li>
            			<a href="<?php echo base_url('Home') ?>"><span class="fa fa-home md-4"></span> Homepage</a>
          			</li>
                <li>
                  <a href="<?php echo base_url('Peserta') ?>"><span class="fa fa-user md-4"></span> Peserta Karyasiswa</a>
                </li>
          			<li>
                  <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="active"><span class="fa fa-database md-4"></span> Data</a>
                  <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                      <a href="<?php echo base_url('Bidang_studi') ?>">Data Bidang Studi</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('Jenjang_studi') ?>">Data Jenjang Studi</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('Negara') ?>">Data Negara</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('Surat_keterangan') ?>">Data SK</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('Sktb') ?>">Data SKTB</a>
                    </li>
                    <li class="active">
                      <a href="<?php echo base_url('Universitas') ?>">Data Universitas</a>
                    </li>
                  </ul>
                </li>
          			<li>
            			<a href="<?php echo base_url('User/logout') ?>"><span class="fa fa-sign-out md-4"></span> Log Out</a>
          			</li>
        		</ul>
    		</nav>
        <!-- Page Content  -->
      		<div id="content" class="p-4 p-md-5 pt-5">
        		<div class="container md-4">
              <nav class="navbar navbar-light bg-transparent">
                <a href="<?php echo site_url('Universitas/tambah_universitas_view') ?>"><button type="button" class="btn btn-primary">Tambah Data</button></a>
               <form action="<?= site_url('Universitas/cari_universitas_view') ?>" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" name="keyword" placeholder="Cari Data">
                  <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Cari</button>
                  </div>
                </div>
              </form>
              </nav>
              <div class="table-responsive">
          			<table class="table table-hover">
                  <thead>
                    <tr class="table-info">
                      <th scope="col">No</th>
                      <th scope="col">Nama Universitas</th>
                      <th scope="col">Negara</th>
                      <th scope="col">Alamat</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <?php foreach ($univ as $univ) : ?>
                  <tbody>
                    <tr>
                      <td><?php echo ++$start; ?></td>
                      <td><?php echo $univ['nama_universitas']; ?></td>
                      <td><?= $univ['nama_negara'];  ?></td>
                      <td><?= $univ['alamat'];  ?></td>
                      <td>
                        <a href="<?php echo site_url('Universitas/ubah_universitas/'.$univ['id']);?>" class="btn-sm btn-info">Edit</a>
                      </td>
                      <td>
                       <a href="<?php echo site_url('Universitas/hapus_universitas/'.$univ['id']);?>" class ="btn-sm btn-danger tombol-hapus" onclick="return confirm('Data Ingin Dihapus?');">Delete</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  <?php if (empty ($univ)) : ?>
                  <div class="alert alert-danger" role="alert">
                    <strong>Data Tidak Ditemukan!</strong>
                  </div>
                <?php endif ?>
                  </tbody>
                </table>
              </div>
              <!-- Pagination !-->
              <?php echo $this->pagination->create_links(); ?>
              <center>
                <a href="<?= site_url('/Universitas') ?>" class="btn btn-primary btn-sm">Back</a>
              </center>
        		</div>
        		<!-- End Of Container !-->
        	</div>
      		<!-- End Of Content !-->
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
		    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/popper.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
  </body>
</html>