<?php 
$page_title = 'FitZone: Trainer Profile';
$page_css = 'team.css'; 
include 'includes/header.php'; 
include 'includes/data.php'; 

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$trainer = isset($trainers[$id]) ? $trainers[$id] : null;
?>

<div class="container" style="padding-top: 130px; padding-bottom: 80px;">
    <?php if ($trainer): ?>
        <div class="row align-items-center p-4 p-md-5 rounded-4 border border-secondary" style="background: rgba(15, 25, 42, 0.92);">
            <div class="col-lg-4 mb-4 mb-lg-0 text-center">
                <img src="<?= $trainer['image'] ?>" class="img-fluid rounded-4 shadow" style="max-height: 400px; object-fit: cover;" alt="<?= $trainer['name'] ?>">
            </div>
            <div class="col-lg-8 text-white ps-lg-5">
                <span class="badge mb-2 px-3 py-2 text-dark fw-bold" style="background: #ff7b00;"><?= $trainer['certified'] ?> Certified</span>
                <h1 class="fw-bold display-5" style="color: #ff7b00;"><?= $trainer['name'] ?></h1>
                <h4 class="text-light mb-3"><?= $trainer['role'] ?></h4>
                <hr class="border-secondary">
                
                <div class="row my-3">
                    <div class="col-sm-6 mb-2">
                        <strong style="color: #ff7b00;">Experience:</strong> <?= $trainer['experience'] ?>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <strong style="color: #ff7b00;">Specialties:</strong> <?= $trainer['specialties'] ?>
                    </div>
                </div>

                <p class="text-light opacity-75 lh-lg mt-3"><?= $trainer['bio'] ?></p>

                <div class="mt-4 d-flex gap-3 flex-wrap">
                    <a href="FitZone_Contact.php?trainer=<?= urlencode($trainer['name']) ?>" class="btn btn-lg fw-bold" style="background: #ff7b00; color: black;">Book a Session</a>
                    <a href="FitZone_Team.php" class="btn btn-outline-light btn-lg">Back to Team</a>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="text-center text-white py-5 bg-dark rounded-4">
            <h2>Trainer Not Found!</h2>
            <a href="FitZone_Team.php" class="btn btn-warning mt-3">Back to Training Team</a>
        </div>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>