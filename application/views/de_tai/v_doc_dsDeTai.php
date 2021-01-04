<table class="table table-data2">
    <thead>
        <tr>
            <th>Mã</th>
            <th>Tên đề tài</th>
            <th>Người hướng dẫn</th>
            <th>Thời gian kết thúc</th>
            <th>số lượng đã đăng ký</th>
            <th>Đăng ký</th>
        </tr>
    </thead>
    <tbody>
		<?php foreach($dsDeTai as $item) { ?>
			<tr class="tr-shadow">
				<td><?php echo $item['MaDeTai'] ?></td>
				<td style="width: 35%;"><?php echo $item['TenDeTai'] ?></td>
				<td><?php echo $item['TenGV'] ?></td>
				<td><?php echo $item['ThoiGianDK'] ?></td>
				<td><?php echo $item['SoLuongDK'] ?> / <?php echo $item['GioiHanSoLuongDK'] ?></td>
				<td>
					<div class="table-data-feature" >
						<a class="item" data-toggle="tooltip" data-placement="top" title="Đăng ký" href="<?php echo site_url('de_tai/dangKyDeTai/'.$item['MaDeTai']);?>" >
							<i class="fa fa-check"></i>
						</a>
					</div>
				</td>
			</tr>
			<tr class="spacer"></tr>
		<?php
		}
		?>
    </tbody>
</table>