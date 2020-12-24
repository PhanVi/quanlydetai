<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Dashboard</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    
    <h3>Dashboard</h3>
    <h5>Bạn muốn đăng nhập: </h5>
    <button onclick="location.href='<?php echo site_url('main/login_admin');?>'">Admin</button> 
    <br/><br/>
    <button onclick="location.href='<?php echo site_url('main/login_sinhvien');?>'">Sinh viên</button>
    <br/><br/>
    <button onclick="location.href='<?php echo site_url('main/login_giangvien');?>'">Giảng viên</button>
	<br/><br/>

</body>

</html>