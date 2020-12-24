<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Quản lý Đề Tài</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
	<h2 class="container clearfix">Thêm thông tin đề tài</h2>
	<a href="<?php echo site_url('detai/')?>"> Trở lại </a>
    <table class="table table-striped">
	
    <form action="<?php echo site_url('detai/form_validation')?>" method="post">

		<tr>
		<td>Mã đề tài:
		<input type="text" name="MaDeTai" class="form-control" value="<?php echo $detai->MaDeTai ?>">
		</td>
		</tr>

		<tr>
		<td>Tên đề tài:
		<input type="text" name="TenDeTai" class="form-control" value="<?php echo $detai->TenDeTai ?>"/>
		</td>
		</tr>

		<tr>
		<td>Người hướng dẫn:

		<input type="text" name="TenGV" class="form-control" value="<?php echo $detai->TenGV ?>"/>
		</td>
		</tr>

		<tr>
		<td>Thời gian kết thúc:
		<input type="text" name="ThoiGianDK" class="form-control" value="<?php echo $detai->ThoiGianDK ?>"/>
		</td>
		</tr>

		<tr>
		<td>Giới hạn số lượng đăng ký:
		<input type="text" name="GioiHanSoLuongDK" class="form-control" value="<?php echo $detai->GioiHanSoLuongDK ?>"/>
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