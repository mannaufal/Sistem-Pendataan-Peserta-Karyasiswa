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
    		<h5><center>Update Data Universitas</center></h5>
    		<div class="box-regis">
    			<form action="" method="post">
    				<div class="form-group">
    					<label>Nama Universitas</label>
    					<input type="text" class="form-control" name="nama_universitas" id="nama_universitas" value="<?php echo $univ['nama_universitas'];?>" placeholder="Nama Universitas">
              <small class="form-text text-danger"><b><?= form_error('nama_universitas') ?></b></small>
    				</div>
            <div class="form-group">
              <label for="negara">Negara</label>
              <select class="form-control" id="nama_negara" name="nama_negara">
                <?php foreach ($negara as $n) : ?>
                  <?php if ($n['negara'] == $univ['nama_negara']) : ?>
                    <option value="<?= $n['negara'] ?>" selected><?= $n['negara'] ?></option>
                  <?php else : ?>
                    <option value="<?= $n['negara'] ?>" ><?= $n['negara'] ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>
				    <div class="form-group">
      				<label>Alamat</label>
      				<input class="form-control" name="alamat" id="alamat" value="<?php echo $univ['alamat'];?>" placeholder="Alamat">
              <small class="form-text text-danger"><b><?= form_error('alamat') ?></b></small>
  				  </div>
            <input type="hidden" name="id" value="<?php echo $univ['id']?>">
				    <center>
					   <button type="submit" class="btn btn-primary">Ubah</button>
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