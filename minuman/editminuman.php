<?php
    include "../koneksi.php";
    
        $vid            = $_GET['id'];
        $editminuman    = mysqli_query($con, "select * from minuman where id_minuman='$vid'");
        $data           = mysqli_fetch_array($editminuman); 
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
        .tabel-makan{
            background-color: #CECE5A;
            border-radius: 15px;
        }
        .form-label a{
            font-size: 20px;
            font-weight: 500;
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
                        <div class="container judul">
                            <p class="text-center mt-4">Edit Daftar Produk Minuman Di Kantin Bu Sri</p>
                            
                            <form action="aksieditminuman.php" method="post">
                                <div class="mb-4">
                                    <label for="" class="form-label"><a>Nama Minuman</a></label>
                                    <input type="text" name="nama_minuman" class="form-control" placeholder="masukan nama minuman" value="<?php echo $data['nama_minuman'] ?>">
                                </div>
                                <div class="mb-4">
                                    <label for="" class="form-label"><a>Deskripsi Minuman</a></label>
                                    <input type="text" name="deskripsi" class="form-control" placeholder="masukkan deskripsi minuman" value="<?php echo $data['deskripsi'] ?>">
                                </div>
                                <div class="mb-4">
                                    <label for="" class="form-label"><a>Sisa Produk Minuman</a></label>
                                    <input type="text" name="sisa_produk" class="form-control" placeholder="masukkan sisa produk minuman" value="<?php echo $data['sisa_produk'] ?>">
                                </div>
                                <div class="mb-4">
                                    <label for="" class="form-label"><a>Harga minuman</a></label>
                                    <input type="text" name="harga" class="form-control" placeholder="masukkan harga produk minuman" value="<?php echo $data['harga'] ?>">
                                </div>
                                <div class="text-center mt-4 mb-4">
                                    <input type="hidden" name="id" value="<?php echo $data['id_minuman'] ?>">
                                    <a href="minuman.php" class="btn btn-dark me-2 px-4 py-2">Kembali</a>
                                    <input type="submit" value="Edit" class="btn btn-primary px-4 py-2">
                                </div>
                            </form>

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