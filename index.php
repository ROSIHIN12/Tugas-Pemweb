<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            max-width: 300px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h4 {
            color: #666;
            margin-bottom: 20px;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #1717F1;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        h4 a {
            color: #3498db;
            text-decoration: none;
        }

        h4 a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>Halaman Login</h1>
    <h4>Silahkan masukkan username dan password</h4>
    
    <form action="./backend/login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required><br><br>
        
        <input type="submit" value="Login" name="submit">
    </form>

    <h4>Jika Anda belum memiliki akun, silahkan klik <a href="register.php">Registrasi</a></h4><br>

</body>
</html>
