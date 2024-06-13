<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I-Care</title>
    <link href="<?php echo BASEURL; ?>/img/I-Care.png" rel="icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style2.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container d-flex justify-content-between align-items-center">
            <img src="<?php echo BASEURL; ?>/img/I-Care.png" alt="img" style="widht: 30px; height:30px;">
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="<?php echo BASEURL; ?>/Homepage">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= BASEURL ?>/JadwalDokter">Jadwal Dokter</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= BASEURL ?>/DaftarPasien">DaftarPasien</a></li>
                </ul>
            </nav>
            <div>
                <a href="<?= BASEURL ?>/Login/logout" class="btn btn-outline-primary">Logout</a>
            </div>
        </div>
    </header>
