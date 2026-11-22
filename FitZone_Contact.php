<?php
require_once 'includes/db.php';

$page_title = 'FitZone: Contact';
$page_css = 'contact.css';

$contactSuccess = "";
$contactError = "";

$auto_msg = "";
if (isset($_GET['plan'])) {
	$auto_msg = "Hi FitZone, I would like to register for the " . htmlspecialchars($_GET['plan']) . " Membership Plan.";
} elseif (isset($_GET['service'])) {
	$auto_msg = "Hi FitZone, I am interested in joining the " . htmlspecialchars($_GET['service']) . " program.";
} elseif (isset($_GET['trainer'])) {
	$auto_msg = "Hi FitZone, I would like to book a training session with " . htmlspecialchars($_GET['trainer']) . ".";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$name    = trim($_POST["name"] ?? "");
	$email   = trim($_POST["email"] ?? "");
	$phone   = trim($_POST["phone"] ?? "");
	$message = trim($_POST["message"] ?? "");

	if (empty($name) || empty($email) || empty($message)) {
		$contactError = "Please fill in your name, email, and message.";
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$contactError = "Please enter a valid email address.";
	} else {
		$fullMessage = !empty($phone) ? "Phone: " . $phone . "\n\n" . $message : $message;

		$stmt = $pdo->prepare("
			INSERT INTO contact_messages (name, email, subject, message)
			VALUES (:name, :email, :subject, :message)
		");
		$stmt->execute([
			":name"    => $name,
			":email"   => $email,
			":subject" => "Website Contact Form",
			":message" => $fullMessage
		]);

		$contactSuccess = "Thank you! Your message has been sent to FitZone.";
		$auto_msg = "";
	}
}

include 'includes/header.php';
?>
	
		<section class="contact-main">
	
			<!-- Contact info boxes -->
			
			<h1 class="title">Get In Touch</h1>
			<div class="title-border"></div>

			<div class="contact-section">

				<div class="contact-box">
					<i class='bx bx-phone'></i>
					<h3>Phone</h3>
					<p>(+94) 74 040 5981</p>
				</div>

				<div class="contact-box">
					<i class='bx bx-envelope'></i>
					<h3>Email</h3>
					<p>info@fitzone.com</p>
				</div>

				<div class="contact-box">
					<i class='bx bx-map'></i>
					<h3>Address</h3>
					<p>123 Malwaththa Road, Galle, Sri Lanka</p>
				</div>

				<div class="contact-box">
					<i class='bx bx-time-five'></i>
					<h3>Hours</h3>
					<p>Mon–Sun: 9:00 AM – 7:00 PM</p>
				</div>

			</div>

			<!-- Contact form -->
			<h2 class="form-title">Send Us a Message</h2>

			<div class="contact-form-wrapper">

				<form action="FitZone_Contact.php" method="POST" class="contact-form">

					<?php if ($contactError): ?>
						<div class="alert alert-danger text-center mb-3">
							<?= htmlspecialchars($contactError) ?>
						</div>
					<?php endif; ?>

					<?php if ($contactSuccess): ?>
						<div class="alert alert-success text-center mb-3">
							<?= htmlspecialchars($contactSuccess) ?>
						</div>
					<?php endif; ?>

					<input type="text" name="name" class="c-text" placeholder="Name" value="<?= empty($contactSuccess) ? htmlspecialchars($_POST['name'] ?? '') : '' ?>" required>
					<input type="text" name="email" class="c-text" placeholder="Email" value="<?= empty($contactSuccess) ? htmlspecialchars($_POST['email'] ?? '') : '' ?>" required>
					<input type="text" name="phone" class="c-text" placeholder="Phone" value="<?= empty($contactSuccess) ? htmlspecialchars($_POST['phone'] ?? '') : '' ?>" required>
					<textarea name="message" class="c-text" placeholder="Your Message"><?= empty($contactSuccess) ? htmlspecialchars($_POST['message'] ?? $auto_msg) : '' ?></textarea>
					<input type="submit" class="c-btn" value="Send Message">
				</form>

			</div>
			
		</section>
		<?php include 'includes/footer.php'; ?>