<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        Aset-Tidak Bergerak
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
                <div class="card shadow m-3">

                    <div class="mx-4 mt-4 mb-2 text-center">
                        <h1 class="h3 mb-0 text-gray-800">Dokumen Aset Tidak Bergerak</h1>
                    </div>
                    <div class="mx-2"><hr/></div>
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('alrt');?>"></div>

                    <div class="row mx-2">
                        <div class="card mr-2">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahasetmodal">Tambah Dokumen</button>
                        </div>
                        <div class="card mr-2">      
                            <button class="btn btn-primary" data-toggle="modal" data-target="#importexceltanahmodal">Import Excel Aset Tanah</button>
                        </div>
                        <form action="<?= base_url() ;?>AsetTidakBergerak/download_format_excel_aset_tanah" enctype="multipart/form-data" method="POST">
                            <div class="mr-2">
                                <button class="btn btn-primary" type="submit" name="download_format_excel_aset_tanah">Download Excel Format</button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Table Aset Tidak Bergerak-->
                    <div class="card m-2">
                        <div class="card-header bg-gradient-light py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Table Dokumen Aset Tanah</h6>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>No. Sertifikat</th>
                                    <th>No. Ajb</th>
                                    <th>Atas Nama</th>
                                    <th>No. PBB</th>
                                    <th>IMB</th>
                                    <th>View</th>
                                    <th>Opsi</th>
                                    <!--<th><button class="btn btn-danger btn-xs" name="delete_all" id="delete_all">Delete</button></th>-->
                                </tr>
                              </thead>
                              <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>No. Sertifikat</th>
                                    <th>No. Ajb</th>
                                    <th>Atas Nama</th>
                                    <th>No. PBB</th>
                                    <th>IMB</th>
                                    <th>View</th>
                                    <th>Opsi</th>
                                    <!--<th>Delete</th>-->
                                </tr>
                              </tfoot>
                              <tbody>
                                <?php
                                    if ($fetch_data->num_rows() > 0):
                                        $nomor = 0;
                                        foreach ($fetch_data->result() as $row): 
                                            $id = $row->id;
                                            $file1 = $row->file1;
                                            $file2 = $row->file2;
                                            $file3 = $row->file3;
                                            $gambar = $row->gambar;
                                ?>
                                    <tr>
                                        <td><?= $nomor+=1; ?></td>
                                        <td><a href="" data-toggle="modal" data-target="#file1modal<?= $no_id = $id; ?>"><?= $row->no_sertifikat; ?></a>
                                                <!--File1 Modal-->
                                                <?php
                                                    $pth_file1 = "assets/files/".$file1;
                                                    if (!$file1 or !file_exists($pth_file1)): 
                                                ?>
                                                <div class="modal fade" id="file1modal<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <div class="modal fade" id="file1modal<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl" role="document">
                                                        <div class="modal-content">
                                                                <embed src="<?= base_url();?>assets/files/<?= $row->file1;?>" type="application/pdf" width="100%" height="600px"></embed>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="#file2modal<?= $no_id = $id; ?>"><?= $row->no_ajb; ?></a>
                                                <!--File2 Modal-->
                                                <?php
                                                    $pth_file2 = "assets/files/".$file2;
                                                    if (!$file2 or !file_exists($pth_file2)): 
                                                ?>
                                                <div class="modal fade" id="file2modal<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <div class="modal fade" id="file2modal<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl" role="document">
                                                        <div class="modal-content">
                                                                <embed src="<?= base_url();?>assets/files/<?= $row->file2;?>" type="application/pdf" width="100%" height="600px"></embed>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                        </td>
                                        <td><?= $row->atas_nama; ?></td>
                                        <td><?= $row->no_pbb; ?></td>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="#file3modal<?= $no_id = $id; ?>"><?= $row->imb; ?></a>
                                                <!--File3 Modal-->
                                                <?php
                                                    $pth_file3 = "assets/files/".$file3;
                                                    if (!$file3 or !file_exists($pth_file3)): 
                                                ?>
                                                <div class="modal fade" id="file3modal<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <div class="modal fade" id="file3modal<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl" role="document">
                                                        <div class="modal-content">
                                                                <embed src="<?= base_url();?>assets/files/<?= $row->file3;?>" type="application/pdf" width="100%" height="600px"></embed>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                        </td>
                                        <td>
                                            <!-- View Gambar -->
                                            <a href="" class="btn btn-default" style="background-color: darkcyan;" data-toggle="modal" data-target=#gambarasettb<?= $no_id = $id; ?>><i style="color: white;" class="fas fa-fw fa-file-image"></i></a>

                                            <!-- Modal Image -->
                                            <div class="modal fade" id="gambarasettb<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div style="background-color: black;" class="modal-content">
                                                        <?php 
                                                            $pth_file = "assets/img/img_aset_tb/".$gambar;
                                                            if (!$gambar or !file_exists($pth_file)): 
                                                        ?>
                                                            <img width="100%" src="<?= base_url();?>assets/img/default_img/default_aset.jpg">
                                                            <div class="carousel-caption">
                                                                <h3 style="color: black;">Tidak Ada Gambar</h3>
                                                            </div>      
                                                        <?php 
                                                            else: 
                                                        ?>
                                                            <img width="100%" src="<?= base_url();?>assets/img/img_aset_tb/<?= $gambar; ?>">
                                                            <div class="carousel-caption">
                                                                <h3 style="color: white;"><?= $gambar;?></h3>
                                                            </div>
                                                        <?php 
                                                            endif
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <td>
                                            <!--Detail-->
                                            <a href="" class="btn btn-default" style="background-color: lime;" data-toggle="modal" data-target=#detailtanahmodal<?= $no_id = $id; ?>><i style="color: white;" class="fas fa-search"></i></a>

                                            <!-- Detail Modal -->
                                            <div class="modal fade" id="detailtanahmodal<?= $no_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table table-bordered display" id="" width="100%" cellspacing="0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No. Sertifikat</th>
                                                                        <th>No. Ajb</th>
                                                                        <th>Atas Nama</th>
                                                                        <th>No. PBB</th>
                                                                        <th>Harga Resmi</th>
                                                                        <th>Harga Real</th>
                                                                        <th>Lokasi</th>
                                                                        <th>Posisi Sertifikat</th>
                                                                        <th>IMB</th>
                                                                        <th>Keterangan</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><?= $row->no_sertifikat; ?></td>
                                                                        <td><?= $row->no_ajb; ?></a></td>
                                                                        <td><?= $row->atas_nama; ?></td>
                                                                        <td><?= $row->no_pbb; ?></td>
                                                                        <td><?= $row->harga_resmi; ?></td>
                                                                        <td><?= $row->harga_real; ?></td>
                                                                        <td><?= $row->lokasi; ?></td>
                                                                        <td><?= $row->posisi_sertifikat; ?></td>
                                                                        <td><?= $row->imb; ?></td>
                                                                        <td><?= $row->keterangan; ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Edit-->
                                            <a href="" class="btn btn-warning" data-toggle="modal" data-target="#editasettanah<?= $no_ed = $id; ?>"><i class="fas fa-edit"></i></a>

                                            <!-- Modal Edit Aset Tanah -->
                                            <div class="modal fade" id="editasettanah<?= $no_ed ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalEditSewa">Edit Aset Tanah</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?= base_url() ;?>AsetTidakBergerak/update_aset_tanah" enctype="multipart/form-data" method="POST">
                                                                <input type="text" name="hidden_id" value="<?= $no_ed; ?>" hidden>
                                                                <div class="form-group">
                                                                    <div class="form-label-group">
                                                                        <label>No. Sertifikat: </label>
                                                                        <input class="form-control" type="text" name="no_sertifikat" value="<?= $row->no_sertifikat;?>" placeholder="no sertifikat">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-label-group">
                                                                        <label>No. Ajb: </label>
                                                                        <input class="form-control" type="text" name="no_ajb" value="<?= $row->no_ajb;?>" placeholder="no ajb">
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
                                                                        <label>No. PBB : </label>
                                                                        <input class="form-control" type="text" name="no_pbb" value="<?= $row->no_pbb;?>" placeholder="no pbb">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-label-group">
                                                                        <label>Harga Resmi : </label>
                                                                        <input class="form-control" type="text" name="harga_resmi" value="<?= $row->harga_resmi;?>" placeholder="harga resmi">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-label-group">
                                                                        <label>Harga Real : </label>
                                                                        <input class="form-control" type="text" name="harga_real" value="<?= $row->harga_real;?>" placeholder="harga real">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-label-group">
                                                                        <label>Lokasi : </label>
                                                                        <input class="form-control" type="text" name="lokasi" value="<?= $row->lokasi;?>" placeholder="lokasi">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-label-group">
                                                                        <label>Posisi Sertifikat : </label>
                                                                        <input class="form-control" type="text" name="posisi_sertifikat" value="<?= $row->posisi_sertifikat;?>" placeholder="posisi sertifikat">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-label-group">
                                                                        <label>IMB : </label>
                                                                        <input class="form-control" type="text" name="imb" value="<?= $row->imb;?>" placeholder="imb">
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
                                                                        <label>Silahkan Input Dokumen Sertifikat(PDF): </label>
                                                                        <input class="" type="file" id="file1_tanah" name="file1_tanah" accept=".pdf" >
                                                                        <input type="text" name="hidden_file1" value="<?= $file1; ?>" hidden >
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-label-group">
                                                                        <label>Silahkan Input Dokumen AJB(PDF): </label>
                                                                        <input class="" type="file" id="file2_tanah" name="file2_tanah" accept=".pdf" >
                                                                        <input type="text" name="hidden_file2" value="<?= $file2; ?>" hidden >
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-label-group">
                                                                        <label>Silahkan Input Dokumen IMB(PDF): </label>
                                                                        <input class="" type="file" id="file3_tanah" name="file3_tanah" accept=".pdf" >
                                                                        <br/><span style="color: red;">UKURAN FILE MAKS 2MB!!</span>
                                                                        <input type="text" name="hidden_file3" value="<?= $file3; ?>" hidden >
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-label-group">
                                                                        <button class="form-control btn-primary" type="submit" name="updatetanah">Update</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Edit Gambar-->
                                            <a href="" class="btn btn-default" style="background-color: darkcyan;" data-toggle="modal" data-target=#editgambarasettb<?= $no_id = $id; ?>><i style="color: white;" class="fas fa-images"></i></a>

                                            <!--Modal Edit Gambar Alat Berat-->
                                            <div class="modal fade" id="editgambarasettb<?= $no_ed ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalEditSewa">Edit Gambar Aset Tidak Bergerak</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?= base_url() ;?>AsetTidakBergerak/update_gambar_asettb" enctype="multipart/form-data" method="POST">
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
                                                                        <label>Gambar : </label><br>
                                                                        <input class="" type="file" id="file_gambar_asettb" name="file_gambar_asettb" accept=".jpg, .jpeg ">
                                                                        <!--<input type="text" name="hidden_file_gbr" value="<?= $gambar; ?>" hidden >-->
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-label-group">
                                                                        <button class="form-control btn-primary" type="submit" name="updategambarasettb">Update</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Delete-->
                                            <a href="" class="btn btn-danger" data-toggle="modal" data-target="#deleteasettanah<?= $no_del = $id; ?>"><i class="fas fa-trash-alt"></i></a>

                                            <!-- Delete Data Aset Tanah -->
                                            <div class="modal fade" id="deleteasettanah<?= $no_del ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalEditSewa">Delete Data Aset Tanah No.<?= $nomor;?></h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah anda yakin ingin menghapus data no.<?= $nomor; ?> ?
                                                            <form action="<?= base_url() ;?>AsetTidakBergerak/delete_aset_tanah" method="POST">
                                                                <input type="text" name="file1_tanahdel" value="<?= $file1;?>" hidden/>
                                                                <input type="text" name="file2_tanahdel" value="<?= $file2;?>" hidden/>
                                                                <input type="text" name="file3_tanahdel" value="<?= $file3;?>" hidden/>
                                                                <input type="text" name="gambardel" value="<?= $gambar?>" hidden/>
                                                                <input class="form-control" type="text" name="id_delete" value="<?= $id; ?>" hidden/>
                                                                <br/>
                                                                <button class="form-control btn-danger" type="submit" name="deleteasettanah">Delete</button>
                                                            </form>
                                                            <br/>
                                                            <button class="form-control btn-default" type="button" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <!--<td style="text-align: center;">
                                            <input type="checkbox" class="delete_checkbox" value="<?= $id?>"/>
                                        </td>-->
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
                        <form action="<?= base_url();?>AsetTidakBergerak/logout" method="POST">
                            <button type="submit" class="btn btn-danger" name="logout">Logout</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>

    <!-- Import Excel Aset Tanah -->
    <div class="modal fade" id="importexceltanahmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahVendor">Import Excel Aset Tanah</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ;?>AsetTidakBergerak/import_aset_tanah" method="POST" id="import_form" enctype="multipart/form-data">
                        <label>Silahkan Input File Excel</label>
                        <br/>
                        <input type="file" name="file_excel_aset_tanah" id="file_excel_aset_tanah" required accept=".xls, .xlsx"/>
                        <br/>
                        <br/>
                        <label style="color: red;">Pastikan Record Excel yang anda buat sama dengan table yang ada. Untuk field berupa tanggal, silahkan ubah formatnya menjadi "date".</label>
                        <input type="submit" name="import" value="Import" class="btn btn-primary"/>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambah Aset Tanah Modal -->
    <div class="modal fade" id="tambahasetmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahVendor">Tambah Dokumen</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ;?>AsetTidakBergerak/tambah_aset_tanah" enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>No. Sertifikat: </label>
                                <input class="form-control" type="text" name="no_sertifikat" placeholder="no sertifikat">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>No. Ajb: </label>
                                <input class="form-control" type="text" name="no_ajb" placeholder="no ajb">
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
                                <label>No. PBB : </label>
                                <input class="form-control" type="text" name="no_pbb" placeholder="no pbb">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Harga Resmi : </label>
                                <input class="form-control" type="text" name="harga_resmi" placeholder="harga resmi">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Harga Real : </label>
                                <input class="form-control" type="text" name="harga_real" placeholder="harga real">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Lokasi : </label>
                                <input class="form-control" type="text" name="lokasi" placeholder="lokasi">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Posisi Sertifikat : </label>
                                <input class="form-control" type="text" name="posisi_sertifikat" placeholder="posisi sertifikat">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>IMB : </label>
                                <input class="form-control" type="text" name="imb" placeholder="imb">
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
                                <label>Silahkan Input Dokumen Sertifikat(PDF): </label>
                                <input class="" type="file" id="file1_tanah" name="file1_tanah" accept=".pdf" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Silahkan Input Dokumen AJB(PDF): </label>
                                <input class="" type="file" id="file2_tanah" name="file2_tanah" accept=".pdf" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Silahkan Input Dokumen IMB(PDF): </label>
                                <input class="" type="file" id="file3_tanah" name="file3_tanah" accept=".pdf" required>
                                <br/><span style="color: red;">UKURAN FILE MAKS 2MB!!</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <button class="form-control btn-primary" type="submit" name="tambahasuransi">Add</button>
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

<!-- SweetAlert -->
<script src="<?= base_url();?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url();?>assets/js/alrtku.js"></script>

<!--<style type="text/css">
    .removeRow{
        background-color: darkred;
        color: #FFFFFF;
    }
</style>

<script type="text/javascript">
    $(document).ready(function(){
        $('.delete_checkbox').click(function(){
            if($(this). is(':checked')){
                $(this).closest('tr').addClass('removeRow');
            }else{
                $(this).closest('tr').removeClass('removeRow');
            }
        });

        $('#delete_all').click(function(){
            var checkbox = $('.delete_checkbox:checked');
            if(checkbox.length > 0){
                var checkbox_value = [];
                $(checkbox).each(function(){
                    checkbox_value.push($(this).val());
                });
                $.ajax({
                    url:"<?= base_url();?>AsetTidakBergerak/multi_del",
                    method:"POST",
                    data:{checkbox_value:checkbox_value},
                    success:function(){
                        location.href = "<?= base_url();?>AsetTidakBergerak/scc_del"  
                    } 
                })
            }else{
                alert('Pilih salah satu');
            }
        });
    });
</script>-->

</body>

</html>