<?php
// Mendapatkan nama halaman saat ini untuk menentukan menu yang aktif
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal Management</title>
    <!-- Link ke CSS Bootstrap atau stylesheet lain -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">JKB Lecture Information</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= ($current_page == 'index.php') ? 'active' : '' ?>">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item <?= ($current_page == 'finished.php') ? 'active' : '' ?>">
                    <a class="nav-link" href="finished.php">Finished Journals</a>
                </li>
                <li class="nav-item <?= ($current_page == 'unfinished.php') ? 'active' : '' ?>">
                    <a class="nav-link" href="unfinished.php">Unfinished Journals</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">