<!doctype html>
<html lang="en">
	<head>
  		<!-- Required meta tags -->
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  		<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tambah_sktb.css')?>">
    	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.png') ?>">
		<title>Sistem Pendataan Peserta Karya Ilmiah BP2SDM LHK</title>
  	</head>
  	<body>
    	<div class="container col-md-5 offset-md-3.6">
    		<center><img src="<?php echo base_url('assets/img/logo.png')?>" width="80" height="80"></center>
    		<h4><center>Sistem Pendataan Peserta Karyasiswa</center></h4>
    		<h4><center>BP2SDM LHK</center></h4>
    		<h5><center>Update Data SKTB</center></h5>
    		<div class="box-regis">
    			<form action="" method="post">
    				<div class="form-group">
    					<label>NIP</label>
    					<input type="text" class="form-control" name="nip" placeholder="Nomor Induk Pegawai" value="<?php echo $sktb_1['nip'] ?>" readonly>
              <small class="form-text text-danger"><b><?= form_error('nip') ?></b></small>
    				</div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" name="nama" value="<?= $sktb_1['nama']; ?>">
              <small class="form-text text-danger"><b><?= form_error('nama') ?></b></small>
            </div>
    				<div class="form-group">
    					<label>No.SKTB</label>
    					<input type="text" class="form-control" name="no_sktb" placeholder="No.SKTB" value="<?php echo $sktb_1['no_sktb']; ?>">
              <small class="form-text text-danger"><b><?= form_error('no_sktb') ?></b></small>
    				</div>
    				<div class="form-group">
        			<label>Mulai Pendidikan</label>
        			<input class="form-control" type="date" name="mulai_pendidikan" value="<?php echo $sktb_1['mulai_pendidikan']; ?>" required="" placeholder="Mulai Pendidikan">
              <small class="form-text text-danger"><b><?= form_error('mulai_pendidikan') ?></b></small>
      			</div>
    				<div class="form-group">
      				<label>Rencana Selesai</label>
      				<input class="form-control" type="date" name="rencana_selesai" value="<?php echo $sktb_1['rencana_selesai']; ?>" required="" placeholder="Rencana Selesai">
              <small class="form-text text-danger"><b><?= form_error('rencana_selesai') ?></b></small>
    				</div>
         		<div class="form-group">
           			<label>No.SKTB Perpanjangan 1</label>
            		<input class="form-control" type="text" name="no_sktb_perpanjangan_1" value="<?php echo $sktb_1['no_sktb_perpanjangan_1']; ?>" placeholder="No.SKTB Perpanjangan 1">
                <small class="form-text text-danger"><b><?= form_error('no_sktb_perpanjangan_1') ?></b></small>
          	</div>
          	<div class="form-group">
            	<label>Mulai Perpanjangan 1</label>
            	<input class="form-control" type="date" name="mulai_perpanjangan_1" value="<?php echo $sktb_1['mulai_perpanjangan_1']; ?>" placeholder="Mulai Perpanjangan 1">
              <small class="form-text text-danger"><b><?= form_error('mulai_perpanjangan_1') ?></b></small>
          	</div>
          	<div class="form-group">
            	<label>Selesai Perpanjangan 1</label>
            	<input class="form-control" type="date" name="selesai_perpanjangan_1" value="<?php echo $sktb_1['selesai_perpanjangan_1']; ?>" placeholder="Rencana Selesai">
              <small class="form-text text-danger"><b><?= form_error('selesai_perpanjangan_1') ?></b></small>
          	</div>
          	<div class="form-group">
            	<label>No.SKTB Perpanjangan 2</label>
            	<input class="form-control" type="text" name="no_sktb_perpanjangan_2" value="<?php echo $sktb_1['no_sktb_perpanjangan_2']; ?>" placeholder="No.SKTB Perpanjangan 1">
              <small class="form-text text-danger"><b><?= form_error('no_sktb_perpanjangan_2') ?></b></small>
          	</div>
          	<div class="form-group">
            	<label>Mulai Perpanjangan 2</label>
            	<input class="form-control" type="date" name="mulai_perpanjangan_2" value="<?php echo $sktb_1['mulai_perpanjangan_2']; ?>" placeholder="Mulai Perpanjangan 1">
              <small class="form-text text-danger"><b><?= form_error('mulai_perpanjangan_2') ?></b></small>
          	</div>
          	<div class="form-group">
            	<label>Selesai Perpanjangan 2</label>
            	<input class="form-control" type="date" name="selesai_perpanjangan_2" value="<?php echo $sktb_1['selesai_perpanjangan_2']; ?>" placeholder="Rencana Selesai">
              <small class="form-text text-danger"><b><?= form_error('selesai_perpanjangan_2') ?></b></small>
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