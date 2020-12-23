<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Quản lý Giảng Viên</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
	<h2>Thêm thông tin giảng viên</h2>
	<a href="<?php echo site_url('giangvien/')?>"> Trở lại </a>
    <table>
    <form action="<?php echo site_url('giangvien/form_validation')?>" method="post">

		<tr>
		<td>Mã giảng viên:
		<input type="text" name="MaGV" class="form-control" value="<?php echo $giangvien->MaGV ?>">
		</td>
		</tr>

		<tr>
		<td>Tên giảng viên:
		<input type="text" name="TenGV" class="form-control" value="<?php echo $giangvien->TenGV ?>"/>
		</td>
		</tr>

		<tr>
		<td>Ngày sinh:
		<input type="text" name="NgaySinh" class="form-control" value="<?php echo $giangvien->NgaySinh ?>"/>
		</td>
		</tr>

		<tr>
		<td>Giới tính:
		<input type="text" name="GioiTinh" class="form-control" value="<?php echo $giangvien->GioiTinh ?>"/>
		</td>
		</tr>

		<tr>
		<td>Địa chỉ:
		<input type="text" name="DiaChi" class="form-control" value="<?php echo $giangvien->DiaChi ?>"/>
		</td>
		</tr>

		<tr>
		<td>SDT:
		<input type="text" name="SDT" class="form-control" value="<?php echo $giangvien->SDT ?>"/>
		</td>
		</tr>

		<tr>
		<td>Email:
		<input type="text" name="Email" class="form-control" value="<?php echo $giangvien->Email ?>"/>
		</td>
		</tr>

		<tr>
		<td>Tên tài khoản:
		<input type="text" name="TenTK" class="form-control" value="<?php echo $giangvien->TenTK ?>"/>
		</td>
		</tr>

		<tr>
		<td>Mật khẩu:
		<input type="text" name="MatKhau" class="form-control" value="<?php echo $giangvien->MatKhau ?>"/>
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