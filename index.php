<?php
session_start();
/**
 * Jika Tidak login atau sudah login tapi bukan sebagai admin
 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
 */
if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'admin' ) ) {
	header('location:./../login.php');
	exit();
}
?>
<html>
    <head>
    <title>Navbar</title>
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
        <li><a href="#">Input</a>
            <ul>
                <li><a href="#">Anggota</a></li>
                <li><a href="#">Buku</a></li>
                <li><a href="#">Kategori Buku</a></li>
            </ul>
        </li>
        <li><a href="#">Transaksi</a>
            <ul>
                <li><a href="#">Peminjaman</a></li>
                <li><a href="#">Pengembalian</a></li>
            </ul>
        </li>
        <li><a href="./../logout.php" onClick="return confirm ('Yakin?')">Logout</a></li>
    </ul>
</nav>
</body>
</html>