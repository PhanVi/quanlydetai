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

</head>
<body>
<button onclick="location.href='<?php echo site_url('detai/create');?>'">Thêm Đề Tài</button>
<table class="table table-data2">
    <thead>
        <tr>
            <th>Mã đề tài</th>
            <th>Tên đề tài</th>
            <th>Người hướng dẫn</th>
            <th>Thời gian kết thúc</th>
            <th>Giới hạn số lượng đăng ký</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
		<?php foreach($result as $item) { ?>
			<tr class="tr-shadow">
          <?php 
            $href = site_url('detai/edit/'.$item['MaDeTai']);
            $url = "<a href = '".$href."'>".$item['MaDeTai']."</a>";
             echo "<td>".$url."</td>";
          ?>
				<td><?php echo $item['TenDeTai'] ?></td>
				<td><?php echo $item['TenGV'] ?></td>
				<td><?php echo $item['ThoiGianDK'] ?></td>
				<td><?php echo $item['GioiHanSoLuongDK'] ?></td>
				<td>
					<div class="table-data-feature">
						<button class="item" data-toggle="tooltip" data-placement="top" value="Xóa đề tài">
							<i class="fa fa-check"><a href="<?php echo site_url('detai/delete/'.$item['MaDeTai']);?>">Xóa đề tài</a></i>
						</button>
					</div>
				</td>
			</tr>
			<tr class="spacer"></tr>
		<?php
			}
		?>
    </tbody>
</table>


</body>

</html>