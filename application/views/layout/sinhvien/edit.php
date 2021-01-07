<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Quản lý Sinh Viên</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
	<h2 class="container clearfix">Chỉnh sửa thông tin sinh viên</h2>
	<a href="<?php echo site_url('sinhvien/')?>"> Trở lại </a>
    <table class="table table-striped">
	
    <form action="<?php echo site_url('sinhvien/update/'.$sinhvien->MaSV)?>" method="post">

		<tr>
		<td>Mã sinh viên:
		<input readonly type="text" name="MaSV" class="form-control" value="<?php echo $sinhvien->MaSV ?>">
		</td>
		</tr>

		<tr>
		<td>Tên sinh viên:
		<input type="text" name="TenSV" class="form-control" value="<?php echo $sinhvien->TenSV ?>"/>
		</td>
		</tr>

		<tr>
		<td>Mã lớp:
		<input type="text" name="MaLop" class="form-control" value="<?php echo $sinhvien->MaLop ?>"/>
		</td>
		</tr>

		<tr>
		<td>Ngày sinh:
		<input type="text" name="NgaySinh" class="form-control" value="<?php echo $sinhvien->NgaySinh ?>"/>
		</td>
		</tr>

		<tr>
		<td>Địa chỉ:
		<input type="text" name="DiaChi" class="form-control" value="<?php echo $sinhvien->DiaChi ?>"/>
		</td>
		</tr>

		<tr>
		<td>SDT:
		<input type="text" name="SDT" class="form-control" value="<?php echo $sinhvien->SDT ?>"/>
		</td>
		</tr>

		<tr>
		<td>Email:
		<input type="text" name="Email" class="form-control" value="<?php echo $sinhvien->Email ?>"/>
		</td>
		</tr>

		<tr>
		<td>Mật khẩu:
		<input type="text" name="MatKhau" class="form-control" value="<?php echo $sinhvien->MatKhau ?>"/>
		</td>
		</tr>

		<tr>
			<td></td>
		<td>
		<input type="submit" name="submit" class="form-control" value="Lưu"/>
		</td>
		</tr>
    </form>
    </table>
</body>

</html>	