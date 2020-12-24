<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Quyền Admin</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    
    <h3>Bạn đang đăng nhập với quyền admin</h3>
    <button type="submit" onclick="location.href='<?php echo site_url('giangvien/');?>'">Quản lý danh sách giảng viên</button> 
    <br/><br/>
    <button type="submit" onclick="location.href='<?php echo site_url('sinhvien/');?>'">Quản lý danh sách sinh viên</button>
    <br/><br/>
    <button type="submit" onclick="location.href='<?php echo site_url('detai/');?>'">Quản lý danh sách đề tài</button> 
    <br/><br/>
    <button type="submit" onclick="location.href='<?php echo site_url('detaisinhvien/');?>'">Quản lý danh sách sinh viên đã đăng ký đề tài</button>
	<br/><br/>
    
    <div>
        <button class="btn btn-primary" type="submit" name="logout" onclick="location.href='<?php echo site_url('dashboard/');?>'"> Đăng xuất </button>
    </div>
	<br/><br/>	<br/><br/>	<br/><br/>
</body>

</html>