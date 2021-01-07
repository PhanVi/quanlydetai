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


<div id="section3" class="main-content">  
<h3 class="heading full"> Đề tài sinh viên đã đăng ký</h3>
<form action="" method="post">
    <div class="form-group">
        <div class="col">
            <p>Tên đề tài: </p>
            <input readonly type="text" name="TenDeTai" class="form-control" value="<?php echo $chiTietDeTai->TenDeTai ?>">
        </div>
    </div>

    <div class="form-group">
        <div class="col">
            <p>Tên giảng viên theo dõi đề tài:</p>
            <input readonly type="text" name="TenGV" class="form-control" value="<?php echo $chiTietDeTai->TenGV ?>">
        </div>    
        <div class="col">
            <p>Hạn đăng ký đề tài:</p>
            <input readonly type="text" name="ThoiGianDK" class="form-control" value="<?php echo $chiTietDeTai->ThoiGianDK ?>">
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
<button class="btn btn-primary" style="margin-left: 150px" onclick="location.href='<?php echo site_url('dashboard/');?>'">Đăng xuất</button>
</body>

</html>