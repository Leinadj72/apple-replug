<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Replug</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-light" href="<?= base_url('/') ?>">
                🍏 Apple <span class="text-warning">Replug</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() == '' ? 'active fw-bold text-warning' : '' ?>" href="<?= base_url('/') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() == 'products' ? 'active fw-bold text-warning' : '' ?>" href="<?= base_url('/products') ?>">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() == 'swap' ? 'active fw-bold text-warning' : '' ?>" href="<?= base_url('/swap') ?>">Swap Deals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() == 'repair' ? 'active fw-bold text-warning' : '' ?>" href="<?= base_url('/repair') ?>">Repair</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() == 'about' ? 'active fw-bold text-warning' : '' ?>" href="<?= base_url('/about') ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() == 'services' ? 'active fw-bold text-warning' : '' ?>" href="<?= base_url('/services') ?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() == 'contact' ? 'active fw-bold text-warning' : '' ?>" href="<?= base_url('/contact') ?>">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Start Main Content -->
    <main class="container mt-5">