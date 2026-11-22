<?php 
$page_title = 'FitZone: Team';
$page_css = 'team.css'; 
include 'includes/header.php'; 
include 'includes/data.php'; 
?>

<section class="team-section">
    <!-- Team Section -->
    <h1 class="team-title">Our Training Team</h1>

    <div class="team-container">
        <?php foreach ($trainers as $id => $trainer): ?>
            <a href="trainer-details.php?id=<?= $id ?>" class="team-card-link">
                <div class="team-card">
                    <img src="<?= $trainer['image'] ?>" alt="<?= $trainer['name'] ?>">
                    <h3><?= $trainer['name'] ?></h3>
                    <p class="role"><?= $trainer['role'] ?></p>
                
                    <div class="trainer-info">
                        <ul>
                            <li><strong>Experience:</strong> <?= $trainer['experience'] ?></li>
                            <li><strong>Specialties:</strong> <?= $trainer['specialties'] ?></li>
                            <li><strong>Certified:</strong> <?= $trainer['certified'] ?></li>
                        </ul>
                    </div>
                    <span class="view-profile-btn">View Full Profile <i class='bx bx-right-arrow-alt'></i></span>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>