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
		<title>Sistem Pendataan Peserta Karyasiswa Pusat Diklat SDM LHK</title>
  	</head>
  	<body>
    	<div class="container col-md-5 offset-md-3.6">
    		<center><img src="<?php echo base_url('assets/img/logo.png')?>" width="80" height="80"></center>
    		<h4><center>Sistem Pendataan Peserta Karyasiswa</center></h4>
    		<h4><center>Pusat Diklat SDM LHK</center></h4>
    		<h5><center>Edit Data Peserta</center></h5>
    		<div class="box-regis">
        <form action="" method="post">
				  <div class="form-group">
					 <label>NIP</label>
          		<input type="text" class="form-control" name="nip" value="<?= $peserta['nip'];  ?>" placeholder="NIP" readonly>
          		<small class="form-text text-danger"><b><?= form_error('nip') ?></b></small>
				  </div>
				  <div class="form-group">
					 <label>Nama</label>
          		<input type="text" class="form-control" name="nama" value="<?= $peserta['nama']; ?>" placeholder="Nama">
          		<small class="form-text text-danger"><b><?= form_error('nama') ?></b></small>
				  </div>
				  <div class="form-group">
          	<label for="nama_universitas">Universitas</label>
          	<select class="form-control" id="nama_universitas" name="nama_universitas">
            	<?php foreach ($univ as $n) : ?>
              		<?php if ($n['nama_universitas'] == $peserta['nama_universitas']) : ?>
                    <option value="<?= $n['nama_universitas'] ?>" selected><?= $n['nama_universitas']  ?></option>
                  <?php else : ?>
                    <option value="<?= $n['nama_universitas'] ?>"><?= $n['nama_universitas']  ?></option>
                <?php endif; ?>
            	<?php endforeach; ?>
          	</select>
        	</div>
        	<div class="form-group">
          	<label for="bidang_studi">Bidang Studi</label>
          			<select class="form-control" id="bidang_studi" name="bidang_studi">
            			<?php foreach ($bidang as $b) : ?>
              				<?php if ($b['nama_bidang_studi'] == $peserta['bidang_studi']) : ?>
                        <option value="<?= $b['nama_bidang_studi'] ?>" selected><?= $b['nama_bidang_studi'] ?></option>
                      <?php else : ?>
                        <option value="<?= $b['nama_bidang_studi'] ?>"><?= $b['nama_bidang_studi'] ?></option>
                      <?php endif; ?>
            			<?php endforeach; ?>
          			</select>
        		</div>
        		<div class="form-group">
          			<label for="jenjang_studi">Jenjang Studi</label>
          			<select class="form-control" id="jenjang_studi" name="jenjang_studi">
            			<?php foreach ($jenjang as $j) : ?>
                    <?php if ($j['nama_jenjang_studi'] == $peserta['jenjang_studi']) : ?>
                    <option value="<?= $j['nama_jenjang_studi']; ?>" selected><?= $j['nama_jenjang_studi']; ?></option>
                    <?php else : ?>
                      <option value="<?= $j['nama_jenjang_studi']; ?>"><?= $j['nama_jenjang_studi']; ?></option>
                    <?php endif; ?>
            			<?php endforeach; ?>
          			</select>
        		</div>
        		<div class="form-group">
          			<label>Lama Studi</label>
          			<input type="text" class="form-control" name="lama_studi" value="<?= $peserta['lama_studi'];?>" placeholder="Lama Studi">
          			<small class="form-text text-danger"><b><?= form_error('lama_studi') ?></b></small>
        		</div>
        		<div class="form-group">
          			<label>Selesai</label>
          			<input type="text" class="form-control" value="<?= $peserta['tahun_selesai'];?>" name="tahun_selesai">
          			<small class="form-text text-danger"><b><?= form_error('tahun_selesai') ?></b></small>
        		</div>
        		<div class="form-group">
          			<label>Keterangan</label>
          			<select class="form-control" id="keterangan" name="keterangan">
            			<?php foreach ($ket as $k) : ?>
                    <?php if ($k == $peserta['keterangan']) : ?>
                      <option value="<?= $k; ?>" selected><?= $k; ?></option>
                    <?php else : ?>
                      <option value="<?= $k; ?>"><?= $k; ?></option>
                  <?php endif ?>
                  <?php endforeach ?>
          			</select>
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