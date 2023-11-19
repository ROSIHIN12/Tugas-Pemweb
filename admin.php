<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    session_destroy();
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        h1 {
            text-align: center;
            color: #333;
        }
        

        div {
            width: 80%;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
            margin: auto;
        }

        h1 {
            color: #3498db;
        }

        p {
            margin-bottom: 15px;
        }

        

    </style>
</head>

<body>
    <nav>
        <a href="admin.php">Dashboard</a>
        <a href="show.php">Data Produk</a>
        <a href="./backend/logout.php" style="float:right;">Logout</a>
    </nav>
    
     <div>
        <h1>Selamat datang Administrator: <?php echo $_SESSION['name']; ?></h1>
        <p>Terima kasih atas dedikasi dan kerja keras Anda dalam mengelola website ini. Sebagai administrator, Anda memiliki peran penting dalam memastikan kelancaran dan keberhasilan operasional website kami.</p>
        <p>Kami sangat menghargai kontribusi Anda dalam menjaga keamanan, mengelola konten, dan memberikan pengalaman terbaik kepada pengguna. Harapannya, website ini dapat terus berkembang dan memberikan manfaat bagi semua pengguna.</p>
        <p>Jika ada pertanyaan atau dukungan yang diperlukan, jangan ragu untuk menghubungi kami. Semoga kerja sama kita terus membawa kesuksesan dan kemajuan. Terima kasih!</p>
    </div>
</body>

</html>
