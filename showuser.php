<?php

        include('connection.php');

        $sql = "SELECT * FROM  user";
        $query = mysqli_query($conn, $sql);
       

        ?>
<?php

        include('connection.php');

        $sql = "SELECT * FROM  user";
        $query = mysqli_query($conn, $sql);
       

        ?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dc3545;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #d63384;
}
</style>
</head>
<body>

<div class="container ">
    <center><div class="col-auto bg-primary">
        <div class="alert alert-primary" role="alert">
        <h2>ระบบบันทึกเวลา-เข้าออก</h2>
    </center >
<table>
  <tr>
    <th>ชื่อผู้ใช้</th>
    <th>ชื่อจริง</th>
    <th>นามสกุล</th>
    <th>อีเมล</th>
    <th>เบอร์โทร</th>
    <th>ชื่อแผนก</th>
    <th>ตำแหน่ง</th>
    <th>menu</th>
  </tr>
  <?php foreach ($query as $data){?>
    
  <tr>
    <th><?=$data['username']?></th>
    <th><?=$data['firtname']?></th>
    <th><?=$data['lastname']?></th>
    <th><?=$data['email']?></th>
    <th><?=$data['tel']?></th>
    <th><?=$data['dep_name']?></th>
    <th><?=$data['position']?></th>
    <th>
        <a href="edit_user.php?id=<?=$data['id']?>">แก้ไข and เพิ่ม</a>
        <a href="delete_user.php?id=<?=$data['id']?>">ลบข้อมูล</a>
    </th>
  </tr>  
    <?php } ?>
</table>
<center><h3><p><a href="home.php">หน้าหลัก</a></p</h3></center>
</body>
</html>