<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        Perizinan-Umum
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
                        <a class="collapse-item" href="<?= base_url() ;?>Sewa">Sewa</a>
                        <a class="collapse-item" href="<?= base_url() ;?>Jualbeli">Jual Beli</a>
                        <a class="collapse-item" href="<?= base_url() ;?>PerjanjianUmum">Umum</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Perizinan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu :</h6>
                        <a class="collapse-item" href="<?= base_url() ;?>KLH">KLH</a>
                        <a class="collapse-item" href="<?= base_url() ;?>B3">B3</a>
                        <a class="collapse-item" href="<?= base_url() ;?>STNK">STNK</a>
                        <a class="collapse-item" href="<?= base_url() ;?>KIR">KIR</a>
                        <a class="collapse-item" href="<?= base_url() ;?>PerizinanUmum">Umum</a>
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
                <div class="card shadow m-3">

                    <div class="mx-4 mt-4 mb-2 text-center">
                        <h1 class="h3 mb-0 text-gray-800">Dokumen Perizinan Umum</h1>
                    </div>
                    <div class="mx-2"><hr/></div>
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('alrt');?>"></div>

                    <div class="row mx-2"> 

                        <div class="card mr-2">
                            
                                <button class="btn btn-primary" data-toggle="modal" data-target=#tambahumummodal>Tambah Dokumen</button>
                            
                        </div>
                    </div>

                    <div class="card m-2">
                        <div class="card-header bg-gradient-light py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Table Dokumen Perizinan Umum</h6>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Dokumen</th>
                                        <th>Keterangan</th>
                                        <th>View</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Dokumen</th>
                                        <th>Keterangan</th>
                                        <th>View</th>
                                        <th>Opsi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                        if ($fetch_data_umum->num_rows() > 0):
                                            $nomor = 0;
                                            foreach ($fetch_data_umum->result() as $row): 
                                                $id = $row->id;
                                                $file = $row->file;                                                           
                                    ?>
                                    <tr>
                                                <td><?=$nomor+=1;?></td>
                                                <td><?=$row->nama_dokumen;?></td>
                                                <td><?=$row->keterangan;?></td>
                                                <td>
                                                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#filemodal<?= $no_id = $id; ?>">View <i class="fas fa-fw fa-file-pdf"></i></a>
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
                                                    <?php 
                                                        endif; 
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-warning" data-toggle="modal" data-target="#editumum<?= $no_ed = $id; ?>"><i class="fas fa-edit"></i></a>

                                                    <!-- Edit File Modal -->
                                                    <div class="modal fade" id="editumum<?= $no_ed ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalEditumum">Edit Umum</h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="<?= base_url() ;?>PerizinanUmum/update_umum" enctype="multipart/form-data" method="POST">
                                                                        <input type="text" name="hidden_id" value="<?= $no_ed; ?>" hidden>
                                                                        <div class="form-group">
                                                                            <div class="form-label-group">
                                                                                <label>Nama Dokumen : </label>
                                                                                <input class="form-control" type="text" name="nama_dokumen" value="<?= $row->nama_dokumen; ?>" placeholder="nama dokumen">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="form-label-group">
                                                                                <label>Keterangan : </label>
                                                                                <input class="form-control" type="text" name="keterangan" value="<?= $row->keterangan; ?>" placeholder="keterangan">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="form-label-group">
                                                                                <label>Silahkan Input Dokumen PDF: </label>
                                                                                <input class="" type="file" id="file_umum" name="file_umum" accept=".pdf">
                                                                                <br/><span style="color: red;">UKURAN FILE MAKS 2MB!!</span>
                                                                                <input type="text" name="hidden_file" value="<?= $row->file; ?>" hidden>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="form-label-group">
                                                                                <button class="form-control btn-primary" type="submit" name="updateUmum">Update</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>      
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#deleteumum<?= $no_del = $id; ?>"><i class="fas fa-trash-alt"></i></a>

                                                    <!-- Delete Modal -->
                                                    <div class="modal fade" id="deleteumum<?= $no_del ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalEditSewa">Delete Data No.<?= $nomor;?></h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Apakah anda yakin ingin menghapus data no.<?= $nomor; ?> ?
                                                                    <form action="<?= base_url() ;?>PerizinanUmum/delete_umum" method="POST">
                                                                        <input type="text" name="file_del" value="<?= $file;?>" hidden/>
                                                                        <input class="form-control" type="text" name="id_delete" value="<?= $id; ?>" hidden/>
                                                                        <br/>
                                                                        <button class="form-control btn-danger" type="submit" name="deleteumum">Delete</button>
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
                        <form action="<?= base_url();?>PerizinanUmum/logout" method="POST">
                            <button type="submit" class="btn btn-danger" name="logout">Logout</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>

    <!-- Tambah Dokumen Umum Modal -->
    <div class="modal fade" id="tambahumummodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahUmum">Tambah Dokumen Umum</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ;?>PerizinanUmum/tambah_dokumen_umum" enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Silahkan Input Dokumen(PDF): </label>
                                <input class="" type="file" id="file_umum" name="file_umum" accept=".pdf">
                                <br/><span style="color: red;">UKURAN FILE MAKS 2MB!!</span>
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
                                <button class="form-control btn-primary" type="submit" name="tambahumum">Add</button>
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

</body>

</html>