<!doctype html>
<html lang="en">
	<head>
  		<!-- Required meta tags -->
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  		<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tambah_sk.css')?>">
    	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.png') ?>">
		<title>Sistem Pendataan Peserta Karya Ilmiah BP2SDM LHK</title>
  	</head>
  	<body>
    	<div class="container col-md-5 offset-md-3.6">
    		<center><img src="<?php echo base_url('assets/img/logo.png')?>" width="80" height="80"></center>
    		<h4><center>Sistem Pendataan Peserta Karyasiswa</center></h4>
    		<h4><center>BP2SDM LHK</center></h4>
    		<h5><center>Tambah Data Surat Keterangan</center></h5>
    		<div class="box-regis">
    			<form action="" method="post">
    				<div class="form-group">
    					<label>NIP</label>
    					<input type="text" class="form-control" name="nip" placeholder="NIP" value="<?php echo $sk['nip']; ?>" readonly>
              <small class="form-text text-danger"><b><?= form_error('nip') ?></b></small>
    				</div>
            <div class="form-group">
              <label>NIP</label>
              <input type="text" class="form-control" name="nama" placeholder="NIP" value="<?php echo $sk['nama']; ?>">
              <small class="form-text text-danger"><b><?= form_error('nama') ?></b></small>
            </div>
    				<div class="form-group">
    					<label>SK Setjen</label>
    					<input type="text" class="form-control" name="sk_setjen" placeholder="SK Setjen" value="<?php echo $sk['sk_setjen']; ?>">
              <small class="form-text text-danger"><b><?= form_error('sk_setjen') ?></b></small>
    				</div>
				    <div class="form-group">
      				<label>SK Menteri</label>
      				<input class="form-control" name="sk_menteri" value="<?php echo $sk['sk_menteri']; ?>" placeholder="SK Menteri">
              <small class="form-text text-danger"><b><?= form_error('sk_menteri') ?></b></small>
  				  </div>
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