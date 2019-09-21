<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perhitungan Target</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
 

   
    <title>Hitung Perkiraan Target</title>
    <style>
    * {margin:0; padding:0;}

    body {
     background-color:#fff;
     font-family:Arial, Helvetica, sans-serif;
     color:#000;
    }

    nav {
     margin:auto;
     text-align: center;
     width: 100%;
    } 

    nav ul ul {
     display: none;
    }

    nav ul li:hover > ul{
    display: block;
    width: 150px;
    }

    nav ul {
     background: #53bd84;
     padding: 0 20px;
     list-style: none;
     position: relative;
     display: inline-table;
     width: 100%;
    }

    nav ul:after {
     content: ""; 
     clear:both; 
     display: block;
    }

    nav ul li{
     float:left;
    }

    nav ul li:hover{
     background:#666;
    }

    nav ul li:hover a{
     color:#fff;
    }

    nav ul li a{
     display: block;
     padding: 25px;
     color: #fff;
     text-decoration: none;
    }

    nav ul ul{
     background: #53bd84;
     border-radius: 0px;
     padding: 0;
     position: absolute;
     top:100%;
    }

    nav ul ul li{
     float:none;
     border-top: 1px soild #53bd84;
     border-bottom: 1px solid #53bd84;
     position: relative;
    }

    nav ul ul li a{
     padding: 15px 40px;
     color: #fff;
    }

    nav ul ul li a:hover{
     background-color: #666;
    }

    nav ul ul ul{
     position: absolute;
     left: 100%;
     top: 0;
    }
    </style>
</head>
<body>
<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Perkiraan</a>
            <ul>
                <li><a href="hitungperkiraantarget.php">Hitung Perkiraan Target</a></li>
                <li><a href="#">Hitung Perkiraan Waktu</a></li>
                <li><a href="#">Data Perkiraan</a></li>
            </ul>
        </li>
        <li><a href="#">Laporan</a>
            <ul>
                <li><a href="#">Laporan Rompos</a></li>
                <li><a href="#">Laporan Panen</a></li>
                <li><a href="#">Laporan Data Pegawai</a></li>
                <li><a href="#">Laporan Gaji Pegawai</a></li>
            </ul>
        </li>
        <li><a href="./../logout.php" onClick="return confirm ('Yakin?')">Logout</a></li>
    </ul>
</nav>
<h1 style="padding-top: 20px; text-align: center;font-family:sans-serif; font-size: 25px; color:#53bd84; ">Masukkan tanggal perkiraan serta jumlah pegawai yang masuk dalam form yang telah disediakan ! <br>Hitung perkiraan target yang akan dicapai !</h1>
 <div style="padding-left: 500px;padding-right: 500px;" class="form-login">
 <div class="outter-form-login">
        <div class="logo-login">
            <img  src="icons8-people-50.png">
        </div>
            <form action="hitungperkiraantarget.php" class="inner-login" method="post">
            <h3 style="padding-top: 50px;" class="text-center title-login">Hitung Perkiraan Target</h3>
                <div class="form-group">
                    <input type="date" class="form-control" name="tanggal" placeholder="Tanggal">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="pegawai" placeholder="Jumlah Pegawai">
                </div>
                
                <input type="submit" name="hitung" class="btn btn-block btn-custom-green" value="Hitung" />

               <div style="padding-top: 10px; font-size: 15px; text-align: justify; color:#53bd84; ">
               	<?php
				if(isset($_POST['hitung'])){
				$tanggal = $_POST['tanggal'];
				$jumlahpegawai = $_POST['pegawai'];
				$totalpegawai = 50;
				$hari = 1;
				$targetmax = 3.75;
	
				$target = $jumlahpegawai * $hari / $totalpegawai * $hari * $targetmax; // Menghitung luas segitiga
	
				echo "Perkiraan target yang didapatkan pada tanggal : $tanggal, dan Jumlah Pegawai $jumlahpegawai yaitu $target ton.";
		}
	?>
                
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

