<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? $page_title : 'FitZone Fitness Center'; ?></title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Icons (Boxicons & FontAwesome) -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Global CSS (Header & Footer) -->
    <link rel="stylesheet" href="assets/css/global.css">

    <!-- Page Specific CSS -->
    <?php if (isset($page_css)): ?>
        <link rel="stylesheet" href="assets/css/<?= $page_css ?>">
    <?php endif; ?>
</head>
<body>

<!-- NavBar Code -->
<div class="navbar">
    <div class="icon">
        <a href="index.php" class="text-decoration-none">
            <h2 class="logo"><span class="fit">Fit</span>Zone</h2>
        </a>
    </div>
    
    <div class="menu-icon">
        <i class='bx bx-menu'></i>
    </div>

    <div class="menu" id="nav-links">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="FitZone_About.php">About</a></li>
            <li><a href="FitZone_Services.php">Services</a></li>
            <li><a href="FitZone_Team.php">Team</a></li>
            <li><a href="FitZone_Packages.php">Packages</a></li>
            <li><a href="FitZone_Contact.php">Contact</a></li>
        </ul>
    </div>

    <div class="signin-box d-flex align-items-center gap-2">
        <?php if (isset($_SESSION["user_id"])): ?>
            <a href="profile.php" class="signin-btn">
                <?= htmlspecialchars($_SESSION["username"] ?? "Profile") ?>
            </a>
            <a href="logout.php" class="btn btn-sm btn-outline-light">Logout</a>
        <?php else: ?>
            <a href="FitZone_Login.php" class="signin-btn">Log In</a>
        <?php endif; ?>
    </div>
</div>