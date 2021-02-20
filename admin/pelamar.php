<?php 
	session_start();
	include '../koneksi.php';
	if($_SESSION['log']!="Logged"){
		header("location:login.php");
	}
	
	date_default_timezone_set("Asia/Bangkok");
	
?>
	
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
	<link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kelola Pelamar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
	<!-- Start datatable css -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
	
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->

        <div class="sidebar-menu">
            <div class="sidebar-header">
                    <a href="index.php"><center><h1><b>Job's</b></h1></center></a>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="index.php"><i class="ti-desktop"></i><span>Kelola Lowongan</span></a>
                            </li>
							<li class="active">
                                <a href="pelamar.php"><i class="ti-user"></i><span>Kelola Pelamar</span></a>
                            </li>
							<li>
                                <a href="jadwal.php"><i class="ti-receipt"></i><span>Kelola Jadwal</span></a>
                            </li>
							<li>
                                <a href="daflog.php"><i class="ti-lock"></i><span>Kelola Admin</span></a>
                            </li>
                            <li>
                                <a href="logout.php"><span>Logout</span></a>
                                
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <h2>Welcome</h2>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li><h3><div class="date">
								<script type='text/javascript'>
						<!--
						var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						var thisDay = date.getDay(),
							thisDay = myDays[thisDay];
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);		
						//-->
						</script></b></div></h3>

						</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
			
			
 
            <!-- page title area end -->
            <div class="main-content-inner">
               
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2><u>Kelola Pelamar (Belum Diproses)</u></h2>
									
                                </div>
                                    <div class="data-tables datatable-dark">
										 <table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
											<tr>
												<th>No</th>
												<th>Nama Pelamar</th>
												<th>Nama Posisi</th>
												<th>Pendidikan</th>
												<th>Alamat</th>
												<th>No. Telepon</th>
												<th>Email Pelamar</th>
												<th>CV</th>
												<th>Action</th>
												
												<!--<th>Opsi</th>-->
											</tr></thead><tbody>
											<?php 
											$job1=mysqli_query($conn,"SELECT * from pelamar where posisi!='title' and action='0' order by id_pelamar ASC");
											$no=1;
											while($p=mysqli_fetch_array($job1)){
												$id_pelamar = $p['id_pelamar'];
												$nama_pelamar = $p['nama_pelamar'];
												$posisi = $p['posisi'];
												$pendidikan = $p['pendidikan'];
												$keterampilan = $p['keterampilan'];
												$alamat = $p['alamat'];
												$telepon_pelamar = $p['telepon_pelamar'];
												$email_pelamar = $p['email_pelamar'];
												$time = $p['time'];
												$cv = $p['cv'];
												?>
												
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php echo $nama_pelamar ?></td>
													<td><?php echo $posisi ?></td>
													<td><?php echo $pendidikan ?></td>
													<td><?php echo $alamat ?></td>
													<td><?php echo $telepon_pelamar ?></td>
													<td><?php echo $email_pelamar ?></td>
													<td><a href="../<?php echo $cv ?>">Download</a></td>
													<td>
													<form action="pelamar.php" method="post" enctype="multipart/form-data">
													<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
													  Action
													</button>
													<div class="dropdown-menu">
													  <input type="button" class="dropdown-item" data-toggle="modal" data-target="#person<?php echo $id_pelamar;?>" value="Detail" \>
													  <input type="submit" class="dropdown-item" name="hapus1" value="Delete" \>
													</div>
													</form>
													
													</td>
												</tr>


												<!-- modal input -->
														<div id="person<?php echo $id_pelamar;?>" class="modal fade">
															<div class="modal-dialog modal-lg">
																<div class="modal-content">
																	<div class="modal-header">
																		<h4 class="modal-title"><?php echo $nama_pelamar ?></h4>
																		<p><?php echo $id_pelamar;?></p>
																	</div>
																	<div class="modal-body">
																			<div class="form-group">
																				<label>Nama Lengkap</label>
																				<input type="text" class="form-control" value="<?php echo $nama_pelamar ?>" disabled>
																			</div>
																			<div class="form-group">
																				<label>Nama Posisi</label>
																				<input type="text" class="form-control" value="<?php echo $posisi ?>" disabled>
																			</div>
																			<div class="form-group">
																				<label>Pendidikan</label>
																				<input type="text" class="form-control" value="<?php echo $pendidikan ?>" disabled>
																			</div>
																			<div class="form-group">
																				<label>Keterampilan Tambahan</label>
																				<input type="text" class="form-control" value="<?php echo $keterampilan ?>" disabled>
																			</div>
																			<div class="form-group">
																				<label>Alamat</label>
																				<input type="text" class="form-control" value="<?php echo $alamat ?>" disabled>
																			</div>
																			<div class="form-group">
																				<label>No.Telepon</label>
																				<input type="text" class="form-control" value="<?php echo $telepon_pelamar ?>" disabled>
																			</div>
																			<div class="form-group">
																				<label>Email</label>
																				<input type="text" class="form-control" value="<?php echo $email_pelamar ?>" disabled>
																			</div>
																			<div class="form-group">
																				<label>Tanggal submit</label>
																				<input type="datetime" class="form-control" value="<?php echo $time ?>" disabled>
																			</div>
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
																			<input type="submit" data-toggle="modal" data-target="#interview<?php echo $id_pelamar;?>" class="btn btn-primary" value="Jadwalkan Interview">
																		</div>
																</div>
															</div>
														</div>
														
														<!-- modal input -->
														<div id="interview<?php echo $id_pelamar;?>" class="modal fade">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<h4 class="modal-title">Jadwalkan interview</h4>
																	</div>
																	<div class="modal-body">
																	<form action="pelamar.php" method="post" enctype="multipart/form-data" >
																			<div class="form-group">
																				<label>Nama Lengkap</label>
																				<input type="text" class="form-control" name="nama_pelamar" value="<?php echo $nama_pelamar ?>" disabled>
																			</div>
																			<div class="form-group">
																				<label>Nama Posisi</label>
																				<input type="text" class="form-control" name="posisi" value="<?php echo $posisi ?>" disabled>
																			</div>
																			<div class="form-group">
																				<label>Tempat (alamat lengkap tempat bertemu)</label>
																				<input type="text" class="form-control" name="alamat" required>
																			</div>
																			<div class="form-group">
																				<label>Tanggal dan waktu</label>
																				<input type="datetime-local" class="form-control" name="tanggal" required>
																			</div>
																			<div class="form-group">
																				<label>Bertemu dengan (PIC)</label>
																				<input type="text" class="form-control" name="pic" required>
																			</div>
																			<div class="form-group">
																				<label>No Telp PIC</label>
																				<input type="text" class="form-control" name="telepon_pic" required>
																			</div>
																			<input type="hidden" name="id_jadwal" value="<?php echo $id_pelamar ?>" \>
																			<input type="hidden" name="nama_pelamar" value="<?php echo $nama_pelamar ?>" \>
																			<input type="hidden" name="posisi" value="<?php echo $posisi ?>" \>
																			<input type="hidden" name="email_pelamar" value="<?php echo $email_pelamar ?>" \>
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
																			<input type="submit" name="jadwal" class="btn btn-primary" value="Jadwalkan">
																		</div>
																		</form>
																</div>
															</div>
														</div>
												<?php 
											}

											
											if(isset($_POST["hapus1"])){
													$hapusin = mysqli_query($conn,"delete from pelamar where id_pelamar='$id_pelamar'");
													if($hapusin){
														unlink($cv);
														echo "<meta http-equiv='refresh' content='1; URL=pelamar.php'> Deleting";
													} else {
														echo "<meta http-equiv='refresh' content='1; URL=pelamar.php'> Failed";	
													}
												};
												
											if(isset($_POST["jadwal"])){
													$id_jadwal = $_POST['id_jadwal'];
													$nama_pelamar = $_POST['nama_pelamar'];
													$email_pelamar = $_POST['email_pelamar'];
													$posisi = $_POST['posisi'];
													$alamat = $_POST['alamat'];
													$tanggal = $_POST['tanggal'];
													
													$formatdate=strtotime($tanggal);
													
													$tgl = date("D, d F Y",$formatdate);
													$waktu = date("H:i",$formatdate);
													$pic = $_POST['pic'];
													$telepon_pic = $_POST['telepon_pic'];
													$intview = mysqli_query($conn,"insert into jadwal values('','$id_jadwal','$alamat','$tanggal','$pic','$telepon_pic');");
														if($intview){
																mysqli_query($conn,"update pelamar set action='1' where id_pelamar");
														
															
																echo "<meta http-equiv='refresh' content='1; URL=jadwal.php'> Berhasil dijadwalkan";
															
														} else {
															echo "Eksekusi Query gagal";
														}
												};
											?>
										</tbody>
										</table>
                                    </div>
									<!--
									<a href="exportstkbhn.php" target="_blank" class="btn btn-info">Export Data</a>
									-->
                                </div>
                            </div>
                        </div>
                    </div>
					
					
<!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2><u>Kelola Pelamar (Sudah Diproses)</u></h2>
									
                                </div>
                                    <div class="data-tables datatable-dark">
										 <table id="dataTable2" class="display" style="width:100%"><thead class="thead-dark">
											<tr>
												<th>No</th>
												<th>Nama Pelamar</th>
												<th>Posisi</th>
												<th>Pendidikan</th>
												<th>Alamat</th>
												<th>No. Telepon</th>
												<th>Email Pelamar</th>
												<th>CV</th>
												<th>Action</th>
												
												<!--<th>Opsi</th>-->
											</tr></thead><tbody>
											<?php 
											$job=mysqli_query($conn,"SELECT * from pelamar where posisi!='title' and action='1' order by id_pelamar ASC");
											$no=1;
											while($p=mysqli_fetch_array($job)){
												$id_pelamar = $p['id_pelamar'];
												$nama_pelamar = $p['nama_pelamar'];
												$posisi = $p['posisi'];
												$pendidikan = $p['pendidikan'];
												$keterampilan = $p['keterampilan'];
												$alamat = $p['alamat'];
												$telepon_pelamar = $p['telepon_pelamar'];
												$time = $p['time'];
												$email_pelamar = $p['email_pelamar'];
											
												$cv = $p['cv'];
												?>
												
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php echo $nama_pelamar ?></td>
													<td><?php echo $posisi ?></td>
													<td><?php echo $pendidikan ?></td>
													<td><?php echo $alamat ?></td>
													<td><?php echo $telepon_pelamar ?></td>
													<td><?php echo $email_pelamar ?></td>
													<td><a href="../<?php echo $cv ?>">Download</a></td>
													<td><form action="pelamar.php" method="post" enctype="multipart/form-data" >
													<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
													  Action
													</button>
													<div class="dropdown-menu">
													  <input type="button" class="dropdown-item" data-toggle="modal" data-target="#person1<?php echo $id_pelamar;?>" value="Detail" \>
													  <input type="submit" class="dropdown-item" name="hapus2" value="Delete" \>
													</div>
													</form>
													</td>
												</tr>
												

												<!-- modal input -->
														<div id="person1<?php echo $id_pelamar;?>" class="modal fade">
															<div class="modal-dialog modal-lg">
																<div class="modal-content">
																	<div class="modal-header">
																		<h4 class="modal-title"><?php echo $nama_pelamar ?></h4>
																	</div>
																	<div class="modal-body">
																			<div class="form-group">
																				<label>Nama Lengkap</label>
																				<input type="text" class="form-control" value="<?php echo $nama_pelamar ?>" disabled>
																			</div>
																			<div class="form-group">
																				<label>Nama Posisi</label>
																				<input type="text" class="form-control" value="<?php echo $posisi ?>" disabled>
																			</div>
																			<div class="form-group">
																				<label>Pendidikan</label>
																				<input type="text" class="form-control" value="<?php echo $pendidikan ?>" disabled>
																			</div>
																			<div class="form-group">
																				<label>Keterampilan Tambahan</label>
																				<input type="text" class="form-control" value="<?php echo $keterampilan ?>" disabled>
																			</div>
																			<div class="form-group">
																				<label>Alamat</label>
																				<input type="text" class="form-control" value="<?php echo $alamat ?>" disabled>
																			</div>
																			<div class="form-group">
																				<label>No.Telepon</label>
																				<input type="text" class="form-control" value="<?php echo $telepon_pelamar ?>" disabled>
																			</div>
																			<div class="form-group">
																				<label>Email</label>
																				<input type="text" class="form-control" value="<?php echo $email_pelamar ?>" disabled>
																			</div>
																			<div class="form-group">
																				<label>Tanggal submit</label>
																				<input type="datetime" class="form-control" value="<?php echo $time ?>" disabled>
																			</div>

																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
																		</div>
																</div>
															</div>
														</div>
												<?php 
											}
											
											if(isset($_POST["hapus2"])){
													$hapusin = mysqli_query($conn,"delete from pelamar where id_pelamar='$id_pelamar'");
													if($hapusin){
														unlink($cv);
														echo "<meta http-equiv='refresh' content='1; URL=pelamar.php'> Deleting";
													} else {
														echo "<meta http-equiv='refresh' content='1; URL=pelamar.php'> Failed";	
													}
												};
											?>
										</tbody>
										</table>
                                    </div>
									<!--
									<a href="exportstkbhn.php" target="_blank" class="btn btn-info">Export Data</a>
									-->
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					
                </div>
              
                
                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
	
	
	
	<script>
		$(document).ready(function() {
		$('input').on('keydown', function(event) {
			if (this.selectionStart == 0 && event.keyCode >= 65 && event.keyCode <= 90 && !(event.shiftKey) && !(event.ctrlKey) && !(event.metaKey) && !(event.altKey)) {
			   var $t = $(this);
			   event.preventDefault();
			   var char = String.fromCharCode(event.keyCode);
			   $t.val(char + $t.val().slice(this.selectionEnd));
			   this.setSelectionRange(1,1);
			}
		});
	});
	
	$(document).ready(function() {
    $('#dataTable3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
	
	$('#dataTable2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
	
	} );
	</script>
	
	<!-- jquery latest version -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- Start datatable js -->
	 <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
	
	
</body>

</html>
