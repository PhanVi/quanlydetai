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
<body class="animsition">
<div class="container-fluid">
  <div class="row">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#section1">Danh sách đề tài</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section2">Thông tin sinh viên</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section3">Đề tài đã đăng ký</a>
        </li>
        
      </ul>
	</div>
</div>
<div id="section1" class="main-content">    
<h3>Danh sách đề tài</h3>
<table class="table table-data2">
    <thead>
        <tr>
            <th>Mã</th>
            <th>Tên đề tài</th>
            <th>Người hướng dẫn</th>
            <th>Thời gian kết thúc</th>
            <th>số lượng đã đăng ký</th>
            <th>Đăng ký</th>
        </tr>
    </thead>
    <tbody>
		<?php foreach($dsDeTai as $item) { ?>
			<tr class="tr-shadow">
				<td><?php echo $item['MaDeTai'] ?></td>
				<td style="width: 35%;"><?php echo $item['TenDeTai'] ?></td>
				<td><?php echo $item['TenGV'] ?></td>
				<td><?php echo $item['ThoiGianDK'] ?></td>
				<td><?php echo $item['SoLuongDK'] ?> / <?php echo $item['GioiHanSoLuongDK'] ?></td>
				<td>
					<div class="table-data-feature" >
						<a class="item" data-toggle="tooltip" data-placement="top" title="Đăng ký" href="<?php echo site_url('de_tai/dangKyDeTai/'.$item['MaDeTai']);?>" >
							<i class="fa fa-check"></i>
						</a>
					</div>
				</td>
			</tr>
			<tr class="spacer"></tr>
		<?php
		}
		?>

    </tbody>
</table>
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

</body>

</html>