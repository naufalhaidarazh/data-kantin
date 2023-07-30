<?php
    include "../koneksi.php";
    
        $vnama_makanan  = $_POST['nama_makanan'];
        $vdeskripsi     = $_POST['deskripsi'];
        $vsisa_produk   = $_POST['sisa_produk'];
        $vharga         = $_POST['harga'];

        $brg = mysqli_query($con, "insert into makanan values('', '$vnama_makanan', '$vdeskripsi', '$vsisa_produk', '$vharga')");
    

    echo "<meta http-equiv=refresh content=0;url=makanan.php>";
?>