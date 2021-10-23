<?php

        include('connection.php');

        $sql = "SELECT * FROM  time_emp";
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
    <th>รหัสพนักงาน</th>
    <th>ชื่อพนักงาน</th>
    <th>เวลาเข้า</th>
    <th>เวลาออก</th>
    <th>menu</th>
  </tr>
  <?php foreach ($query as $data){?>
    
  <tr>
    <th><?=$data['id_emp']?></th>
    <th><?=$data['uname']?></th>
    <th><?=$data['time_in']?></th>
    <th><?=$data['time_out']?></th>
    <th><a href="edit_time.php?id=<?=$data['id']?>">Edit and Update</a></th>

    <?php } ?>
</table>
<center><h3><p><a href="home.php">หน้าหลัก</a></p</h3><center>
</body>
</html>