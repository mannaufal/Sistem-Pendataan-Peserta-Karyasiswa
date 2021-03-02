<!doctype html>
<html lang="en">
	<head>
  		<!-- Required meta tags -->
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  		<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tambah_jenjang_studi.css')?>">
    	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.png') ?>">
		<title>Sistem Pendataan Peserta Karya Ilmiah BP2SDM LHK</title>
  	</head>
  	<body>
    	<div class="container col-md-5 offset-md-3.6">
    		<center><img src="<?php echo base_url('assets/img/logo.png')?>" width="80" height="80"></center>
    		<h4><center>Sistem Pendataan Peserta Karyasiswa</center></h4>
    		<h4><center>BP2SDM LHK</center></h4>
    		<h5><center>Tambah Data Bidang Studi</center></h5>
    		<div class="box-regis">
    			<form action="" method="post">
				<div class="form-group">
					<label>Bidang Studi</label>
					<input type="text" id="nama_bidang_studi" class="form-control" name="nama_bidang_studi" value="<?php echo $bidang['nama_bidang_studi'] ?>" placeholder="Nama Bidang Studi">
          <small class="form-text text-danger"><b><?= form_error('nama_bidang_studi');?></b></small>
				</div>
				<input type="hidden" value="<?php echo $bidang['id']; ?>" name="id">
				<center>
					<button type="submit" class="btn btn-primary">Update</button>
					<a href="../" class="btn btn-info">Cancel</a>
				</center>
			</form>
    		</div>
    	</div>

    	<!-- Optional JavaScript -->
    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>