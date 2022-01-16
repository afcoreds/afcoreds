<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Template Bootstrap</title>

    <!--Link Menuju File Pendukung-->
    <link href="<?php echo base_url().'asset/'?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'asset/'?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'asset/'?>dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url().'asset/'?>vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="<?php echo base_url().'asset/'?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--End-->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Template Admin Bootstrap </a>
            </div>
			<!--Menu Dropdown Kanan Atas-->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Profil Saya</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Pengaturan</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                </li>
            </ul>
			<!--End-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

					<!--Logo Aplikasi-->
                        <li class="sidebar-search">							
                            <img class="" src="<?php echo base_url().'asset/'?>data/download.png" width="140" height="100">            
                        </li>
					<!--End-->
					<!--Menu Aplikasi-->
                        <li>
                            <a><i class="fa fa-home fa-fw"></i> Menu Utama</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> Data Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url().'index.php/C_Barang/'?>">Data Barang</a>
                                </li>
                                <li>
                                    <a href="tes.html">Data Pelanggan</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tes.html"><i class="fa fa-list fa-fw"></i> Transaksi Penjualan</a>
                        </li>
                       
                    </ul>
                </div>
                <!--End-->
            </div>
        </nav>
        <div id="page-wrapper">    
		<br/>
            <?php if (isset($isi)) echo $isi; else echo"";?>

        </div>
    </div>

    <!--Link Menuju File Pendukung-->
    <script src="<?php echo base_url().'asset/'?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url().'asset/'?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url().'asset/'?>vendor/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url().'asset/'?>vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url().'asset/'?>vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url().'asset/'?>data/morris-data.js"></script>
    <script src="<?php echo base_url().'asset/'?>dist/js/sb-admin-2.js"></script>
	<!--End-->
</body>
</html>
