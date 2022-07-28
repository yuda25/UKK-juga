<?php
    include('i-koneksi.php');

    $query  = "SELECT * FROM tb_perjalanan";
    $result = mysqli_query($conn , $query);

    // session
    session_start();

    $nama = isset($_SESSION['role']);

    if($nama && $nama=='admin'){
        // echo "hello ".$_SESSION['role'];
    }else{
        echo "you are mot login yet";
        header('location:i-login.php');
    }
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FORM TAMBAH DATA | YUDA</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php"><h5>ADMIN YUDA</h5></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                    <li class="">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="">
                        <a href="i-catatan.php"> <i class="menu-icon fa fa-book"></i>Catatan Perjalanan </a>
                    </li>
                    <li class="active">
                        <a href="i-tambah.php"> <i class="menu-icon fa fa-plus"></i>Tambah Data </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="i-logout.php" class="btn btn-danger btn-sm" role="button"><i class="fa fa-power-off"></i>LOGOUT</a>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>FORM TAMBAH DATA</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <!-- <div class="card-header">
                                <strong class="card-title">Tambah Data</strong>
                            </div> -->
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">TAMBAH DATA</h3>
                                        </div>
                                        <hr>
                                        <form action="i-insert.php" method="post" role="form">
                                            <div class="form-group">
                                                <label class="control-label mb-1">Nama</label>
                                                <input required="" autocomplete="off" name="nama" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">NIK</label>
                                                <input required="" autocomplete="off" name="nik" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group col-7">
                                                <label class="control-label mb-1">Tanggal</label>
                                                <input required="" name="tanggal" type="date" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group col-5">
                                                <label class="control-label mb-1">Waktu</label>
                                                <input required="" name="waktu" type="time" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Suhu Tubuh</label>
                                                <input required="" autocomplete="off" name="suhu" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="gunakan titik untuk bilangan decimal(contoh 36.5)">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Tujuan(lokasi)</label>
                                                <input required="" autocomplete="off" name="tujuan" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Catatan</label>
                                                <input required="" autocomplete="off" name="catatan" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div>
                                                <button  type="submit" class="btn btn-lg btn-info btn-block" onclick = "return confirm('Apakah anda yakin ingin menambahkan data?')">
                                                    <h2>TAMBAH DATA</h2>

                                            </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

    <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
