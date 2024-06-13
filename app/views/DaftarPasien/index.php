<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo BASEURL; ?>/img/I-Care.png" rel="icon">
    <title>Daftar Online Pasien</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style2.css">
</head>
<style>
    body {
        font-family: "Unbounded", sans-serif;
        background: linear-gradient(334deg, #a3efb7, #defff8, #a3efb7);
        background-size: 180% 180%;
        animation: gradient-animation 6s ease infinite;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Ensure the height covers the viewport */
    }

    @keyframes gradient-animation {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }

    .container {
        margin-top: 90px;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 900px;
    }
    h2 {
        text-align: center; /* Center align the heading */
        margin-bottom: 20px;
        color: #333;
    }
    label {
        display: block;
        margin-bottom: 5px;
        color: #555;
    }
    input, select, textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    button {
        font-family: "Unbounded", sans-serif;
        width: 100%;
        padding: 10px;
        background-color: #007BFF;
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
</style>
<body>
    <section>
        <div class="container">

            <img src="./img/I-Care.png" alt="i-care Logo" style="width: auto; height:80px; margin-top:40px; margin-bottom:40px; display: block; margin-left: auto; margin-right: auto;">
            <h2>Daftar Online Pasien</h2>
            <form method="post" action="<?= BASEURL; ?>/Pasien/tambahPasienOnline" enctype="multipart/form-data">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" required>
                
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin">
                  <option value="L" selected>Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
                
                <label for="Tanggal_Lahir">TTL</label>
                <input type="text" id="Tanggal_Lahir" name="Tanggal_Lahir" required>

                <label for="Alamat">Alamat</label>
                <input type="text" id="Alamat" name="Alamat" required>
                
                <label for="Poli">Poli</label>
                <select id="Poli" name="Poli" required>
                    <option value="Umum" selected>Umum</option>
                    <option value="Penyakit Dalam">Penyakit Dalam</option>
                    <option value="Anak">Anak</option>
                    <option value="Saraf">Saraf</option>
                    <option value="Kandungan dan Ginekologi">Kandungan dan Ginekologi</option>
                    <option value="Bedah">Bedah</option>
                    <option value="Kulit dan Kelamin">Kulit dan Kelamin</option>
                    <option value="THT">THT</option>
                    <option value="Mata">Mata</option>
                    <option value="Psikiater">Psikiater</option>
                    <option value="Gigi">Gigi</option>
                </select>
                
                <button type="submit" type="submit">Daftar</button>
            </form>
        </div>
        </div>
    </section>
    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
