<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f7f7;
        }

        
        form {
            width: 400px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
        }

        h1 {
            text-align: center;
            color: #000000;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #3498db;
            text-decoration: none;
        }

        a : hover [href="show.php"] { 
            background-color: #2980b9;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: calc(100% - 16px);
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="file"] {
            border: none;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            padding: 10px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    
    
    <form action="./backend/create.php" method="post" enctype="multipart/form-data">
        <h1>TAMBAH PRODUK</h1>
        <a href="show.php">LIHAT DATA PRODUK</a>
        
        <label for="name">Nama Produk:</label>
        <input type="text" name="name" placeholder="Input nama produk">

        <label for="price">Harga :</label>
        <input type="number" name="price" placeholder="Input harga produk">

        <label for="gambar">Gambar Produk :</label>
        <input type="file" name="image">

        <input type="submit" value="TAMBAH PRODUK" name="submit">
    </form>
</body>

</html>
