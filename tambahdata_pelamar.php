<?php
date_default_timezone_set("Asia/Bangkok");

$session_start;
include 'koneksi.php';

if(isset($_POST["submit"])) {
$posisi=$_POST['posisi'];
$nama_pelamar=$_POST['nama_pelamar'];
$pendidikan=$_POST['pendidikan'];
$keterampilan=$_POST['keterampilan'];
$alamat=$_POST['alamat'];
$telepon_pelamar=$_POST['telepon_pelamar'];
$email_pelamar=$_POST['email_pelamar'];
$tanggal_submit = $_POST['tanggal_submit'];

$formatdate=strtotime($tanggal_submit);
$tgl = date("D, d F Y",$formatdate);
$waktu = date("H:i",$formatdate);

$nama_file = $_FILES['cv']['name'];
$ukuran_file = $_FILES['cv']['size'];
$tipe_file = pathinfo($nama_file,PATHINFO_EXTENSION);
$random = md5(uniqid($nama_file, true) . time());
$tmp_file = $_FILES['cv']['tmp_name'];
$path = "cv/".$random.'.'.$tipe_file;




if($tipe_file == "pdf"){ 
  if($ukuran_file <= 5000000){ 
    if(move_uploaded_file($tmp_file, $path)){ 
	
      $query ="insert into pelamar values('','$posisi','$nama_pelamar','$pendidikan','$keterampilan','$path','$alamat','$telepon_pelamar','$email_pelamar','$tanggal_submit','0')";
      $sql = mysqli_query($conn, $query);
      
      if($sql){ 
	
header("location: berhasil.php");		
			
      }else{
        // Jika Gagal, Lakukan :
        echo "Sorry, there's a problem while submitting.";
        echo "<br><meta http-equiv='refresh' content='5; URL=tambahdata_pelamar.php'> You will be redirected to the form in 5 seconds";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Sorry, there's a problem while uploading the file.";
      echo "<br><meta http-equiv='refresh' content='5; URL=tambahdata_pelamar.php'> You will be redirected to the form in 5 seconds";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "Sorry, the file size is not allowed to more than 5mb";
    echo "<br><meta http-equiv='refresh' content='5; URL=tambahdata_pelamar.php'> You will be redirected to the form in 5 seconds";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "Sorry, the CV format should be PDF.";
  echo "<br><meta http-equiv='refresh' content='5; URL=tambahdata_pelamar.php'> You will be redirected to the form in 5 seconds";
}
};

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>body{overflow-x:hidden}</style>
	<title>Tambah Data Pelamar</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>

	
	<script type="text/javascript">
	  function capitalize(textboxid, str) {
		  // string with alteast one character
		  if (str && str.length >= 1)
		  {       
			  var firstChar = str.charAt(0);
			  var remainingStr = str.slice(1);
			  str = firstChar.toUpperCase() + remainingStr;
		  }
		  document.getElementById(textboxid).value = str;
	  }
    </script>
</head>
<body class="form-v10">
	<div class="page-content" style="background-image: url('img.jpg');">
		<div class="form-v10-content">
			<form class="form-detail" action="tambahdata_pelamar.php" enctype="multipart/form-data" method="post" id="myform">
				<div class="form-left">
					<h2>Isi Data Pelamar</h2>
					<div class="form-row">
						<select name="posisi" required>
							<option class="option" value="title">Posisi</option>
							<?php
							$jobname = mysqli_query($conn,"select * from job where id_job > 1 and status='Active'");
							$no=1;
							while($p=mysqli_fetch_array($jobname)){
								
								$nama_job = $p['nama_job'];
						    echo "<option class='option' value='".$nama_job."'>".$nama_job."</option>";
							
							}
							?>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row">
							<input type="text" name="nama_pelamar" id="nama_pelamar" class="input-text" placeholder="Nama Pelamar" style="text-transform: capitalize;" onkeyup="javascript:capitalize(this.id, this.value);" required>
					</div>
					<div class="form-row">
						<select name="pendidikan">
						    <option>Pendidikan</option>
						    <option value="SMP">SMP</option>
							<option value="SMA">SMA</option>
						    <option value="S1">S1</option>
						    <option value="S2">S2</option>
							<option value="S3">S3</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row">
						<input type="text" name="keterampilan" class="keterampilan" id="keterampilan" placeholder="Keterampilan Tambahan" style="text-transform: capitalize;" onkeyup="javascript:capitalize(this.id, this.value);" minlength="10" required>
					</div>
					<div class="form-row">
						<div class="custom-file">
						<label>Upload CV (PDF max 5 MB)</label>
						<input type="file" name="cv" class="form-control-file border" required>
						</div>
					</div>
				</div>
				<div class="form-right">
					<h2></h2>
					<div class="form-row">
						<input type="text" name="alamat" class="alamat" id="alamat" placeholder="Alamat" minlength="15" onkeyup="javascript:capitalize(this.id, this.value);" required>
					</div>
					<div class="form-row">
						<input type="text" name="telepon_pelamar" class="telepon_pelamar" id="telepon_pelamar" placeholder="Telepon" maxlength="13" minlength="10" required>
					</div>
					
					<div class="form-row">
						<input type="text" name="email_pelamar" id="email_pelamar" class="input-text" minlength="10" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
					</div>
					<input type="hidden" name="tanggal_submit">

					<div class="form-row-last">
						<input type="submit" name="submit" class="register" value="Submit">
					</div>
				</div>
			</form>
		</div>
	</div>
	

</body>
</html>