<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kantin Bu Sri</title>

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
        .navbar p{
            font-size: 30px;
        }
        .navbar-footer{
            background-color: #6C3428;
        }
    </style>

</head>
<body>
   
    <!-- Navbar -->
    <div class="container-fluid navbar-footer py-2 mb-3 shadow fixed-top mb-5">
        <div class="container navbar pt-3 text-light">
            <p>Naufal Haidar Azhar</p>
            <p style="float: right;">XII RPL 1</p>
        </div>
    </div>
    <!-- end Navbar -->

    <!-- content -->
    <div class="container-fluid py-5 mt-5">


        <div class="container mt-5">
            
            <div class="row text-center mb-2">
                <h1 class="mb-5"><b>Selamat Datang di Kantin Bu Sri</b></h1>
                <div class="">
                   <img src="style/busri.png" alt="" width="400" height="400"> 
                </div>
            </div>

            <div class="row mb-5">
                <h2 class="text-center mt-5 mb-5">Pilih daftar menu makanan atau minuman dibawah <br> 
                    yang ingin anda beli</h2>
                <div class="col-4 offset-2">
                    <a href="makanan/makanan.php"><img src="style/makanan.png" alt="" width="400" height="400" class="shadow"></a>
                </div>
                <div class="col-6">
                    <a href="minuman/minuman.php"><img src="style/minuman.png" alt="" width="400" height="400" class="shadow"></a>
                </div>
            </div>

            

        </div>
        
        
    </div>
    <!-- end content -->

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