<?php 

    session_start();

    require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <div class="container ">
     <center><div class="col-auto bg-primary">
        <div class="alert alert-primary" role="alert">
        <h2>ระบบบันทึกเวลา-เข้าออก</h2>
</div>
            <br>

<nav class="navbar navbar-light bg-primary">
<div class="container-fluid">
<a class="nav-link " aria-current="page" href="index.php">หน้า login</a>
&nbsp;
<a class="nav-link " aria-current="page" href="home.php">หน้าหลัก</a>
&nbsp;
    <a class="nav-link " aria-current="page" href="register.php">บันทึกข้อมูลพนักงาน</a>
    &nbsp;
    <a class="nav-link " aria-current="page" href="time_emp.php">บันทึกเวลา</a>
    &nbsp;
    <a class="nav-link" href="show_dep.php">แสดงข้อมูลแผนก</a>
    &nbsp;
    <a class="nav-link" href="showtime.php">แสดงข้อมูลเวลา</a>
    &nbsp;
    <a class="nav-link" href="logout.php">ออกจากระบบ</a>
    

    </form>
  </div>
</nav>
</nav>
</body>
</html>

