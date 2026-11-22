<?php
session_start();
require_once 'includes/db.php';

if (!isset($_SESSION["user_id"])) {
    header("Location: FitZone_Login.php");
    exit;
}

$page_title = 'FitZone: My Profile';
$page_css = 'login.css';

$stmt = $pdo->prepare("SELECT id, full_name, username, email, phone, role, created_at FROM users WHERE id = :id LIMIT 1");
$stmt->execute([":id" => $_SESSION["user_id"]]);
$user = $stmt->fetch();

if (!$user) {
    header("Location: logout.php");
    exit;
}

include 'includes/header.php';
?>

<section class="login-section">
    <div class="wrapper" style="max-width: 520px;">
        <h1 class="mb-2">My Profile</h1>
        <p class="text-center small mb-4" style="color: #cbd5e1;">Welcome back to FitZone, <?= htmlspecialchars($user["full_name"]) ?>!</p>

        <div class="p-3 rounded-3 mb-4" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
            <div class="mb-2"><strong style="color: #ff7b00;">Full Name:</strong> <span class="text-white"><?= htmlspecialchars($user["full_name"]) ?></span></div>
            <div class="mb-2"><strong style="color: #ff7b00;">Username:</strong> <span class="text-white"><?= htmlspecialchars($user["username"]) ?></span></div>
            <div class="mb-2"><strong style="color: #ff7b00;">Email:</strong> <span class="text-white"><?= htmlspecialchars($user["email"]) ?></span></div>
            <div class="mb-2"><strong style="color: #ff7b00;">Phone:</strong> <span class="text-white"><?= htmlspecialchars($user["phone"] ?: "Not provided") ?></span></div>
            <div class="mb-2"><strong style="color: #ff7b00;">Member Type:</strong> <span class="text-uppercase text-white"><?= htmlspecialchars($user["role"]) ?></span></div>
            <div><strong style="color: #ff7b00;">Joined:</strong> <span class="text-white"><?= htmlspecialchars(date("M d, Y", strtotime($user["created_at"]))) ?></span></div>
        </div>

        <div class="d-flex gap-2 flex-wrap">
            <a href="FitZone_Packages.php" class="login-btn d-flex align-items-center justify-content-center text-decoration-none flex-grow-1">Explore Plans</a>
            <a href="logout.php" class="btn btn-outline-light rounded-pill px-4 d-flex align-items-center">Logout</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>