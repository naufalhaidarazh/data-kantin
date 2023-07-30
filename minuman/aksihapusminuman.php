<?php
    include "../koneksi.php";
    
        $vid            = $_GET['id'];
        $hapus          = mysqli_query($con, "delete from minuman where id_minuman = '$vid'");
    
    echo "<meta http-equiv=refresh content=0;url=minuman.php>";
?>