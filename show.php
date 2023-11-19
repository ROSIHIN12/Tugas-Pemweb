<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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

        h3 {
            text-align: center;
            
        }

        
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-align: center;
            text-decoration: none;
            padding: 8px 16px;
            color: #333;
            border-radius: 4px;
            display: inline-block;
            margin-right: 5px;
        
        }

        a:hover {
            background-color: #ddd;
        }
                 
    </style>
</head>
<body>
    <nav>
        <a href="admin.php">Dashboard</a>
        <a href="show.php">Data Produk</a>
        <a href="./backend/logout.php" style="float:right;">Logout</a>
    </nav>
    <h1>DATA PRODUK</h1>


    <h3 style="color:blue;text-align:center;"><a href="create.php">TAMBAH DATA PRODUK</a></h3>
    
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Gambar Produk</th>
                <th>Unduh</th>
                <th>Pilihan</th>

            </tr>
        </thead>
        <tbody>
            <?php
                require './config/db.php';

                $products = mysqli_query($db_connect,"SELECT * FROM products");
                $no = 1;

                while($row = mysqli_fetch_assoc($products)) {
            ?>
                <tr>
                    <td><?=$no++;?></td>
                    <td><?=$row['name'];?></td>
                    <td><?=$row['price'];?></td>
                    <td><img src="<?=$row['image'];?>" width="100"></td>
                    <td><a href="download.php?id=<?=$row['id'];?>">Unduh</a></td>
                    <td>
                        <a href="edit.php?id=<?=$row['id'];?>">Ubah</a>
                        <a href="delete.php?id=<?=$row['id'];?>" onclick=" return confirm('Apakah anda yakin ingin menghapus data produk ?');">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
