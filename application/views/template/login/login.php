<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Page</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-danger">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center bg-danger">

            <div class="col-lg-6 bg-gradient-danger">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row" style="background: whitesmoke;">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center border-bottom-danger mb-5">
                                        <h1 class="h4 text-gray-900 mb-4">
                                        Selamat Datang di Halaman Login</h1>
                                        <img src="<?= $logo;?>" class="img-fluid" alt="Responsive image" style="width:100%;border:1px solid red;">
                                    </div>
                                    <!--<b><span style="color: black;">
                                        Username: ST9899
                                        <br/>
                                        Password: 1234
                                        <br/>
                                    </span></b>-->
                                    <b><span class="text-danger"><?php echo $this->session->flashdata('error');?></span></b>
                                    <form class="user" method="post" action="<?= base_url();?>HalamanLogin/login_validation">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="InputUsername" name="username" placeholder="Enter Username..." value="<?= set_value('username'); ?>">
                                            <span class="text-danger"><?= form_error('username');?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="InputPassword" name="password" placeholder="Password">
                                            <span class="text-danger"><?= form_error('password');?></span>
                                        </div>
                                        <button type="submit" class="btn-user btn-block" style="background: red;">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>