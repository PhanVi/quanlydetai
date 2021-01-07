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
  <button class="btn btn-primary" onclick="location.href='<?php echo site_url('sinhvien/create');?>'">Thêm Sinh Viên</button>
  </br>
    </br>
    </br>
    </br>
    <table class="table table-data2">

      <tr>
        <th>Mã SV</th>
        <th>Tên SV</th>
        <th>Mã lớp</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Số ĐT</th>
        <th>Email</th>
        <th></th>
      </tr>
     <?php foreach ($result as $row) { ?>
        <tr class="tr-shadow">
          <?php 
            $href = site_url('sinhvien/edit/'.$row['MaSV']);
            $url = "<a href = '".$href."'>".$row['MaSV']."</a>";
             echo "<td>".$url."</td>";
          ?>
          <td><?php echo $row['TenSV'] ?></td>
          <td><?php echo $row['MaLop'] ?></td>
          <td><?php echo $row['NgaySinh'] ?></td>
          <td><?php echo $row['DiaChi'] ?></td>
          <td><?php echo $row['SDT'] ?></td>
          <td><?php echo $row['Email'] ?></td>
          <td>
            <div class="table-data-feature">
              <button class="item" data-toggle="tooltip" data-placement="top" value="Xóa">
                <i class="fa fa-check"><a href="<?php echo site_url('sinhvien/delete/'.$row['MaSV']);?>"> Xóa</a></i>
              </button>
            </div>
          </td>
        </tr>

      <?php }?>
    </table>

    </br>
    </br>
    </br>
    </br>
    <button class="btn btn-primary" onclick="location.href='<?php echo site_url('dashboard/');?>'">Đăng xuất</button>
</body>
</br>
    </br>
    </br>
    </br>
</html>