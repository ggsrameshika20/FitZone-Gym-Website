<?php
session_start();
require_once 'includes/db.php';

$page_title = 'FitZone: Log In';
$page_css = 'login.css';

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $loginInput = trim($_POST["username"] ?? "");
    $password   = $_POST["password"] ?? "";

    if (empty($loginInput) || empty($password)) {
        $error = "Please enter both username/email and password.";
    } else {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :login OR email = :login LIMIT 1");
        $stmt->execute([":login" => $loginInput]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user["password"])) {
            session_regenerate_id(true);
            $_SESSION["user_id"]   = $user["id"];
            $_SESSION["username"]  = $user["username"];
            $_SESSION["full_name"] = $user["full_name"];
            $_SESSION["role"]      = $user["role"];

            header("Location: index.php");
            exit;
        } else {
            $error = "Invalid username/email or password.";
        }
    }
}

include 'includes/header.php';
?>

<section class="login-section">
    <div class="wrapper">
        <form action="FitZone_Login.php" method="POST" id="loginForm">
            <h1>Login</h1>

            <?php if ($error): ?>
                <div class="alert alert-danger py-2 mt-3 small text-center">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <!-- Username -->
            <div class="input-box">
                <input type="text" name="username" placeholder="Username or Email" value="<?= htmlspecialchars($_POST['username'] ?? '') ?>" required>
                <i class='bx bx-user'></i> 
            </div>
            
            <!-- Password -->
            <div class="input-box">
                <input type="password" name="password" id="loginPassword" placeholder="Password" required>
                <i class='bx bx-lock' id="togglePassword" style="cursor: pointer;"></i> 
            </div>
            
            <!-- Remember & Forgot -->
            <div class="remember-forgot">
                <label><input type="checkbox" name="remember"> Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            
            <!-- Button -->
            <button type="submit" class="login-btn">Login</button>
            
            <!-- Register -->
            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>