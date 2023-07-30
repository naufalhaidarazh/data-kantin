<?php
    include "../koneksi.php";
    
        $vid            = $_POST['id'];
        $vnama_minuman  = $_POST['nama_minuman'];
        $vdeskripsi     = $_POST['deskripsi'];
        $vsisa_produk   = $_POST['sisa_produk'];
        $vharga         = $_POST['harga'];

        $catat = mysqli_query($con, "update minuman set nama_minuman='$vnama_minuman', deskripsi='$vdeskripsi', sisa_produk='$vsisa_produk', harga='$vharga' where id_minuman = '$vid'");
    

    echo "<meta http-equiv=refresh content=0;url=minuman.php>";
?>