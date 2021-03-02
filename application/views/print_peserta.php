<?php  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.png') ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.bootstrap4.min.css">

    <title>Sistem Pendataan Peserta Karyasiswa BP2SDM LHK</title>
  </head>
  <body>
  	<div class="container">
  		<center><img src="assets/img/logo.png" width="80" height="80"></center>
  		<h3 class="text-center">Data Peserta Karyasiswa</h3>
  		<h5 class="text-center mb-4">Pusat Diklat SDM LHK Bogor</h5>
  		<table class="table" id="example">
		  <thead class="thead-light">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">NIP</th>
		      <th scope="col">Nama</th>
		      <th scope="col">Universitas</th>
		      <th scope="col">Bidang Studi</th>
		      <th scope="col">Jenjang Studi</th>
		      <th scope="col">Lama Studi</th>
		      <th scope="col">Tahun Selesai</th>
		      <th scope="col">Keterangan</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $i = 1; foreach ($peserta as $p) : ?>
		    <tr>
		      <th scope="row"><?= $i++; ?></th>
		      <td><?= $p['nip']; ?></td>
		      <td><?= $p['nama']; ?></td>
		      <td><?= $p['nama_universitas']; ?></td>
		      <td><?= $p['bidang_studi']; ?></td>
		      <td><?= $p['jenjang_studi']; ?></td>
		      <td><?= $p['lama_studi']; ?></td>
		      <td><?= $p['tahun_selesai']; ?></td>
		      <td><?= $p['keterangan']; ?></td>
		    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
		<a href="<?= base_url('Peserta') ?>"><button class="btn btn-primary btn-sm mb-1">Kembali</button></a>
  	</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
    <script>
    	$(document).ready(function() {
		    var table = $('#example').DataTable( {
		        lengthChange: false,
		        buttons: ['print']
		    } );
		 
		    table.buttons().container()
		        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
		} );
    </script>
  </body>
</html>