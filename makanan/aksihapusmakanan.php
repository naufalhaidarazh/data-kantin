<?php
    include "../koneksi.php";
    
        $vid            = $_GET['id'];
        $hapus          = mysqli_query($con, "delete from makanan where id_makanan = '$vid'");
    
    echo "<meta http-equiv=refresh content=0;url=makanan.php>";
?>