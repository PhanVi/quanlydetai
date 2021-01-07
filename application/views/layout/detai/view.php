<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Quản lý đề tài</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
h2 {
    text-align: center;
}
</style>

</head>
<body>
	<h2 class="container clearfix">Xem chi tiết đề tài</h2>
	<a href="<?php echo site_url('u_giangvien/loadListDeTai')?>" class="link"> Trở lại </a>
    <table class="table table-striped">
    <form action="" method="post">  	
		<input type="hidden" name="MaDeTai" value="<?php echo $detai->MaDeTai ?>">

		<tr>
            <td>Tên đề tài:
                <input readonly type="text" name="TenDeTai" class="form-control" value="<?php echo $detai->TenDeTai ?>"/>
            </td>
		</tr>

		<tr>
            <td>Người hướng dẫn:
                <input readonly type="text" name="TenGV" class="form-control" value="<?php echo $detai->TenGV ?>"/>
            </td>
		</tr>

		<tr>
            <td>Thời gian kết thúc:
                <input readonly type="text" name="ThoiGianDK" class="form-control" value="<?php echo $detai->ThoiGianDK ?>"/>
            </td>
		</tr>

		<tr>
            <td>Giới hạn số lượng đăng ký:
                <input  readonly type="text" name="GioiHanSoLuongDK" class="form-control" value="<?php echo $detai->GioiHanSoLuongDK ?>"/>
            </td>
        </tr> 
    </form>
    </table>

</body>

</html>	