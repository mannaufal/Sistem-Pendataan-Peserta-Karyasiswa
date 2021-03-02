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
          			<li class="active">
            			<a href="<?php echo base_url('Home') ?>"><span class="fa fa-home md-4"></span> Homepage</a>
          			</li>
                <li>
                  <a href="<?php echo base_url('Peserta')?>"><span class="fa fa-user md-4"></span> Peserta Karyasiswa</a>
                </li>
          			<li>
                  <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class=""><span class="fa fa-database md-4"></span> Data</a>
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
                    <li>
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
        			<!-- Carousel Begin !-->
        			<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
  						<ol class="carousel-indicators">
    						<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    						<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    						<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  						</ol>
  						<div class="carousel-inner">
    						<div class="carousel-item active">
      							<img src="assets/img/banner-1.jpg" class="d-block w-100" alt="..." width="300px" height="400px">
      							<div class="carousel-caption d-none d-md-block">
      							</div>
    						</div>
    						<div class="carousel-item">
      							<img src="assets/img/banner-2.jpg" class="d-block w-100" alt="..." width="300px" height="400px">
      							<div class="carousel-caption d-none d-md-block">
      							</div>
    						</div>
    						<div class="carousel-item">
      							<img src="assets/img/aula-4.jpg" class="d-block w-100" alt="..." width="300px" height="400px">
      							<div class="carousel-caption d-none d-md-block">
      							</div>
    						</div>
  						</div>
  						<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    						<span class="sr-only">Previous</span>
  						</a>
  						<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    						<span class="carousel-control-next-icon" aria-hidden="true"></span>
    						<span class="sr-only">Next</span>
  						</a>
					</div>
					<div class="box">
        			<div class="box-one">
                  <center><h3><span>Sekapur Sirih</span></h3><br><img src="assets/img/Novia-Widyax635x356.png"width="335" height="186"></center><br>
        				  <p align="justify">Situs ini dimaksudkan untuk menunjang aktifitas kegiatan sebuah lembaga pemerintah, pembangunan dan pelayanan menuju terwujudnya e-Government</p>
        				</div>
        				<div class="box-two">
        					<p align="justify">Selamat datang di website Sikahut (Sistem Informasi Karyasiswa Kehutanan). Sistem ini terus dikembangkan sesuai dengan informasi yang terupdate, oleh karena itu saran dan kritikan sangat diperlukan untuk perbaikan dimasa yang akan datang. Semoga dengan kehadiran sistem ini menjadikan Pusat Diklat SDM LHK menjadi lebih maju.</p>
        				</div>
        			</div>
              <!-- Begin Of Footer !-->
              <div class="footer-home">
                  <div class="footer-one">
                    <div id="box-one-one">
                      <div id="box-pic-one">
                        <img src="assets/img/pin.png" width="50" height="50">
                      </div>
                      <div id="box-text-one">
                        Jln. Mayjen Ishak Juarsa Gunung Batu 141 Bogor 16118
                      </div>
                    </div>
                    <div id="box-two">
                      <div id="box-pic-two">
                        <img src="assets/img/phone.png" width="45" height="45">
                      </div>
                      <div id="box-text-two">
                        (0251) 8337742<br>
                        (0251) 8313622
                      </div>
                    </div>
                    <div id="box-three">
                      <div id="box-pic-three">
                        <img src="assets/img/mail.png" width="45" height="45">
                      </div>
                      <div id="box-text-three">
                        info@bp2sdmk.dephut.go.id
                      </div>
                    </div>
                  </div>
                  <div class="footer-two">
                    <div id="box-one-two">
                      <center>FIND US!</center>
                    </div>
                    <div class="footer-two-two">
                      <div id="pic-two">
                        <img src="assets/img/facebook.png" width="60" height="60">
                      </div>
                      <div id="pic-three">
                        <img src="assets/img/g+.png" width="50" height="50">
                      </div>
                      <div id="pic-four">
                        <img src="assets/img/twitter.png" width="50" height="50">
                      </div>
                    </div>
                  </div>
                  <div class="footer-three">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4193820154865!2d106.77403671431397!3d-6.594684966299298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5aec350e44f%3A0x13ac85ce8d7a961c!2sPusat%20Diklat%20SDM%20Lingkungan%20Hidup%20Dan%20Kehutanan!5e0!3m2!1sen!2sid!4v1596890873332!5m2!1sen!2sid" width="250" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>
              </div>
              <div class="box-copyright">
                  <center><p>Copyright &copy; 2020 BP2SDM LHK</p></center>
              </div>
              <!-- End Of Footer !-->
        		</div>
        		<!-- End Of Container !-->
        	</div>
      		<!-- End Of Content !-->
		</div>
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/popper.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
  </body>
</html>