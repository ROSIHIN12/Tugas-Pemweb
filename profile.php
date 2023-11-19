<?php 


session_start(); 
if($_SESSION['role'] != 'user') {
    session_destroy();
    header('Location:index.php');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
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
        <a href="profile.php">Dashboard</a>
        <a href="./backend/logout.php" style="float:right;">Logout</a>
    </nav>
   
    <div>
         <h1>Selamat datang <?php echo $_SESSION['name'];?></h1>
        <p>Kami sangat senang Anda berada di sini. Terima kasih atas kunjungan Anda ke website kami. Kami berkomitmen untuk menyediakan pengalaman yang luar biasa bagi Anda.</p>
        <p>Temukan berbagai informasi menarik, produk berkualitas, dan layanan terbaik di sini. Jangan ragu untuk menjelajahi seluruh halaman dan hubungi kami jika Anda memiliki pertanyaan atau membutuhkan bantuan.</p>
        <p>Terima kasih telah menjadi bagian dari komunitas kami. Semoga kunjungan Anda menyenangkan dan bermanfaat. Selamat menikmati pengalaman menjelajah website kami!</p>
    </div>
</body>
</html>