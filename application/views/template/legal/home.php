<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        Legal
    </title>

    <!-- Custom fonts for this template-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <link href="<?= base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url();?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="<?= base_url();?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url();?>Dashboard">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Legal Admin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url();?>Dashboard">
                    <i class="fas fa-fw fa-desktop"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-file-contract"></i>
                    <span>Perjanjian</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu :</h6>
                        <a class="collapse-item" href="<?= base_url() ;?>Leasing">Leasing </a>
                        <a class="collapse-item" href="<?= base_url() ;?>Asuransi">Asuransi</a>
                        <a class="collapse-item" href="<?= base_url() ;?>Sewa">Sewa Unit</a>
                        <a class="collapse-item" href="<?= base_url() ;?>Jualbeli">Jual Beli</a>
                        <a class="collapse-item" href="<?= base_url() ;?>PerjanjianUmum">Umum</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Perizinan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu :</h6>
                        <a class="collapse-item" href="<?= base_url("KLH");?>">KLH</a>
                        <a class="collapse-item" href="<?= base_url("B3");?>">B3</a>
                        <a class="collapse-item" href="<?= base_url("STNK");?>">STNK</a>
                        <a class="collapse-item" href="<?= base_url("KIR");?>">KIR</a>
                        <a class="collapse-item" href="<?= base_url("PerizinanUmum");?>">Umum</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Aset -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAset" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-trophy"></i>
                    <span>Aset</span>
                </a>
                <div id="collapseAset" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu :</h6>
                        <a class="collapse-item" href="<?= base_url() ;?>AsetBergerak">Aset Bergerak</a>
                        <a class="collapse-item" href="<?= base_url() ;?>AsetTidakBergerak">Aset Tidak Bergerak</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                View
            </div>

            <!-- Nav Item - Purchase -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ;?>LogActivity">
                    <i class="fas fa-fw fa-th-list"></i>
                    <span>Log Activity</span>
                </a>
            </li>

            <!-- Pedoman -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url();?>Pedoman">
                    <i class="fas fa-fw fa-spell-check"></i>
                    <span>Pedoman</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url();?>Pengaturanprofil">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pengaturan Profil</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
                    <span>Log Out</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="background-image: url(<?= base_url();?>assets/img/default_img/default_bg.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-gradient-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <img src="<?= base_url(); ?>assets/img/logo_perusahaan/L_Rasita.png" class="img-fluid my-8" alt="Responsive image" style="width:10%;">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 medium"><?= $user['username']?>, <?= $user['nama'];?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url();?>assets/img/default_img/profil2.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url();?>Pengaturanprofil">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Pengaturan
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Content Body -->
                <div class="container mx-auto mb-3 mt-3">
                    <div class="container mx-auto  bg-gradient-danger">

                        <!-- Page Heading -->
                        <div class="d-flex mb-4  border-bottom-dark align-center" style="background-color: success;">
                            <h1 class=""><img src="<?= base_url(); ?>assets/img/logo_perusahaan/welxome.png" class="img-md" style="width:30%;" alt=" Responsive image"></h1>

                        </div>

                        <!-- Content Row -->
                        <div class="row">
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 text-xs font-weight-bold text-primary text-uppercase mb-1">Leasing</div>
                                                <div class="h7 mb-0 font-weight-bold text-success"><a class="btn-hover ml-5" href="<?= base_url(); ?>/Leasing">Lanjutkan<i class="fa fa-arrow-alt-circle-right ml-1"></i></a></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-handshake fa-2x text-gray-300" style="color:purple!important;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 text-xs font-weight-bold text-success text-uppercase mb-1">Asuransi</div>
                                                <div class="h7 mb-0 font-weight-bold text-gray-800"><a class="btn-hover ml-5" href="<?= base_url(); ?>/Asuransi">Lanjutkan<i class="fa fa-arrow-alt-circle-right ml-1"></i></a></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-car-crash fa-2x text-gray-300" style="color:green!important;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 text-xs font-weight-bold text-info text-uppercase mb-1">Sewa Unit</div>
                                                <div class="h7 mb-0 font-weight-bold text-gray-800"><a class="btn-hover ml-5" href="<?= base_url(); ?>/Sewa">Lanjutkan<i class="fa fa-arrow-alt-circle-right ml-1"></i></a></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-truck fa-2x text-gray-300" style="color:darkblue!important;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 text-xs font-weight-bold text-warning text-uppercase mb-1">Jual Beli</div>
                                                <div class="h7 mb-0 font-weight-bold text-gray-800"><a class="btn-hover ml-5" href="<?= base_url(); ?>/Jualbeli">Lanjutkan<i class="fa fa-arrow-alt-circle-right ml-1"></i></a></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-money-bill-wave fa-2x text-gray-300" style="color:orange!important;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->
                        <div class="row">
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 text-xs font-weight-bold text-primary text-uppercase mb-1">KLH</div>
                                                <div class="h7 mb-0 font-weight-bold text-gray-800"><a class="btn-hover ml-5" href="<?= base_url(); ?>/KLH">Lanjutkan<i class="fa fa-arrow-alt-circle-right ml-1"></i></a></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-file-pdf fa-2x text-gray-300" style="color:purple!important;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 text-xs font-weight-bold text-success text-uppercase mb-1">B3</div>
                                                <div class="h7 mb-0 font-weight-bold text-gray-800"><a class="btn-hover ml-5" href="<?= base_url(); ?>/B3">Lanjutkan<i class="fa fa-arrow-alt-circle-right ml-1"></i></a></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-file-pdf fa-2x text-gray-300" style="color:green!important;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 text-xs font-weight-bold text-info text-uppercase mb-1">STNK</div>
                                                <div class="h7 mb-0 font-weight-bold text-gray-800"><a class="btn-hover ml-5" href="<?= base_url(); ?>/STNK">Lanjutkan<i class="fa fa-arrow-alt-circle-right ml-1"></i></a></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-file-pdf fa-2x text-gray-300" style="color:darkblue!important;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 text-xs font-weight-bold text-warning text-uppercase mb-1">KIR</div>
                                                <div class="h7 mb-0 font-weight-bold text-gray-800"><a class="btn-hover ml-5" href="<?= base_url(); ?>/KIR">Lanjutkan<i class="fa fa-arrow-alt-circle-right ml-1"></i></a></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-file-pdf fa-2x text-gray-300" style="color:orange!important;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-5">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 text-xs font-weight-bold text-primary text-uppercase mb-1">Aset Bergerak</div>
                                                <div class="h7 mb-0 font-weight-bold text-gray-800"><a class="btn-hover ml-5" href="<?= base_url(); ?>/AsetBergerak">Lanjutkan<i class="fa fa-arrow-alt-circle-right ml-1"></i></a></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-truck fa-2x text-gray-300" style="color:purple!important;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-5">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 text-xs font-weight-bold text-success text-uppercase mb-1">Aset Tidak Bergerak</div>
                                                <div class="h7 mb-0 font-weight-bold text-gray-800"><a class="btn-hover ml-5" href="<?= base_url(); ?>/AsetTidakBergerak">Lanjutkan<i class="fa fa-arrow-alt-circle-right ml-1"></i></a></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-landmark fa-2x text-gray-300" style="color:green!important;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-5">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 text-xs font-weight-bold text-info text-uppercase mb-1">Perjanjian Umum</div>
                                                <div class="h7 mb-0 font-weight-bold text-gray-800"><a class="btn-hover ml-5" href="<?= base_url(); ?>/PerjanjianUmum">Lanjutkan<i class="fa fa-arrow-alt-circle-right ml-1"></i></a></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-universal-access fa-2x text-gray-300" style="color:darkblue!important;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-5">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 text-xs font-weight-bold text-warning text-uppercase mb-1">Perizinan Umum</div>
                                                <div class="h7 mb-0 font-weight-bold text-gray-800"><a class="btn-hover ml-5" href="<?= base_url(); ?>/PerizinanUmum">Lanjutkan<i class="fa fa-arrow-alt-circle-right ml-1"></i></a></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-universal-access fa-2x text-gray-300" style="color:orange!important;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END OF DASHBOARD-->
                        <!--<div class="card mr-2 mt-3 mb-3 w-75 h-50">
                            <div class="card-header bg-gradient-light">
                                <i class="fas fa-table"></i>
                                Grafik Sewa Unit Perbulan
                                <select id="year" name="year">
                                    <option value="">Tahun</option>
                                    <?php 
                                        foreach($year_list->result_array() as $row):
                                            $date = DateTime::createFromFormat("Y-m-d", $row['periode_mulai']);
                                            $year = $date->format('Y');
                                    ?>
                                    <option value="<?= $year;?>"><?= $year;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="card-body">
                                <div class="card w-100 h-100">
                                    <script type="text/javascript" src="<?= base_url(); ?>assets/vendor/chart.js/Chart.js"></script>
                                    <div style="width: 100%;height: 100%">
                                        <canvas id="myChart"></canvas>
                                    </div>

                                    <script>
                                        var ctx = document.getElementById('myChart').getContext('2d');
                                        var data_bulan = [];
                                        var data_jumlah = [];

                                        $.post("<?= base_url()?>Dashboard/fetch_data",
                                            function (chart_data){
                                                var obj = JSON.parse(chart_data);
                                                $.each(obj, function(test,item){
                                                    data_bulan.push(item.bulan);
                                                    data_jumlah.push(item.jumlah);
                                                });
                                                
                                                var myChart = new Chart(ctx, {
                                                    type: 'bar',
                                                    data: {
                                                        labels: data_bulan,
                                                        datasets: [{
                                                            label: 'Jumlah Unit',
                                                            data: data_jumlah,
                                                            backgroundColor: 'rgba(255, 0, 0, 0.8)',
                                                            borderColor: 'rgba(255, 0, 0, 0.5)',
                                                            borderWidth: 1
                                                        }]
                                                    },
                                                    options: {
                                                        scales: {
                                                            xAxes: [{
                                                                display: true,
                                                                scaleLabel:{
                                                                    display: true,
                                                                    labelString: 'Bulan'
                                                                },
                                                                ticks: {
                                                                    beginAtZero: true
                                                                }
                                                            }],
                                                            yAxes: [{
                                                                display: true,
                                                                scaleLabel:{
                                                                    display: true,
                                                                    labelString: 'Jumlah'
                                                                },
                                                                ticks: {
                                                                    beginAtZero: true
                                                                }
                                                            }]
                                                            
                                                        },
                                                        title: {
                                                            display: true,
                                                            position: 'top',
                                                            text: 'Grafik Sewa Unit per Bulan di Tahun 2020'
                                                        }
                                                    }
                                                });
                                            });
                                    </script>
                                </div>  
                            </div>
                        </div>-->
                    <!-- END OF GRAFIK-->
                </div>
                 <!-- End of Content Body -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PKL-IF_BOOLEAN 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Siap untuk keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih Logout jika anda yakin untuk keluar.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <form action="<?= base_url();?>Dashboard/logout" method="POST">
                            <button type="submit" class="btn btn-danger" name="logout">Logout</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url();?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url();?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url();?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>