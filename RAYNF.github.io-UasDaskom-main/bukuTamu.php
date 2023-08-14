<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BukuT Tamu PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            *
            {
                box-sizing: border-box;
            }
            body
            {
                margin: 0;
            }
            .header
            {
                background-color: #f1f1f1;
                padding: 20px;
                text-align: center;
            }
            .topnav
            {
                overflow: hidden;
                background-color: #333;
            }
            .topnav a
            {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
            .topnav a:hover
            {
                background-color: #ddd;
                color: black;
            }
            input[type=text],select
            {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type=submit]
            {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            input[type=submit]:hover
            {
                background-color: #45a049;
            }
            div
            {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }
            textarea
            {
                width: 100%;
                height: 150px;
                padding: 12px 20px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                font-size: 16px;
                resize: none;
            }
            #tamu
            {
                font-family: sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            #tamu td, #tamu th
            {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #tamu tr:nth-child(even) 
            {
                background-color: #f2f2f2
            }
            #tamu tr:hover
            {
                background-color: #ddd;
            }
            #tamu th
            {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
            </style>
        </head>

        <body>

        <div class="header">
            <h1>Tutorial Web</h1>
            <p>Mempelajari Dasar Pembuatan Web</p>
        </div>

        <div class="topnav">
            <a href="">Home</a>
            <a href="">JavaScript</a>
            <a href="">PHP</a>
            <a href="">Buku Tamu</a>
            <a href="">Registrasi</a>
        </div>

        <div class="row">
            <div class="column">
                <h2>Buku Tamu</h2>
                <div>
                    <form method="POST" action="<?=$_server['PHP_SELF'];?>">
                    <label>Nama</label>
                    <input type="text" name="fnama" placeholder="Nama anda..">
                    <label>Email</label>
                    <input type="text" name="femail" placeholder="Email..">
                    <label>Provinsi</label>
                    <select id="prov" name="fprovinsi">
                        <option value="Jateng">Jateng</option>
                        <option value="Jabar">Jabar</option>
                        <option value="Jatim">Jatim</option>
                    </select>

                    <label>Pesan</label>
                    <textarea name="fpesan">
                    </textarea>
                    <input type="submit" value="Submit">
            </form>
        </div>

        <div>
            <?php
                if (isset($_POST['fnama']))
                {
                    $nama=$_POST['fnama'];
                    $email=$_POST['Femail'];
                    $prov=$_POST['fprovinsi'];
                    $pesan=$_POST['fpesan'];

                    echo "Daftar Tamu";
                    echo "<table id='tamu'>";
                    echo "<tr><th>No</th><th>Nama</th><th>Email</th><th>Provinsi</th><th>Pesan</th></tr>";
                    echo "<tr><td>1</td><td>$nama</td><td>$email</td><td>$prov</td><td>$pesan</td></tr>";
                }
            ?>
                        </div>
                    </div>
                </div>
        </body>
</html>