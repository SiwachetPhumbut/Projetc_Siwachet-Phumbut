<?php

        include('connection.php');

        $sql = "SELECT * FROM  dep";
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
    </center>
<table>
 <tr>
    <th>รหัสแผนก</th>
    <th>ชื่อแผนก</th>
    <th>menu</th>


  </tr>
  <?php foreach ($query as $data){?>
    
  <tr>
    <th><?=$data['id_dep']?></th>
    <th><?=$data['name_dep']?></th>
    <th><a href="edit_dep.php?id=<?=$data['id']?>">Edit and Update</a></th>

    
    <?php } ?>
</table>
<center><h3><p><a href="home.php">หน้าหลัก</a></p></h3></center>
</body>
</html>