<?php
include 'koneksi.php';
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Lowongan Kerja</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-144808195-1');
		</script>

		
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/shortcodes/shortcode.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body style="font-family:verdana">
        
        <div class="wraper">
            
            <div style="background-image:url('https://www.eco.ca/wp-content/uploads/Working-home.jpg');background-repeat:no-repeat; width:100%; height:420px;">
                <div class="container-fluid text-center">
                    <div class="slider-text" style="margin-top:7%; margin-left:45%;">
                        <h2 style="color:white; font-family:verdana">Job's</h2>
						<a href="admin">Login Admin</a>
                    </div>
                </div>
            </div>
            
            <div class="blog-area pb-70" style="margin-top:5%">
                <div class="container-fluid">
                    <div class="section-title text-center mb-50">
                    </div>
					
			  

					<?php
					$sql = mysqli_query($conn,"SELECT * FROM job where status='Active' ORDER BY id_job ASC");
					
					if (mysqli_fetch_array($sql)>0) {
						$i=1;
						while ($row = mysqli_fetch_assoc($sql)) {
							if ($i++ % 4 == 0 || $i++ <2) echo "<div class='row'>";
					?>    

							<div class="col-md-3 col-sm-6">
								<div class="single-blog mb-30">
									<a href="apply.php">
										<img src="admin/<?php echo $row['img'] ?>" alt="">
									</a>
									<div class="blog-title">
										<h4><?php echo $row["kualifikasi"]; ?></h4>
										<a href="tambahdata_pelamar.php" type="button" class="btn btn-primary"><font color="white">Apply</font></a>
									</div>
								</div>
								<h4 align="center" style="font-family:verdana"><?php echo $row["nama_job"]; ?></h4>
							</div>
							
							
					<?php
							if ($i % 4 == 0 ) echo "</div>";
					?>
					<?php
						}
						if ($i % 4 != 0) echo "</div>";
					} else {
					
						echo "Lowongan Kerja Tidak Tersedia";
					}
					?>

					
                </div>
            </div>
            
        </div>
                
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.meanmenu.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
