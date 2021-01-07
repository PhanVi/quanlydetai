<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Chi Tiết Sinh Viên</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
	<h2 class="container clearfix">Thông tin sinh viên</h2>
	<a href="<?php echo site_url('')?>"> Trở lại </a>
    <table class="table table-striped">
	
    <form action="" method="post">

		<tr>
		<td>Mã sinh viên:
		<input readonly type="text" name="MaSV" class="form-control" value="<?php echo $sinhVien->MaSV ?>">
		</td>
		</tr>

		<tr>
		<td>Tên sinh viên:
		<input readonly type="text" name="TenSV" class="form-control" value="<?php echo $sinhVien->TenSV ?>"/>
		</td>
		</tr>

		<tr>
		<td>Mã lớp:
		<input readonly type="text" name="MaLop" class="form-control" value="<?php echo $sinhVien->MaLop ?>"/>
		</td>
		</tr>

		<tr>
		<td>Ngày sinh:
		<input readonly type="text" name="NgaySinh" class="form-control" value="<?php echo $sinhVien->NgaySinh ?>"/>
		</td>
		</tr>

		<tr>
		<td>Địa chỉ:
		<input readonly type="text" name="DiaChi" class="form-control" value="<?php echo $sinhVien->DiaChi ?>"/>
		</td>
		</tr>

		<tr>
		<td>SDT:
		<input readonly type="text" name="SDT" class="form-control" value="<?php echo $sinhVien->SDT ?>"/>
		</td>
		</tr>

		<tr>
		<td>Email:
		<input readonly type="text" name="Email" class="form-control" value="<?php echo $sinhVien->Email ?>"/>
		</td>
		</tr>
    </form>
    </table>
</body>

</html>	