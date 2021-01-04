<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Quyền Admin</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>

<div class="container-fluid">
  <h3 class="container pt-3">Bạn đang đăng nhập với quyền admin </h3>
  </br>
  </br>
  </br>
  </br>
  <div class="row">
    <div class="col" style="background-color:none; text-align:center"><a class="btn btn-info" onclick="location.href='<?php echo site_url('giangvien/');?>'">Quản lý danh sách giảng viên</a> </div>
    <div class="col" style="background-color:none; text-align:center"><a class="btn btn-info" onclick="location.href='<?php echo site_url('sinhvien/');?>'">Quản lý danh sách sinh viên</a></div>
    <div class="col" style="background-color:none; text-align:center"><a class="btn btn-info" onclick="location.href='<?php echo site_url('detai/');?>'">Quản lý danh sách đề tài</a></div>
    <div class="col" style="background-color:none; text-align:center"><a class="btn btn-info" onclick="location.href='<?php echo site_url('detaisinhvien/');?>'">Quản lý danh sách SV đã đăng ký đề tài</a></div>
    </br>
    </br>
    
  
  </br>
  </br>
  </br>

  </div>
  <div>
    <button class="btn btn-primary" type="submit" name="logout" onclick="location.href='<?php echo site_url('dashboard/');?>'"> Đăng xuất </button>
  </div>
  
</div>
</br>
</br>
</br>

</body>
</html>