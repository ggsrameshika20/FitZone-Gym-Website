<?php
session_start();
require_once 'includes/db.php';

$page_title = 'FitZone: Register';
$page_css = 'login.css';

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $full_name = trim($_POST["full_name"] ?? "");
    $username  = trim($_POST["username"] ?? "");
    $email     = trim($_POST["email"] ?? "");
    $phone     = trim($_POST["phone"] ?? "");
    $password  = $_POST["password"] ?? "";
    $confirm   = $_POST["confirm_password"] ?? "";

    if (empty($full_name) || empty($username) || empty($email) || empty($password)) {
        $error = "Please fill in all required fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters long.";
    } elseif ($password !== $confirm) {
        $error = "Passwords do not match.";
    } else {
        // Username හෝ Email දැනටමත් තියෙනවද බැලීම
        $checkStmt = $pdo->prepare("SELECT id FROM users WHERE username = :username OR email = :email LIMIT 1");
        $checkStmt->execute([
            ":username" => $username,
            ":email"    => $email
        ]);

        if ($checkStmt->fetch()) {
            $error = "Username or email is already registered.";
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $insertStmt = $pdo->prepare("
                INSERT INTO users (full_name, username, email, phone, password)
                VALUES (:full_name, :username, :email, :phone, :password)
            ");

            $insertStmt->execute([
                ":full_name" => $full_name,
                ":username"  => $username,
                ":email"     => $email,
                ":phone"     => $phone,
                ":password"  => $hashedPassword
            ]);

            $success = "Account created successfully! You can now log in.";
        }
    }
}

include 'includes/header.php';
?>

<section class="login-section">
    <div class="wrapper" style="max-width: 460px;">
        <form action="register.php" method="POST" id="registerForm">
            <h1>Register</h1>

            <?php if ($error): ?>
                <div class="alert alert-danger py-2 mt-3 small text-center">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <?php if ($success): ?>
                <div class="alert alert-success py-2 mt-3 small text-center">
                    <?= htmlspecialchars($success) ?> <a href="FitZone_Login.php" class="fw-bold text-dark">Login here</a>
                </div>
            <?php endif; ?>

            <div class="input-box">
                <input type="text" name="full_name" placeholder="Full Name" value="<?= htmlspecialchars($_POST['full_name'] ?? '') ?>" required>
                <i class='bx bx-id-card'></i>
            </div>

            <div class="input-box">
                <input type="text" name="username" placeholder="Username" value="<?= htmlspecialchars($_POST['username'] ?? '') ?>" required>
                <i class='bx bx-user'></i>
            </div>

            <div class="input-box">
                <input type="email" name="email" placeholder="Email Address" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
                <i class='bx bx-envelope'></i>
            </div>

            <div class="input-box">
                <input type="text" name="phone" placeholder="Phone Number (Optional)" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
                <i class='bx bx-phone'></i>
            </div>

            <div class="input-box">
                <input type="password" name="password" id="loginPassword" placeholder="Password (min 6 chars)" required>
                <i class='bx bx-lock' id="togglePassword" style="cursor: pointer;"></i>
            </div>

            <div class="input-box">
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <i class='bx bx-check-shield'></i>
            </div>

            <button type="submit" class="login-btn">Create Account</button>

            <div class="register-link">
                <p>Already have an account? <a href="FitZone_Login.php">Login</a></p>
            </div>
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>