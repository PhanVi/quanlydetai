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
.center {
  margin-left: auto; 
  margin-right: auto;
}
h3,h6 {
    text-align: center;
}
</style>
</head>

<body>
<h3 class="container clearfix" >Danh sách sinh viên đã đăng ký đề tài này</h2>
<form action="" method="post">

<table class="table table-data2" >
    <thead>
        <tr>
            <th style="text-align:center;">Mã SV</th>
        </tr>
    </thead>
    <tbody>
    <h6 >Click chọn Mã số Sinh Viên để xem chi tiết sinh viên</h6>
		<?php foreach($listSinhVien as $row) { ?>
			<tr class="tr-shadow" style="text-align:center;">
                <?php 
                    // $href = site_url('sinhvien/view/'.$row['MaSV']);
                    $href = site_url('sinhvien/edit/'.$row['MaSV']);
                    $url = "<a href = '".$href."'>".$row['MaSV']."</a>";
                    echo "<td>".$url."</td>";
                ?>
            </tr>

		<?php
		}
		?>

    </tbody>
</table>		

</form>
</table>
</body>
</html>	