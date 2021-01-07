<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sinh Viên</title>
    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url() ?>public/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url() ?>public/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url() ?>public/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url() ?>public/css/theme.css" rel="stylesheet" media="all">

</head>
<div id="section2" class="main-content">  
	<h3> Thông tin sinh viên</h3>
    <form action="" method="post">

		<div class="form-row">
			<div class="col">
				<p>Mã sinh viên:</p>
				<input readonly type="text" name="MaSV" class="form-control" value="<?php echo $chiTietSV->MaSV ?>">
			</div>
			<div class="col">
				<p>Tên sinh viên:</p>
				<input readonly type="text" name="TenSV" class="form-control" value="<?php echo $chiTietSV->TenSV ?>">
			</div>
		</div>
		
		<div class="form-row">
			<div class="col">
				<p>Mã lớp:</p>
				<input readonly type="text" name="MaLop" class="form-control" value="<?php echo $chiTietSV->MaLop ?>">
			</div>
			<div class="col">
				<p>Ngày sinh:</p>
				<input  readonly type="text" name="NgaySinh" class="form-control" value="<?php echo $chiTietSV->NgaySinh ?>">
			</div>
		</div>	
		
		<div class="form-row">
			<div class="col">
				<p>Địa chỉ:</p>
				<input readonly  type="text" name="DiaChi" class="form-control" value="<?php echo $chiTietSV->DiaChi ?>">
			</div>
			<div class="col">
				<p>SDT:</p>
				<input readonly  type="text" name="SDT" class="form-control" value="<?php echo $chiTietSV->SDT ?>">
			</div>
			<div class="col">
				<p>Email:</p>
				<input readonly  type="text" name="Email" class="form-control" value="<?php echo $chiTietSV->Email ?>">
			</div>			
		</div>			
		
    </form>
</div>
<!-- Jquery JS-->
<script src="<?php echo base_url() ?>public/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?php echo base_url() ?>public/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="<?php echo base_url() ?>public/vendor/slick/slick.min.js">
</script>
<script src="<?php echo base_url() ?>public/vendor/wow/wow.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/animsition/animsition.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="<?php echo base_url() ?>public/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="<?php echo base_url() ?>public/vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo base_url() ?>public/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="<?php echo base_url() ?>public/js/main.js"></script>
</br>
</br>
</br>
</body>

</html>