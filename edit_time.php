<?php

include('connection.php');

$id =$_GET['id'];
$sql = "SELECT * FROM  time_emp WHERE id ='$id'";
$query = mysqli_query($conn, $sql);
$data =mysqli_fetch_assoc($query);
if(isset($_POST) && !emty($_POST)){
    
}

?>

<!doctype html>
<html lang="en">
<head>
    
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
        <div class="container ">
        <div class="col-auto bg-primary ">
               <center> <h3>ระบบบันทึกข้อมูลพนักงาน</h3></center> 
            </div>
            </head>
            <body>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="row mb-3 mt-3 fs-4">
                    <label for="id_emp" class="col-sm-2 col-form-label">รหัสแผนก</label>
                    <div class="col-6">
            <input type="text" name="id_emp"class="form-control" placeholder="รหัสพนักงาน" required>
            </div>
            </div>
            <div class="row mb-3 mt-3 fs-4">
                    <label for="pass" class="col-sm-2 col-form-label">รหัสพนักงาน</label>
                    <div class="col-6">
            <input type="password" name="pass"class="form-control" placeholder="รหัสพผ่านนักงาน" required>
            </div>
            </div>
             <div class="row mb-3 mt-3 fs-4">
            <label for="uname" class="col-sm-2 col-form-label" >ชื่อพนักงาน</label>
            <div class="col-sm-6">
            <input type="text" name="uname" class="form-control" placeholder="ชื่อพนักงาน" required>
            </div>
            </div>
            <div class="row mb-3 mt-3 fs-4">
            <label for="time_in"class="col-sm-2 col-form-label">เวลาเข้า</label>
            <div class="col-sm-6">
          <input type="text" name="time_in" class="form-control" placeholder="เวลาเข้า" required>
            </div>
          </div>
            <div class="row mb-3 mt-3 fs-4">
          <label for="time_out"class="col-sm-2 col-form-label">เวลาเข้าออก</label>
         <div class="col-sm-6">
         <input type="text" name="time_out" class="form-control" placeholder="เวลาออก" required>
         </div>
         </div>
            <br>
        <center>
         <div class="col-auto">
            <input type="submit" class="btn btn-primary" name="submit" value="บันทึกข้อมูล">
            <input type="reset" class="btn btn-primary" name="reset" value="แก้ไขข้อมูล">
            </div></center>
            </div>
           
            
        </form>
        </div>
    </form>

    <a href=".php">หน้าหลัก</a>
    
</body>
</html>