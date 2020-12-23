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
  <button onclick="location.href='<?php echo site_url('giangvien/create');?>'">Thêm Giảng Viên</button>

    <table border="1" style="border-collapse: collapse;">

      <tr>
        <th>Mã GV</th>
        <th>Tên GV</th>
        <th>Mã khoa</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Số ĐT</th>
        <th>Email</th>
        <th>Tên TK</th>
      </tr>
     <?php foreach ($result as $row) { ?>
        <tr>
          <?php 
            $href = site_url('giangvien/edit/'.$row['MaGV']);
            $url = "<a href = '".$href."'>".$row['MaGV']."</a>";
             echo "<td>".$url."</td>";
          ?>
          <td><?php echo $row['TenGV'] ?></td>
          <td><?php echo $row['MaKhoa'] ?></td>
          <td><?php echo $row['NgaySinh'] ?></td>
          <td><?php echo $row['DiaChi'] ?></td>
          <td><?php echo $row['SDT'] ?></td>
          <td><?php echo $row['Email'] ?></td>
          <td><?php echo $row['TenTK'] ?></td>
          <td><a href="<?php echo site_url('giangvien/delete/'.$row['MaGV']);?>">Xóa</a></td>
        </tr>

      <?php }?>
    </table>

</body>

</html>