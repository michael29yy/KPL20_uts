<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        Aset-Bergerak
    </title>

    <!-- Custom fonts for this template-->
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
            <li class="nav-item">
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
            <li class="nav-item active">
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
                <div class="card m-3 shadow">

                	<div class="mx-4 mt-4 mb-2 text-center">
                        <h1 class="h3 mb-0 text-gray-800">Dokumen Aset Bergerak</h1>
                    </div>
                    <div class="mx-2"><hr/></div>

                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('alrt');?>"></div>
	                    
                    <!-- List Aset Bergerak -->
                    <div class="mx-2">
                        <ul class="nav nav-tabs nav-pills nav-fill">
                            <li class="nav-item">
                                <a href="#alatberat" class="nav-link active" role="tab" data-toggle="tab">Alat Berat</a>
                            </li>
                            <li class="nav-item">
                                <a href="#kendaraan" class="nav-link" role="tab" data-toggle="tab">Kendaraan</a>
                            </li>

                            <li class="nav-item">
                                <a href="#property" class="nav-link" role="tab" data-toggle="tab">Property</a>
                            </li>                       
                        </ul>
                    </div>


                    <br/>

                    <!--Tab Content -->
                    <div class="tab-content">
                        <!-- Alat Berat -->
                        <div role="tabpanel" class="tab-pane active" id="alatberat">


                            <!-- Tombol Add and Impor -->
                            <div class="row mx-2"> 

                                <div class="card mr-2">   
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#tambahasetalatberatmodal">Tambah Dokumen Alat Berat</button>                
                                </div>
                                <div class="card mr-2">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#importexcelalatberatmodal">Import Excel Alat Berat</button>
                                </div>

                                <form action="<?= base_url() ;?>AsetBergerak/download_format_excel_alat_berat" enctype="multipart/form-data" method="POST">
                                    <div class="mr-2">
                                        <button class="btn btn-primary" type="submit" name="download_format_excel_alat_berat">Download Excel Format</button>
                                    </div>
                                </form>
                                
                            </div>

                            <!-- Table Alat Berat -->
                            <div class="card m-2" id="card1">
                                <div class="card-header bg-gradient-light py-3">
                                  <h6 class="m-0 font-weight-bold text-primary">Table Dokumen Alat Berat</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered display" id="" width="100%" cellspacing="0">
                                            <thead>
                                                <tr class="m-0 font-weight-bold ">
                                                    <th>No.</th>
                                                    <th>No. Lambung</th>
                                                    <th>Serial Number</th>
                                                    <th>Tahun Unit</th>
                                                    <th>Atas Nama</th>
                                                    <th>View</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr class="m-0 font-weight-bold " >
                                                    <th>No.</th>
                                                    <th>No. Lambung</th>
                                                    <th>Serial Number</th>
                                                    <th>Tahun Unit</th>
                                                    <th>Atas Nama</th>
                                                    <th>View</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                    if ($fetch_data_alat_berat->num_rows() > 0):
                                                        $nomor = 0;
                                                        foreach ($fetch_data_alat_berat->result() as $row): 
                                                            $id = $row->id;
                                                            $file = $row->file;      
                                                            $g1 = $row->gambar1;
                                                            $g2 = $row->gambar2;
                                                            $g3 = $row->gambar3;                                                      
                                                ?>
                                                            <tr>
                                                                <td><?=$nomor+=1 ?></td>
                                                                <td><?=$row->no_lambung; ?></td>
                                                                <td><?=$row->serial_number; ?></td>
                                                                <td><?=$row->tahun_unit; ?></td>
                                                                <td><?=$row->atas_nama ?></td>
                                                                <td>
                                                                    <!-- View File -->
                                                                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#filemodal<?= $no_id = $id; ?>"><i class="fas fa-fw fa-file-pdf"></i></a>
                                                                    <!--File Modal-->
                                                                    <?php
                                                                        $pth_file = "assets/files/".$file;
                                                                        if (!$file or !file_exists($pth_file)): 
                                                                    ?>
                                                                    <div class="modal fade" id="filemodal<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">File Tidak Ditemukan!</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php
                                                                        else: 
                                                                    ?>
                                                                    <div class="modal fade" id="filemodal<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-xl" role="document">
                                                                            <div class="modal-content">
                                                                                    <embed src="<?= base_url();?>assets/files/<?= $row->file;?>" type="application/pdf" width="100%" height="600px"></embed>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php endif; ?>

                                                                    <!-- View Gambar -->
                                                                    <a href="" class="btn btn-default" style="background-color: darkcyan;" data-toggle="modal" data-target=#gambaralatberatmodal<?= $no_id = $id; ?>><i style="color: white;" class="fas fa-fw fa-file-image"></i></a>

                                                                    <!-- Modal Image -->
                                                                    <div class="modal fade" id="gambaralatberatmodal<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                            <div style="background-color: black;" class="modal-content">
                                                                                <div id="demo<?= $no_id ?>" class="carousel slide">
                                                                                    <!-- Indicators -->
                                                                                    <ol class="carousel-indicators">
                                                                                        <li style="color: white;" data-target="#demo<?= $no_id ?>" data-slide-to="0" class="active"></li>
                                                                                        <li style="color: white;" data-target="#demo<?= $no_id ?>" data-slide-to="1"></li>
                                                                                        <li style="color: white;" data-target="#demo<?= $no_id ?>" data-slide-to="2"></li>
                                                                                    </ol>

                                                                                    <!-- The slideshow -->
                                                                                    <div class="carousel-inner ">
                                                                                        <div class="carousel-item active">
                                                                                            <?php 
                                                                                                if ($g1 != NULL):
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/img_alat_berat/<?= $g1; ?>">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: white;">Gambar 1 <br/><?= $g1;?></h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                else: 
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/default_img/default_aset.jpg">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: black;">Tidak Ada Gambar</h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                endif
                                                                                            ?>
                                                                                        </div>
                                                                                        <div class="carousel-item ">
                                                                                            <?php 
                                                                                                if ($g2 != NULL):
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/img_alat_berat/<?= $g2; ?>">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: white;">Gambar 2 <br/><?= $g2;?></h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                else: 
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/default_img/default_aset.jpg">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: black;">Tidak Ada Gambar</h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                endif
                                                                                            ?>
                                                                                        </div>
                                                                                        <div class="carousel-item">
                                                                                            <?php 
                                                                                                if ($g3 != NULL):
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/img_alat_berat/<?= $g3; ?>">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: white;">Gambar 3 <br/><?= $g3;?></h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                else: 
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/default_img/default_aset.jpg">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: black;">Tidak Ada Gambar</h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                endif
                                                                                            ?>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Left and right controls -->
                                                                                    <a class="carousel-control-prev" href="#demo<?= $no_id ?>" data-slide="prev">
                                                                                        <span style="background-color: black;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                                    </a>
                                                                                    <a class="carousel-control-next" href="#demo<?= $no_id ?>" data-slide="next">
                                                                                        <span style="background-color: black;" class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                                    </a>
                                                                                </div> 
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="" class="btn btn-default" style="background-color: lime;" data-toggle="modal" data-target=#detailalatberatmodal<?= $no_id = $id; ?>><i style="color: white;" class="fas fa-fw fa-search"></i></a>

                                                                    <!-- Detail Modal -->
                                                                    <div class="modal fade" id="detailalatberatmodal<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>No. Lambung</th>
                                                                                                <th>Serial Number</th>
                                                                                                <th>Tahun Unit</th>
                                                                                                <th>Atas Nama</th>
                                                                                                <th>Nomor Invoice</th>
                                                                                                <th>Kedatangan Unit</th>
                                                                                                <th>Harga Perolehan</th>
                                                                                                <th>Nomor Leasing</th>
                                                                                                <th>Keterangan</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td><?= $row->no_lambung; ?></td>
                                                                                                <td><?= $row->serial_number; ?></td>
                                                                                                <td><?= $row->tahun_unit; ?></td>
                                                                                                <td><?= $row->atas_nama; ?></td>
                                                                                                <td><?= $row->nomor_invoice; ?></td>
                                                                                                <td><?= $row->kedatangan_unit; ?></td>
                                                                                                <td><?= $row->harga_perolehan; ?></td>
                                                                                                <td><?= $row->nomor_leasing; ?></td>
                                                                                                <td><?= $row->keterangan; ?></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <a href="" class="btn btn-warning" data-toggle="modal" data-target="#editalatberat<?= $no_ed = $id; ?>"><i class="fas fa-fw fa-edit"></i></a>

                                                                    <!-- Edit AlatBerat Modal -->
                                                                    <div class="modal fade" id="editalatberat<?= $no_ed ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="modalEditSewa">Edit Aset Alat Berat</h5>
                                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form action="<?= base_url() ;?>AsetBergerak/update_aset_alat_berat" enctype="multipart/form-data" method="POST">
                                                                                        <input type="text" name="hidden_id" value="<?= $no_ed; ?>" hidden>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>No. Lambung: </label>
                                                                                                <input class="form-control" type="text" name="no_lambung" value="<?= $row->no_lambung;?>" placeholder="no lambung">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Serial Number : </label>
                                                                                                <input class="form-control" type="text" name="serial_number" value="<?= $row->serial_number;?>" placeholder="serial number">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Tahun Unit : </label>
                                                                                                <input class="form-control" type="text" name="tahun_unit" value="<?= $row->tahun_unit;?>" placeholder="tahun unit">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Atas Nama : </label>
                                                                                                <input class="form-control" type="text" name="atas_nama" value="<?= $row->atas_nama;?>" placeholder="atas nama">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Nomor Invoice : </label>
                                                                                                <input class="form-control" type="text" name="nomor_invoice" value="<?= $row->nomor_invoice;?>" placeholder="nomor invoice">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Kedatangan Unit : </label>
                                                                                                <input class="form-control" type="text" name="kedatangan_unit" value="<?= $row->kedatangan_unit;?>" placeholder="kedatangan unit">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Harga Perolehan : </label>
                                                                                                <input class="form-control" type="text" name="harga_perolehan" value="<?= $row->harga_perolehan;?>" placeholder="harga perolehan">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Nomor Leasing : </label>
                                                                                                <input class="form-control" type="text" name="no_leasing" value="<?= $row->nomor_leasing;?>" placeholder="nomor leasing">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Keterangan : </label>
                                                                                                <input class="form-control" type="text" name="keterangan" value="<?= $row->keterangan;?>" placeholder="keterangan">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Silahkan Input Dokumen(PDF): </label>
                                                                                                <input class="" type="file" id="file_aset_alat_berat" name="file_aset_alat_berat" accept=".pdf">
                                                                                                <br/><span style="color: red;">UKURAN FILE MAKS 2MB!!</span>
                                                                                                <input type="text" name="hidden_file" value="<?= $row->file; ?>" hidden >
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <button class="form-control btn-primary" type="submit" name="updatealatberat">Update</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--Edit Gambar-->
                                                                    <a href="" class="btn btn-default" style="background-color: darkcyan;" data-toggle="modal" data-target=#editgambaralatberatmodal<?= $no_id = $id; ?>><i style="color: white;" class="fas fa-fw fa-images"></i></a>

                                                                    <!--Modal Edit Gambar Alat Berat-->
                                                                    <div class="modal fade" id="editgambaralatberatmodal<?= $no_ed ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="modalEditSewa">Edit Gambar Alat Berat</h5>
                                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form action="<?= base_url() ;?>AsetBergerak/update_gambar_alat_berat" enctype="multipart/form-data" method="POST">
                                                                                        <input type="text" name="hidden_id_gbr" value="<?= $no_ed; ?>" hidden>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label style="color: red;">PENTING!!</label>
                                                                                                <br>
                                                                                                <label style="color: red;">Ukuran gambar maks 2MB</label>
                                                                                                <br>
                                                                                                <label style="color: red;">File berupa .jpg/.jpeg</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Gambar 1: </label><br>
                                                                                                <input class="" type="file" id="file_gambar_alat_berat1" name="file_gambar_alat_berat1" accept=".jpg, .jpeg ">
                                                                                                <input type="text" name="hidden_file_gbr1" value="<?= $g1; ?>" hidden >
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Gambar 2: </label><br>
                                                                                                <input class="" type="file" id="file_gambar_alat_berat2" name="file_gambar_alat_berat2" accept=".jpg, .jpeg ">
                                                                                                <input type="text" name="hidden_file_gbr2" value="<?= $g2; ?>" hidden >
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Gambar 3: </label><br>
                                                                                                <input class="" type="file" id="file_gambar_alat_berat3" name="file_gambar_alat_berat3" accept=".jpg, .jpeg ">
                                                                                                <input type="text" name="hidden_file_gbr3" value="<?= $g3; ?>" hidden>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <button class="form-control btn-primary" type="submit" name="updategambaralatberat">Update</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--Delete-->
                                                                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#deleteasetalatberat<?= $no_del = $id; ?>"><i class="fas fa-fw fa-trash-alt"></i></a>

                                                                    <!-- Delete Data Alat Berat -->
                                                                    <div class="modal fade" id="deleteasetalatberat<?= $no_del ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="modalEditSewa">Delete Data Alat Berat No.<?= $nomor;?></h5>
                                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    Apakah anda yakin ingin menghapus data no.<?= $nomor; ?> ?
                                                                                    <form action="<?= base_url() ;?>AsetBergerak/delete_aset_alat_berat" method="POST">
                                                                                        <input type="text" name="file_del" value="<?= $file;?>" hidden/>
                                                                                        <input type="text" name="gambar1_del" value="<?= $g1;?>" hidden/>
                                                                                        <input type="text" name="gambar2_del" value="<?= $g2;?>" hidden/>
                                                                                        <input type="text" name="gambar3_del" value="<?= $g3?>" hidden/>
                                                                                        <input class="form-control" type="text" name="id_delete" value="<?= $id; ?>" hidden/>
                                                                                        <br/>
                                                                                        <button class="form-control btn-danger" type="submit" name="deletealatberat">Delete</button>
                                                                                    </form>
                                                                                    <br/>
                                                                                    <button class="form-control btn-default" type="button" data-dismiss="modal">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                <?php 
                                                        endforeach;
                                                    endif;
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kendaraan -->
                        <div role="tabpanel" class="tab-pane" id="kendaraan">

                            <!-- Tombol Add dan Impor -->
                            <div class="row mx-2">

                                <div class="card mr-2">                        
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#tambahasetkendaraanmodal">Tambah Dokumen Kendaraan</button>                             
                                </div> 
                                <div class="card mr-2">      
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#importexcelkendaraanmodal">Import Excel Kendaraan</button>
                                </div>

                                <form action="<?= base_url() ;?>AsetBergerak/download_format_excel_kendaraan" enctype="multipart/form-data" method="POST">
                                    <div class="mr-2">
                                        <button class="btn btn-primary" type="submit" name="download_format_excel_kendaraan">Download Excel Format</button>
                                    </div>
                                </form>
                            </div>

                            <!-- Table Kendaraan -->
                            <div class="card m-2" id="card2">
                                <div class="card-header bg-gradient-light py-3">
                                  <h6 class="m-0 font-weight-bold text-primary">Table Dokumen Kendaraan</h6>
                                </div>
                                <div class="card-body">
                                  	<div class="table-responsive">
	                                    <table class="table table-bordered display" id="" width="100%" cellspacing="0">
	                                      	<thead>
		                                        <tr class="m-0 font-weight-bold ">
		                                          	<th>No.</th>
		                                          	<th>Jenis</th>
		                                          	<th>No. Lambung</th>
		                                          	<th>No. Plat</th>
                                                    <th>Tahun Unit</th>
		                                          	<th>View</th>
		                                          	<th>Opsi</th>
		                                        </tr>
	                                      	</thead>
	                                      	<tfoot>
	                                        	<tr class="m-0 font-weight-bold " >
	                                          		<th>No.</th>
		                                          	<th>Jenis</th>
		                                          	<th>No. Lambung</th>
		                                          	<th>No. Plat</th>
                                                    <th>Tahun Unit</th>	
		                                          	<th>View</th>
		                                          	<th>Opsi</th>
	                                        	</tr>
	                                      	</tfoot>
	                                      	<tbody>
	                                      		<?php
				                                    if ($fetch_data_kendaraan->num_rows() > 0):
				                                        $nomor = 0;
				                                        foreach ($fetch_data_kendaraan->result() as $row): 
				                                            $id = $row->id;
				                                            $file = $row->file;
                                                            $g1 = $row->gambar1;
                                                            $g2 = $row->gambar2;
                                                            $g3 = $row->gambar3;				                                            
				                                ?> 
					                                		<tr>
					                                			<td><?= $nomor+=1; ?></td>
					                                			<td><?= $row->jenis; ?></td>
					                                			<td><?= $row->no_lambung; ?></td>
					                                			<td><?= $row->no_plat; ?></td>
                                                                <td><?= $row->tahun_unit; ?></td>
					                                			<td>
					                                				<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#filemodal2<?= $no_id = $id; ?>"><i class="fas fa-fw fa-file-pdf"></i></a>
					                                                <!--File Modal-->
					                                                <?php
					                                                    $pth_file = "assets/files/".$file;
                                                                        if (!$file or !file_exists($pth_file)): 
					                                                ?>
					                                                <div class="modal fade" id="filemodal2<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					                                                    <div class="modal-dialog" role="document">
					                                                        <div class="modal-content">
					                                                            <div class="modal-header">
					                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
					                                                                    <span aria-hidden="true">×</span>
					                                                                </button>
					                                                            </div>
					                                                            <div class="modal-body">File Tidak Ditemukan!</div>
					                                                        </div>
					                                                    </div>
					                                                </div>

					                                                <?php
					                                                    else: 
					                                                ?>
					                                                <div class="modal fade" id="filemodal2<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					                                                    <div class="modal-dialog modal-xl" role="document">
					                                                        <div class="modal-content">
					                                                                <embed src="<?= base_url();?>assets/files/<?= $row->file;?>" type="application/pdf" width="100%" height="600px"></embed>
					                                                        </div>
					                                                    </div>
					                                                </div>
					                                                <?php endif; ?>

                                                                    <!-- View Gambar Kendaraan-->
                                                                    <a href="" class="btn btn-default" style="background-color: darkcyan; margin: auto;" data-toggle="modal" data-target=#gambarkendaraanmodal<?= $no_id = $id; ?>><i style="color: white;" class="fas fa-fw fa-file-image"></i></a>

                                                                    <!-- Modal Image Kendaraan -->
                                                                    <div class="modal fade" id="gambarkendaraanmodal<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                            <div style="background-color: black;" class="modal-content">
                                                                                <div id="demok<?= $no_id ?>" class="carousel slide">
                                                                                    <!-- Indicators -->
                                                                                    <ol class="carousel-indicators">
                                                                                        <li style="color: white;" data-target="#demok<?= $no_id ?>" data-slide-to="0" class="active"></li>
                                                                                        <li style="color: white;" data-target="#demok<?= $no_id ?>" data-slide-to="1"></li>
                                                                                        <li style="color: white;" data-target="#demok<?= $no_id ?>" data-slide-to="2"></li>
                                                                                    </ol>

                                                                                    <!-- The slideshow -->
                                                                                    <div class="carousel-inner ">
                                                                                        <div class="carousel-item active">
                                                                                            <?php 
                                                                                                if ($g1 != NULL):
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/img_kendaraan/<?= $g1; ?>">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: white;">Gambar 1 <br/><?= $g1;?></h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                else: 
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/default_img/default_aset.jpg">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: black;">Tidak Ada Gambar</h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                endif
                                                                                            ?>
                                                                                        </div>
                                                                                        <div class="carousel-item ">
                                                                                            <?php 
                                                                                                if ($g2 != NULL):
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/img_kendaraan/<?= $g2; ?>">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: white;">Gambar 2 <br/><?= $g2;?></h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                else: 
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/default_img/default_aset.jpg">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: black;">Tidak Ada Gambar</h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                endif
                                                                                            ?>
                                                                                        </div>
                                                                                        <div class="carousel-item">
                                                                                            <?php 
                                                                                                if ($g3 != NULL):
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/img_kendaraan/<?= $g3; ?>">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: white;">Gambar 3 <br/><?= $g3;?></h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                else: 
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/default_img/default_aset.jpg">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: black;">Tidak Ada Gambar</h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                endif
                                                                                            ?>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Left and right controls -->
                                                                                    <a class="carousel-control-prev" href="#demok<?= $no_id ?>" data-slide="prev">
                                                                                        <span style="background-color: black;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                                    </a>
                                                                                    <a class="carousel-control-next" href="#demok<?= $no_id ?>" data-slide="next">
                                                                                        <span style="background-color: black;" class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                                    </a>
                                                                                </div> 
                                                                            </div>
                                                                        </div>
                                                                    </div>
					                                			</td>
					                                			<td>
                                                                    <!-- Detail -->
					                                				<a href="" class="btn btn-default" style="background-color: lime; margin: auto;" data-toggle="modal" data-target=#detailkendaraanmodal<?= $no_id = $id; ?>><i style="color: white;" class="fas fa-fw fa-search"></i></a>

						                                            <!-- Detail Modal -->
						                                            <div class="modal fade" id="detailkendaraanmodal<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						                                                    <div class="modal-content">
						                                                        <div class="modal-header">
						                                                            <h5 class="modal-title" id="exampleModalLabel">Detail No.<?=$nomor; ?></h5>
						                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
						                                                                <span aria-hidden="true">×</span>
						                                                            </button>
						                                                        </div>
						                                                        <div class="modal-body">   
                                                                                    <div class="card bg-gradient-danger">  
                                                                                        <div class="card-body" >
                                                                                            <div class="card">
                                                                                                <div class="row ml-2 mt-2">
                                                                                                    <div class="col-md-3">
                                                                                                        <label>Jenis</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-1">
                                                                                                        <label>:</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <label><?=$row->jenis; ?></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="card mt-2">
                                                                                                <div class="row ml-2 mt-2">
                                                                                                    <div class="col-md-3">
                                                                                                        <label>No. Lambung</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-1">
                                                                                                        <label>:</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <label><?=$row->no_lambung; ?></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="card mt-2">
                                                                                                <div class="row ml-2 mt-2">
                                                                                                    <div class="col-md-3">
                                                                                                        <label>No. Plat</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-1">
                                                                                                        <label>:</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <label><?=$row->no_plat; ?></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="card mt-2">
                                                                                                <div class="row ml-2 mt-2">
                                                                                                    <div class="col-md-3">
                                                                                                        <label>Tahun Unit</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-1">
                                                                                                        <label>:</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <label><?=$row->tahun_unit; ?></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="card mt-2">
                                                                                                <div class="row ml-2 mt-2">
                                                                                                    <div class="col-md-3">
                                                                                                        <label>No. Rangka</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-1">
                                                                                                        <label>:</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <label><?=$row->no_rangka; ?></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="card mt-2">
                                                                                                <div class="row ml-2 mt-2">
                                                                                                    <div class="col-md-3">
                                                                                                        <label>No. Mesin</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-1">
                                                                                                        <label>:</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <label><?=$row->no_mesin; ?></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="card mt-2">
                                                                                                <div class="row ml-2 mt-2">
                                                                                                    <div class="col-md-3">
                                                                                                        <label>Atas Nama</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-1">
                                                                                                        <label>:</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <label><?=$row->atas_nama; ?></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="card mt-2">
                                                                                                <div class="row ml-2 mt-2">
                                                                                                    <div class="col-md-3">
                                                                                                        <label>No. BPKB</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-1">
                                                                                                        <label>:</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <label><?=$row->no_bpkb; ?></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="card mt-2">
                                                                                                <div class="row ml-2 mt-2">
                                                                                                    <div class="col-md-3">
                                                                                                        <label>Kedatangan Unit</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-1">
                                                                                                        <label>:</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <label><?=$row->kedatangan_unit;?></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="card mt-2">
                                                                                                <div class="row ml-2 mt-2">
                                                                                                    <div class="col-md-3">
                                                                                                        <label>No. Leasing</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-1">
                                                                                                        <label>:</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <label><?=$row->no_leasing;?></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="card mt-2">
                                                                                                <div class="row ml-2 mt-2">
                                                                                                    <div class="col-md-3">
                                                                                                        <label>Posisi</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-1">
                                                                                                        <label>:</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <label><?=$row->posisi;?></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="card mt-2">
                                                                                                <div class="row ml-2 mt-2">
                                                                                                    <div class="col-md-3">
                                                                                                        <label>Harga Perolehan</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-1">
                                                                                                        <label>:</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <label><?=$row->harga_perolehan; ?></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="card mt-2">
                                                                                                <div class="row ml-2 mt-2">
                                                                                                    <div class="col-md-3">
                                                                                                        <label>Keterangan</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-1">
                                                                                                        <label>:</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <label><?=$row->keterangan; ?></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>                                   
						                                                        </div>
						                                                    </div>
						                                                </div>
						                                            </div>

						                                            <a style="margin: auto;" href="" class="btn btn-warning" data-toggle="modal" data-target="#editkendaraan<?= $no_ed = $id; ?>"><i class="fas fa-fw fa-edit"></i></a>

                                                                    <!-- Edit Kendaraan Modal -->
                                                                    <div class="modal fade" id="editkendaraan<?= $no_ed ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="modalEditSewa">Edit Aset Kendaraan</h5>
                                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form action="<?= base_url() ;?>AsetBergerak/update_aset_kendaraan" enctype="multipart/form-data" method="POST">
                                                                                        <input type="text" name="hidden_id" value="<?= $no_ed; ?>" hidden>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Jenis: </label>
                                                                                                <input class="form-control" type="text" name="jenis" value="<?= $row->jenis;?>" placeholder="jenis">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>No. Lambung: </label>
                                                                                                <input class="form-control" type="text" name="no_lambung" value="<?= $row->no_lambung;?>" placeholder="no lambung">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Nomor Plat : </label>
                                                                                                <input class="form-control" type="text" name="no_plat" value="<?= $row->no_plat;?>" placeholder="nomor plat">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Tahun Unit : </label>
                                                                                                <input class="form-control" type="text" name="tahun_unit" value="<?= $row->tahun_unit;?>" placeholder="tahun unit">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Nomor Rangka : </label>
                                                                                                <input class="form-control" type="text" name="no_rangka" value="<?= $row->no_rangka;?>" placeholder="nomor rangka">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Nomor Mesin : </label>
                                                                                                <input class="form-control" type="text" name="no_mesin" value="<?= $row->no_mesin;?>" placeholder="nomor mesin">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Atas Nama : </label>
                                                                                                <input class="form-control" type="text" name="atas_nama" value="<?= $row->atas_nama;?>" placeholder="atas nama">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Nomor BPKB : </label>
                                                                                                <input class="form-control" type="text" name="no_bpkb" value="<?= $row->no_bpkb;?>" placeholder="nomor bpkb">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Kedatangan Unit : </label>
                                                                                                <input class="form-control" type="text" name="kedatangan_unit" value="<?= $row->kedatangan_unit;?>" placeholder="kedatangan unit">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Nomor Leasing : </label>
                                                                                                <input class="form-control" type="text" name="no_leasing" value="<?= $row->no_leasing;?>" placeholder="tahun unit">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Posisi: </label>
                                                                                                <input class="form-control" type="text" name="posisi" value="<?= $row->posisi;?>" placeholder="posisi">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Harga Perolehan : </label>
                                                                                                <input class="form-control" type="text" name="harga_perolehan" value="<?= $row->harga_perolehan;?>" placeholder="harga perolehan">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Keterangan : </label>
                                                                                                <input class="form-control" type="text" name="keterangan" value="<?= $row->keterangan;?>" placeholder="keterangan">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Silahkan Input Dokumen(PDF): </label>
                                                                                                <input class="" type="file" id="file_aset_kendaraan" name="file_aset_kendaraan" accept=".pdf" >
                                                                                                <br/><span style="color: red;">UKURAN FILE MAKS 2MB!!</span>
                                                                                                <input type="text" name="hidden_file" value="<?= $row->file; ?>" hidden >
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <button class="form-control btn-primary" type="submit" name="updatekendaraan">Update</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--Edit Gambar-->
                                                                    <a href="" class="btn btn-default" style="background-color: darkcyan;" data-toggle="modal" data-target=#editgambarkendaraanmodal<?= $no_id = $id; ?>><i style="color: white;" class="fas fa-fw fa-images"></i></a>

                                                                    <!--Modal Edit Gambar Kendaraan-->
                                                                    <div class="modal fade" id="editgambarkendaraanmodal<?= $no_ed ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="modalEditSewa">Edit Gambar Kendaraan</h5>
                                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form action="<?= base_url() ;?>AsetBergerak/update_gambar_kendaraan" enctype="multipart/form-data" method="POST">
                                                                                        <input type="text" name="hidden_id_gbr" value="<?= $no_ed; ?>" hidden>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label style="color: red;">PENTING!!</label>
                                                                                                <br>
                                                                                                <label style="color: red;">Ukuran gambar maks 2MB</label>
                                                                                                <br>
                                                                                                <label style="color: red;">File berupa .jpg/.jpeg</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Gambar 1: </label><br>
                                                                                                <input class="" type="file" id="file_gambar_alat_berat1" name="file_gambar_kendaraan1" accept=".jpg, .jpeg ">
                                                                                                <input type="text" name="hidden_file_gbr1" value="<?= $g1; ?>" hidden >
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Gambar 2: </label><br>
                                                                                                <input class="" type="file" id="file_gambar_alat_berat2" name="file_gambar_kendaraan2" accept=".jpg, .jpeg ">
                                                                                                <input type="text" name="hidden_file_gbr2" value="<?= $g2; ?>" hidden >
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Gambar 3: </label><br>
                                                                                                <input class="" type="file" id="file_gambar_alat_berat3" name="file_gambar_kendaraan3" accept=".jpg, .jpeg ">
                                                                                                <input type="text" name="hidden_file_gbr3" value="<?= $g3; ?>" hidden>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <button class="form-control btn-primary" type="submit" name="updategambarkendaraan">Update</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--Delete-->
						                                            <a style="margin: auto;" href="" class="btn btn-danger" data-toggle="modal" data-target="#deleteasetkendaraan<?= $no_del= $id;?>"><i class="fas fa-fw fa-trash-alt"></i></a>

                                                                    <!-- Delete Data Kendaraan -->
                                                                    <div class="modal fade" id="deleteasetkendaraan<?= $no_del ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="modalEditSewa">Delete Data Kendaraan No.<?= $nomor;?></h5>
                                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    Apakah anda yakin ingin menghapus data no.<?= $nomor; ?> ?
                                                                                    <form action="<?= base_url() ;?>AsetBergerak/delete_aset_kendaraan" method="POST">
                                                                                        <input type="text" name="file_del" value="<?= $file;?>" hidden/>
                                                                                        <input type="text" name="gambar1_del" value="<?= $g1;?>" hidden/>
                                                                                        <input type="text" name="gambar2_del" value="<?= $g2;?>" hidden/>
                                                                                        <input type="text" name="gambar3_del" value="<?= $g3?>" hidden/>
                                                                                        <input class="form-control" type="text" name="id_delete" value="<?= $id; ?>" hidden/>
                                                                                        <br/>
                                                                                        <button class="form-control btn-danger" type="submit" name="deletekendaraan">Delete</button>
                                                                                    </form>
                                                                                    <br/>
                                                                                    <button class="form-control btn-default" type="button" data-dismiss="modal">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

					                                			</td>
					                                		</tr>
					                            <?php
                                        				endforeach;
                                    				endif; 
                                				?>
	                                      	</tbody>
	                                  	</table>
                              		</div>
                          		</div>
                      		</div>
                  		</div>

                  		<!-- Property -->
                        <div role="tabpanel" class="tab-pane" id="property">

                            <!-- Tombol Add and Impor -->
                            <div class="row mx-2"> 

                                <div class="card mr-2">
                            
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#tambahasetpropertymodal">Tambah Dokumen Property</button>
                                
                                </div>
                                <div class="card mr-2">
                                    
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#importexcelpropertymodal">Import Excel Property</button>
                                
                                </div>

                                <form action="<?= base_url() ;?>AsetBergerak/download_format_excel_property" enctype="multipart/form-data" method="POST">
                                    <div class="mr-2">
                                        <button class="btn btn-primary" type="submit" name="download_format_excel_property">Download Excel Format</button>
                                    </div>
                                </form>
                            </div>

                            <!-- Table Property -->
                            <div class="card m-2" id="card3">
                                <div class="card-header bg-gradient-light py-3">
                                  <h6 class="m-0 font-weight-bold text-primary">Table Dokumen Property</h6>
                                </div>
                                <div class="card-body">
                                  	<div class="table-responsive">
	                                    <table class="table table-bordered display" id="" width="100%" cellspacing="0">
	                                      	<thead>
		                                        <tr class="m-0 font-weight-bold ">
		                                          	<th>No.</th>
		                                          	<th>Jenis</th>
		                                          	<th>Merk/Type</th>
		                                          	<th>No. Identitas</th>
		                                          	<th>Atas Nama</th>
		                                          	<th>View</th>
		                                          	<th>Opsi</th>
		                                        </tr>
	                                      	</thead>
	                                      	<tfoot>
	                                        	<tr class="m-0 font-weight-bold " >
	                                          		<th>No.</th>
		                                          	<th>Jenis</th>
		                                          	<th>Merk/Type</th>
		                                          	<th>No.Identitas</th>
		                                          	<th>Atas Nama</th>
		                                          	<th>View</th>
		                                          	<th>Opsi</th>
	                                        	</tr>
	                                      	</tfoot>
	                                      	<tbody>
	                                      		<?php
				                                    if ($fetch_data_property->num_rows() > 0):
				                                        $nomor = 0;
				                                        foreach ($fetch_data_property->result() as $row): 
				                                            $id = $row->id;
				                                            $file = $row->file;
                                                            $g1 = $row->gambar1;
                                                            $g2 = $row->gambar2;
                                                            $g3 = $row->gambar3;				                                            
				                                ?>
					                                		<tr>
					                                			<td><?= $nomor+=1; ?></td>
					                                			<td><?= $row->jenis; ?></td>
					                                			<td><?= $row->merk; ?></td>
					                                			<td><?= $row->no_identitas; ?></td>
					                                			<td><?= $row->atas_nama; ?></td>
					                                			<td>
					                                				<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#filemodal3<?= $no_id = $id; ?>"><i class="fas fa-fw fa-file-pdf"></i></a>
					                                                <!--File Modal-->
					                                                <?php
					                                                    $pth_file = "assets/files/".$file;
                                                                        if (!$file or !file_exists($pth_file)): 
					                                                ?>
					                                                <div class="modal fade" id="filemodal3<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					                                                    <div class="modal-dialog" role="document">
					                                                        <div class="modal-content">
					                                                            <div class="modal-header">
					                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
					                                                                    <span aria-hidden="true">×</span>
					                                                                </button>
					                                                            </div>
					                                                            <div class="modal-body">File Tidak Ditemukan!</div>
					                                                        </div>
					                                                    </div>
					                                                </div>

					                                                <?php
					                                                    else: 
					                                                ?>
					                                                <div class="modal fade" id="filemodal3<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					                                                    <div class="modal-dialog modal-xl" role="document">
					                                                        <div class="modal-content">
					                                                                <embed src="<?= base_url();?>assets/files/<?= $row->file;?>" type="application/pdf" width="100%" height="600px"></embed>
					                                                        </div>
					                                                    </div>
					                                                </div>
					                                                <?php endif; ?>

                                                                    <!-- View Gambar Property-->
                                                                    <a href="" class="btn btn-default" style="background-color: darkcyan; margin: auto;" data-toggle="modal" data-target=#gambarpropertymodal<?= $no_id = $id; ?>><i style="color: white;" class="fas fa-fw fa-file-image"></i></a>

                                                                    <!-- Modal Image Property-->
                                                                    <div class="modal fade" id="gambarpropertymodal<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                            <div style="background-color: black;" class="modal-content">
                                                                                <div id="demop<?= $no_id ?>" class="carousel slide">
                                                                                    <!-- Indicators -->
                                                                                    <ol class="carousel-indicators">
                                                                                        <li style="color: white;" data-target="#demop<?= $no_id ?>" data-slide-to="0" class="active"></li>
                                                                                        <li style="color: white;" data-target="#demop<?= $no_id ?>" data-slide-to="1"></li>
                                                                                        <li style="color: white;" data-target="#demop<?= $no_id ?>" data-slide-to="2"></li>
                                                                                    </ol>

                                                                                    <!-- The slideshow -->
                                                                                    <div class="carousel-inner ">
                                                                                        <div class="carousel-item active">
                                                                                            <?php 
                                                                                                if ($g1 != NULL):
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/img_property/<?= $g1; ?>">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: white;">Gambar 1 <br/><?= $g1;?></h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                else: 
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/default_img/default_aset.jpg">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: black;">Tidak Ada Gambar</h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                endif
                                                                                            ?>
                                                                                        </div>
                                                                                        <div class="carousel-item ">
                                                                                            <?php 
                                                                                                if ($g2 != NULL):
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/img_property/<?= $g2; ?>">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: white;">Gambar 2 <br/><?= $g2;?></h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                else: 
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/default_img/default_aset.jpg">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: black;">Tidak Ada Gambar</h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                endif
                                                                                            ?>
                                                                                        </div>
                                                                                        <div class="carousel-item">
                                                                                            <?php 
                                                                                                if ($g3 != NULL):
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/img_property/<?= $g3; ?>">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: white;">Gambar 3 <br/><?= $g3;?></h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                else: 
                                                                                            ?>
                                                                                                    <img width="100%" src="<?= base_url();?>assets/img/default_img/default_aset.jpg">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h3 style="color: black;">Tidak Ada Gambar</h3>
                                                                                                    </div>
                                                                                            <?php 
                                                                                                endif
                                                                                            ?>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Left and right controls -->
                                                                                    <a class="carousel-control-prev" href="#demop<?= $no_id ?>" data-slide="prev">
                                                                                        <span style="background-color: black;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                                    </a>
                                                                                    <a class="carousel-control-next" href="#demop<?= $no_id ?>" data-slide="next">
                                                                                        <span style="background-color: black;" class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                                    </a>
                                                                                </div> 
                                                                            </div>
                                                                        </div>
                                                                    </div>
					                                			</td>
					                                			<td>
                                                                    <!-- Detail -->
					                                				<a href="" class="btn btn-default" style="background-color: lime;" data-toggle="modal" data-target=#detailpropertymodal<?= $no_id = $id; ?>><i style="color: white;" class="fas fa-fw fa-search"></i></a>

						                                            <!-- Detail Modal -->
						                                            <div class="modal fade" id="detailpropertymodal<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						                                                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
						                                                    <div class="modal-content">
						                                                        <div class="modal-header">
						                                                            <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
						                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
						                                                                <span aria-hidden="true">×</span>
						                                                            </button>
						                                                        </div>
						                                                        <div class="modal-body">
						                                                            <table class="table table-bordered" width="100%" cellspacing="0">
						                                                                <thead>
						                                                                    <tr>
						                                                                        <th>Jenis</th>
													                                          	<th>Merk/Type</th>
													                                          	<th>No. Identitas</th>
													                                          	<th>Atas Nama</th>
													                                          	<th>Harga Perolehan</th>
													                                          	<th>Nomor Perjanjian</th>
													                                          	<th>Kedatangan Unit</th>
													                                          	<th>Tahun Unit</th>
						                                                                    </tr>
						                                                                </thead>
						                                                                <tbody>
						                                                                    <tr>
						                                                                        <td><?= $row->jenis; ?></td>
													                                			<td><?= $row->merk; ?></td>
													                                			<td><?= $row->no_identitas; ?></td>
													                                			<td><?= $row->atas_nama; ?></td>
													                                			<td><?= $row->harga_perolehan; ?></td>
													                                			<td><?= $row->no_perjanjian; ?></td>
													                                			<td><?= $row->kedatangan_unit; ?></td>
													                                			<td><?= $row->tahun_unit; ?></td>
						                                                                    </tr>
						                                                                </tbody>
						                                                            </table>
						                                                        </div>
						                                                    </div>
						                                                </div>
						                                            </div>
                                                                    <!-- Edit Aset Property-->
						  											<a href="" class="btn btn-warning" data-toggle="modal" data-target="#editproperty<?= $no_ed = $id; ?>"><i class="fas fa-fw fa-edit"></i></a>

                                                                    <!-- Edit Property Modal -->
                                                                    <div class="modal fade" id="editproperty<?= $no_ed ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="modalEditSewa">Edit Aset Property</h5>
                                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form action="<?= base_url() ;?>AsetBergerak/update_aset_property" enctype="multipart/form-data" method="POST">
                                                                                        <input type="text" name="hidden_id" value="<?= $no_ed; ?>" hidden>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Jenis: </label>
                                                                                                <input class="form-control" type="text" name="jenis" value="<?= $row->jenis;?>" placeholder="jenis">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Merk/Type: </label>
                                                                                                <input class="form-control" type="text" name="merk" value="<?= $row->merk;?>" placeholder="merk/type">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Nomor Identitas : </label>
                                                                                                <input class="form-control" type="text" name="no_identitas" value="<?= $row->no_identitas;?>" placeholder="nomor identitas">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Atas Nama : </label>
                                                                                                <input class="form-control" type="text" name="atas_nama" value="<?= $row->atas_nama;?>" placeholder="atas nama">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Harga Perolehan : </label>
                                                                                                <input class="form-control" type="text" name="harga_perolehan" value="<?= $row->harga_perolehan;?>" placeholder="harga perolehan">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Nomor Perjanjian : </label>
                                                                                                <input class="form-control" type="text" name="no_perjanjian" value="<?= $row->no_perjanjian;?>" placeholder="nomor perjanjian">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Kedatangan Unit : </label>
                                                                                                <input class="form-control" type="text" name="kedatangan_unit" value="<?= $row->kedatangan_unit;?>" 
                                                                                                placeholder="kedatangan unit">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Tahun Unit : </label>
                                                                                                <input class="form-control" type="text" name="tahun_unit" value="<?= $row->tahun_unit;?>" placeholder="tahun unit">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Silahkan Input Dokumen(PDF): </label>
                                                                                                <input class="" type="file" id="file_aset_property" name="file_aset_property" accept=".pdf">
                                                                                                <br/><span style="color: red;">UKURAN FILE MAKS 2MB!!</span>
                                                                                                <input type="text" name="hidden_file" value="<?= $row->file; ?>" hidden >
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <button class="form-control btn-primary" type="submit" name="updateproperty">Update</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--Edit Gambar-->
                                                                    <a href="" class="btn btn-default" style="background-color: darkcyan;" data-toggle="modal" data-target=#editgambarpropertymodal<?= $no_id = $id; ?>><i style="color: white;" class="fas fa-fw fa-images"></i></a>

                                                                    <!--Modal Edit Gambar Kendaraan-->
                                                                    <div class="modal fade" id="editgambarpropertymodal<?= $no_ed ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="modalEditSewa">Edit Gambar Property</h5>
                                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form action="<?= base_url() ;?>AsetBergerak/update_gambar_property" enctype="multipart/form-data" method="POST">
                                                                                        <input type="text" name="hidden_id_gbr" value="<?= $no_ed; ?>" hidden>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label style="color: red;">PENTING!!</label>
                                                                                                <br>
                                                                                                <label style="color: red;">Ukuran gambar maks 2MB</label>
                                                                                                <br>
                                                                                                <label style="color: red;">File berupa .jpg/.jpeg</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Gambar 1: </label><br>
                                                                                                <input class="" type="file" id="file_gambar_alat_berat1" name="file_gambar_property1" accept=".jpg, .jpeg ">
                                                                                                <input type="text" name="hidden_file_gbr1" value="<?= $g1; ?>" hidden >
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Gambar 2: </label><br>
                                                                                                <input class="" type="file" id="file_gambar_alat_berat2" name="file_gambar_property2" accept=".jpg, .jpeg ">
                                                                                                <input type="text" name="hidden_file_gbr2" value="<?= $g2; ?>" hidden >
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <label>Gambar 3: </label><br>
                                                                                                <input class="" type="file" id="file_gambar_alat_berat3" name="file_gambar_property3" accept=".jpg, .jpeg ">
                                                                                                <input type="text" name="hidden_file_gbr3" value="<?= $g3; ?>" hidden>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="form-label-group">
                                                                                                <button class="form-control btn-primary" type="submit" name="updategambarproperty">Update</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--Delete Property-->
						                                            <a href="" class="btn btn-danger" data-toggle="modal" data-target="#deleteasetproperty<?= $no_del= $id;?>"><i class="fas fa-fw fa-trash-alt"></i></a>

                                                                    <!-- Delete Data Property -->
                                                                    <div class="modal fade" id="deleteasetproperty<?= $no_del ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="modalEditSewa">Delete Data Property No.<?= $nomor;?></h5>
                                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    Apakah anda yakin ingin menghapus data no.<?= $nomor; ?> ?
                                                                                    <form action="<?= base_url() ;?>AsetBergerak/delete_aset_property" method="POST">
                                                                                        <input type="text" name="file_del" value="<?= $file;?>" hidden/>
                                                                                        <input type="text" name="gambar1_del" value="<?= $g1;?>" hidden/>
                                                                                        <input type="text" name="gambar2_del" value="<?= $g2;?>" hidden/>
                                                                                        <input type="text" name="gambar3_del" value="<?= $g3?>" hidden/>
                                                                                        <input class="form-control" type="text" name="id_delete" value="<?= $id; ?>" hidden/>
                                                                                        <br/>
                                                                                        <button class="form-control btn-danger" type="submit" name="deleteproperty">Delete</button>
                                                                                    </form>
                                                                                    <br/>
                                                                                    <button class="form-control btn-default" type="button" data-dismiss="modal">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

					                                			</td>
					                                		</tr>
					                            <?php
                                        				endforeach;
                                    				endif; 
                                				?>
	                                      	</tbody>
	                                  	</table>
                              		</div>
                          		</div>
                      		</div>
                  		</div>
                  	</div>
                  	<!-- End of tab content -->
                </div>
                <!-- End of Content Body -->

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

    <!-- Import Excel Alat Berat -->
    <div class="modal fade" id="importexcelalatberatmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahVendor">Import Excel Alat Berat</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ;?>AsetBergerak/import_alat_berat" method="POST" id="import_form" enctype="multipart/form-data">
                        <label>Silahkan Input File Excel</label>
                        <br/>
                        <input type="file" name="file_excel_alat_berat" id="file_excel_alat_berat" required accept=".xls, .xlsx"/>
                        <br/>
                        <br/>
                        <label style="color: red;">Pastikan Record Excel yang anda buat sama dengan table yang ada. Untuk field berupa tanggal, silahkan ubah formatnya menjadi "date".</label>
                        <input type="submit" name="import" value="Import" class="btn btn-primary"/>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Import Excel Kendaraan -->
    <div class="modal fade" id="importexcelkendaraanmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahVendor">Import Excel Kendaraan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ;?>AsetBergerak/import_kendaraan" method="POST" id="import_form" enctype="multipart/form-data">
                        <label>Silahkan Input File Excel</label>
                        <br/>
                        <input type="file" name="file_excel_kendaraan" id="file_excel_kendaraan" required accept=".xls, .xlsx"/>
                        <br/>
                        <br/>
                        <label style="color: red;">Pastikan Record Excel yang anda buat sama dengan table yang ada. Untuk field berupa tanggal, silahkan ubah formatnya menjadi "date".</label>
                        <input type="submit" name="import" value="Import" class="btn btn-primary"/>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Import Excel Property -->
    <div class="modal fade" id="importexcelpropertymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahVendor">Import Excel Property</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ;?>AsetBergerak/import_property" method="POST" id="import_form" enctype="multipart/form-data">
                        <label>Silahkan Input File Excel</label>
                        <br/>
                        <input type="file" name="file_excel_property" id="file_excel_property" required accept=".xls, .xlsx"/>
                        <br/>
                        <br/>
                        <label style="color: red;">Pastikan Record Excel yang anda buat sama dengan table yang ada. Untuk field berupa tanggal, silahkan ubah formatnya menjadi "date".</label>
                        <input type="submit" name="import" value="Import" class="btn btn-primary"/>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                        <form action="<?= base_url();?>AsetBergerak/logout" method="POST">
                            <button type="submit" class="btn btn-danger" name="logout">Logout</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>

    <!-- Tambah Alat Berat Modal -->
    <div class="modal fade" id="tambahasetalatberatmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahAlatBerat">Tambah Alat Berat</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ;?>AsetBergerak/tambah_aset_alat_berat" enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>No. Lambung: </label>
                                <input class="form-control" type="text" name="no_lambung" placeholder="no lambung">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Serial Number : </label>
                                <input class="form-control" type="text" name="serial_number" placeholder="serial number">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Tahun Unit : </label>
                                <input class="form-control" type="text" name="tahun_unit" placeholder="tahun unit">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Atas Nama : </label>
                                <input class="form-control" type="text" name="atas_nama" placeholder="atas nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nomor Invoice : </label>
                                <input class="form-control" type="text" name="nomor_invoice" placeholder="nomor invoice">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Kedatangan Unit : </label>
                                <input class="form-control" type="text" name="kedatangan_unit" placeholder="kedatangan unit">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Harga Perolehan : </label>
                                <input class="form-control" type="text" name="harga_perolehan" placeholder="harga perolehan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nomor Leasing : </label>
                                <input class="form-control" type="text" name="no_leasing" placeholder="nomor leasing">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Keterangan : </label>
                                <input class="form-control" type="text" name="keterangan" placeholder="keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Silahkan Input Dokumen(PDF): </label>
                                <input class="" type="file" id="file_aset_alat_berat" name="file_aset_alat_berat" accept=".pdf" >
                                <br/><span style="color: red;">UKURAN FILE MAKS 2MB!!</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <button class="form-control btn-primary" type="submit" name="tambahalatberat">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambah Kendaraan Modal -->
    <div class="modal fade" id="tambahasetkendaraanmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahVendor">Tambah Kendaraan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ;?>AsetBergerak/tambah_aset_kendaraan" enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Jenis: </label>
                                <input class="form-control" type="text" name="jenis" placeholder="jenis">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>No. Lambung: </label>
                                <input class="form-control" type="text" name="no_lambung" placeholder="no lambung">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nomor Plat : </label>
                                <input class="form-control" type="text" name="no_plat" placeholder="nomor plat">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Tahun Unit : </label>
                                <input class="form-control" type="text" name="tahun_unit" placeholder="tahun unit">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nomor Rangka : </label>
                                <input class="form-control" type="text" name="no_rangka" placeholder="nomor rangka">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nomor Mesin : </label>
                                <input class="form-control" type="text" name="no_mesin" placeholder="nomor mesin">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Atas Nama : </label>
                                <input class="form-control" type="text" name="atas_nama" placeholder="atas nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nomor BPKB : </label>
                                <input class="form-control" type="text" name="no_bpkb" placeholder="nomor bpkb">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Kedatangan Unit : </label>
                                <input class="form-control" type="text" name="kedatangan_unit" placeholder="kedatangan unit">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nomor Leasing : </label>
                                <input class="form-control" type="text" name="no_leasing" placeholder="nomor leasing">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Posisi: </label>
                                <input class="form-control" type="text" name="posisi" placeholder="posisi">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Harga Perolehan : </label>
                                <input class="form-control" type="text" name="harga_perolehan" placeholder="harga perolehan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Keterangan : </label>
                                <input class="form-control" type="text" name="keterangan" placeholder="keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Silahkan Input Dokumen(PDF): </label>
                                <input class="" type="file" id="file_aset_kendaraan" name="file_aset_kendaraan" accept=".pdf">
                                <br/><span style="color: red;">UKURAN FILE MAKS 2MB!!</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <button class="form-control btn-primary" type="submit" name="tambahkendaraan">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambah Property Modal -->
    <div class="modal fade" id="tambahasetpropertymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahVendor">Tambah Property</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ;?>AsetBergerak/tambah_aset_property" enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Jenis: </label>
                                <input class="form-control" type="text" name="jenis" placeholder="jenis">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Merk/Type: </label>
                                <input class="form-control" type="text" name="merk" placeholder="merk/type">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nomor Identitas : </label>
                                <input class="form-control" type="text" name="no_identitas" placeholder="nomor identitas">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Atas Nama : </label>
                                <input class="form-control" type="text" name="atas_nama" placeholder="atas nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Harga Perolehan : </label>
                                <input class="form-control" type="text" name="harga_perolehan" placeholder="harga perolehan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nomor Perjanjian : </label>
                                <input class="form-control" type="text" name="no_perjanjian" placeholder="nomor perjanjian">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Kedatangan Unit : </label>
                                <input class="form-control" type="text" name="kedatangan_unit" placeholder="kedatangan unit">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Tahun Unit : </label>
                                <input class="form-control" type="text" name="tahun_unit" placeholder="tahun unit">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Silahkan Input Dokumen(PDF): </label>
                                <input class="" type="file" id="file_aset_property" name="file_aset_property" accept=".pdf">
                                <br/><span style="color: red;">UKURAN FILE MAKS 2MB!!</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <button class="form-control btn-primary" type="submit" name="tambahproperty">Add</button>
                            </div>
                        </div>
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

<script type="text/javascript">
    
    $(document).ready(function() {
    $('table.display').DataTable();
} );
</script>

<!-- SweetAlert -->
<script src="<?= base_url();?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url();?>assets/js/alrtku.js"></script>

</body>

</html>