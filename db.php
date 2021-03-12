
<?php 

    $con = mysqli_connect("localhost","root","","test") or die("Error db!!");

    if($con){
        echo "เชื่อมต่อสำเร็จ";
    }else {
        echo "Error db!!";
    }
?>