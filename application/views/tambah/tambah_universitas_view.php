<!doctype html>
<html lang="en">
	<head>
  		<!-- Required meta tags -->
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  		<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tambah_universitas.css')?>">
    	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.png') ?>">
		<title>Sistem Pendataan Peserta Karya Ilmiah BP2SDM LHK</title>
  	</head>
  	<body>
    	<div class="container col-md-5 offset-md-3.6">
    		<center><img src="<?php echo base_url('assets/img/logo.png')?>" width="80" height="80"></center>
    		<h4><center>Sistem Pendataan Peserta Karyasiswa</center></h4>
    		<h4><center>BP2SDM LHK</center></h4>
    		<h5><center>Tambah Data Universitas</center></h5>
    		<div class="box-regis">
    			<form action="<?php echo site_url('universitas/tambah_universitas'); ?>" method="post">
    				<div class="form-group">
    					<label>Nama Universitas</label>
    					<input type="text" class="form-control" name="nama_universitas" placeholder="Nama Universitas" value="<?php echo set_value('nama_universitas')?>">
              <small class="form-text text-danger"><b><?= form_error('nama_universitas');?></b></small>
    				</div>
            <div class="form-group">
              <label for="negara">Negara</label>
              <select class="form-control" id="nama_negara" name="nama_negara">
                <?php foreach ($negara as $n) : ?>
                  <option value="<?php echo $n['negara'] ?>"><?php echo $n['negara'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
				    <div class="form-group">
      				<label>Alamat</label>
      				<input class="form-control" name="alamat" rows="2" placeholder="Alamat" value="<?php echo set_value('alamat')?>">
              <small class="form-text text-danger"><b><?= form_error('alamat');?></b></small>
  				  </div>
    				<center>
    					<button type="submit" class="btn btn-primary">Tambah</button>
    					<a href="../Universitas" class="btn btn-info">Cancel</a>
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