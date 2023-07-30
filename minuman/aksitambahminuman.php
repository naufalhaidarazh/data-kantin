<?php
    include "../koneksi.php";
    
        $vnama_minuman  = $_POST['nama_minuman'];
        $vdeskripsi     = $_POST['deskripsi'];
        $vsisa_produk   = $_POST['sisa_produk'];
        $vharga         = $_POST['harga'];

        $brg = mysqli_query($con, "insert into minuman values('', '$vnama_minuman', '$vdeskripsi', '$vsisa_produk', '$vharga')");
    

    echo "<meta http-equiv=refresh content=0;url=minuman.php>";
?>