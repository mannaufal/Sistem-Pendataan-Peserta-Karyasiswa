<?php  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistem Pendataan Peserta Karyasiswa</title>
        <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.png') ?>">
        <link href="<?= base_url('assets/css/stylessb.css') ?>" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        
    </head>
    <body style="background-image: url('assets/img/379567-forest-green-nature-summer.jpg'); background-repeat: no-repeat;">
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <main>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5 transparent">
                                        <div class="card-header">
                                        	<center class="my-1"><img src="<?= base_url('assets/img/logo.png') ?>" width="80" height="80"></center>
                                        	<h4 class="text-center font-weight-light my-2"><strong>Sistem Pendataan Peserta Karyasiswa Pusat Diklat SDM LHK Bogor</strong>
                                        	</h4>
                                        	<h4 class="text-center font-weight-light my-2"><strong>Login Page</strong></h4>
                                        </div>
                                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
                                        <?= $this->session->flashdata('message'); ?>
                                        <div class="card-body">
                                            <form action="<?= base_url('User') ?>" method="post">
                                                <div class="form-group">
                                                    <label class="mb-1 ml-2">Username</label>
                                                    <input class="form-control py-4" id="username" type="text" name="username" placeholder="Enter Username" value="<?= set_value('username') ?>" />
                                                    <?= form_error('username','<small class="form-text text-danger pl-2"><b>','</b></small>');?>
                                                </div>
                                                <div class="form-group">
                                                    <label class="mb-1 ml-2" for="inputPassword">Password</label>
                                                    <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter password" />
                                                    <?= form_error('password','<small class="form-text text-danger pl-2"><b>','</b></small>');?>
                                                </div>
                                                <hr>
                                                <div class="form-group mt-4 mb-0">
                                                	<center>
                                                		<button class="btn btn-primary btn-block btn-rr" type="submit">Sign In</button>
                                                	</center>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/js/sweetalert2.all.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/myscript.js') ?>"></script>
        <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
    </body>
</html>
