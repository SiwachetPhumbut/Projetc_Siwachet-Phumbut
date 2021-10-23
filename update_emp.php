<?php   
    session_start();
    include_once('connection.php');
    $id_emp = $_GET['id_emp'];
    $pass = $_GET['pass'];
    $uname = $_GET['uname'];
    $time_in = $_GET['time_in'];
    $time_out = $_GET['time_out'];

  

    $sql = "SELECT  id_emp FROM   time_emp   WHERE id_emp like ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",$id_emp);

    $stmt->execute();
    $stmt -> store_result(); 
    $stmt -> bind_result($id_emp); 

    if($stmt->fetch()){
            $sql1 = "UPDATE time_emp SET  id_emp = ?,
                     pass = ?,
                     uname = ?,
                     time_in = ?,
                     time_out = ?,

                    WHERE id_emp like ?";
            $stmt = $conn->prepare($sql1);
            $stmt->bind_param("ssssssss",$id_emp,$pass,$uname,$time_in,$time_out,);
            $stmt->execute();
            $stmt->close();
            header( 'Location: showtime.php');
    }else {
            echo "ไม่พบข้อมูลรหัสนักศึกษา" . $id_emp;
    }
?>