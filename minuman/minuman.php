<?php
    include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">

    <!-- CSS link -->
    <link rel="stylesheet" href="">

    <style>
        *{
            font-family: poppins;
        }
        body{
            background-color: #FFE17B;
        }
        .navbarr a{
            font-size: 30px;
            font-weight: 600;
        }
        .navbar-footer{
            background-color: #6C3428;
        }
        .judul p{
            font-size: 30px;
            font-weight: 600;
        }
        table thead tr th{
            font-size: 15px;
        }
        .tabel-makan{
            background-color: #CECE5A;
            border-radius: 15px;
        }
        .tabel tr{
            background-color: #7A9D54;
        }
        .tabel td{
            background-color: #F2EE9D;
        }
        .list-edit{
            text-align: left;
        }
    </style>

</head>
<body>

    <!-- Navbar -->
    <div class="container-fluid navbar-footer py-2 shadow fixed-top">
        <div class="container navbarr py-3 text-light text-center">
            <a>Kantin Bu Sri</a>
        </div>
    </div>
    <!-- end Navbar -->

    <div class="container-fluid my-5 ">
        <div class="container py-5">
            <div class="row mt-4 pt-4">
                <div class="col-2">
                    <img src="../style/icon.png" alt="" width="200">
                </div>
                <div class="col-10 tabel-makan">
                    <div class="container-fluid">
                        <div class="container judul text-center my-4">

                            <p>Daftar Harga Minuman Di Kantin Bu Sri</p>
                            <div class="tabel">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th class="list-edit">Nama Minuman</th>
                                            <th class="list-edit">Deskripsi Minuman</th>
                                            <th class="px-3">Sisa</th>
                                            <th class="px-5">Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        $minuman = mysqli_query($con, "select * from minuman");
                                        $no=1;
                                        while($data = mysqli_fetch_array($minuman)){
                                            echo("
                                                <tr>
                                                    <td>$no</td>
                                                    <td class='list-edit'>$data[nama_minuman]</td>
                                                    <td class='list-edit'>$data[deskripsi]</td>
                                                    <td>$data[sisa_produk]</td>
                                                    <td>$data[harga]</td>
                                                    <td class='text-decoration-none'>
                                                    <a href='editminuman.php?id=$data[id_minuman]' class='me-3'>
                                                        <img src='../style/edit.svg' alt='' width='25'>
                                                    </a>
                                                    <a href='aksihapusminuman.php?id=$data[id_minuman]'>
                                                        <img src='../style/delete.svg' alt='' width='25'>
                                                    </a>
                                                    </svg>
                                                    </td>
                                                </tr>
                                            ");
                                            $no++;
                                        }
                                    ?>
                                </table>
                            </div>
                            
                            <button class="btn btn-dark mt-4 px-4 py-2 shadow me-3"><a href="../dashboard.php" class="text-decoration-none text-light">Kembali Ke Halaman Dashboard</a></button>
                            <button class="btn btn-primary mt-4 px-4 py-2 shadow"><a href="tambahminuman.php" class="text-decoration-none text-light">Tambahkan Daftar Minuman</a></button>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="container-fluid navbar-footer py-5">
        <footer class="footer"> 
            <p class="text-center my-3 text-light"><i>copyright by Naufal Haidar Azhar</i></p>
        </footer>
    </div>
    <!-- end footer -->

    <!-- JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>