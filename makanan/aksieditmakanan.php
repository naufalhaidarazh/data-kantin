<?php
    include "../koneksi.php";
    
        $vid            = $_POST['id'];
        $vnama_makanan  = $_POST['nama_makanan'];
        $vdeskripsi     = $_POST['deskripsi'];
        $vsisa_produk   = $_POST['sisa_produk'];
        $vharga         = $_POST['harga'];

        $catat = mysqli_query($con, "update makanan set nama_makanan='$vnama_makanan', deskripsi='$vdeskripsi', sisa_produk='$vsisa_produk', harga='$vharga' where id_makanan = '$vid'");
    

    echo "<meta http-equiv=refresh content=0;url=makanan.php>";
?>