<table class="table table-data2">
    <thead>
        <tr>
            <th>Mã đề tài</th>
            <th>Tên đề tài</th>
            <th>Người hướng dẫn</th>
            <th>Thời gian kết thúc</th>
            <th>số lượng đã đăng ký</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
		<?php
		foreach($dsDeTai as $item)
		{
		?>
			<tr class="tr-shadow">
				<td><?php echo $item['MaDeTai'] ?></td>
				<td><?php echo $item['TenDeTai'] ?></td>
				<td><?php echo $item['NguoiHD'] ?></td>
				<td><?php echo $item['ThoiGianDK'] ?></td>
				<td><?php echo $item['SoLuongDK'] ?> / <?php echo $item['GioiHanSoLuongDK'] ?></td>
				<td>
					<div class="table-data-feature">
						<button class="item" data-toggle="tooltip" data-placement="top" title="Xem chi tiết">
							<i class="fa fa-paste (alias)"></i>
						</button>
						<button class="item" data-toggle="tooltip" data-placement="top" title="Đăng ký">
							<i class="fa fa-check"></i>
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
