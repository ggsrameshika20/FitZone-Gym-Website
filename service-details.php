<?php 
$page_title = 'FitZone: Service Details';
$page_css = 'services.css'; 
include 'includes/header.php'; 
include 'includes/data.php'; 

$id = isset($_GET['id']) ? $_GET['id'] : '';
$service = isset($services[$id]) ? $services[$id] : null;
?>

<div class="container" style="padding-top: 130px; padding-bottom: 80px;">
    <?php if ($service): ?>
        <div class="row align-items-center bg-dark p-4 p-md-5 rounded-4 border border-secondary">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img src="<?= $service['image'] ?>" class="img-fluid rounded-3 shadow" alt="<?= $service['title'] ?>">
            </div>
            <div class="col-lg-7 text-white ps-lg-5">
                <span class="badge bg-warning text-dark mb-2 px-3 py-2"><?= $service['level'] ?></span>
                <h1 class="fw-bold" style="color: #ff7b00;"><?= $service['title'] ?></h1>
                <h4 class="text-light my-3"><?= $service['price'] ?> <small class="text-secondary fs-6">| <?= $service['duration'] ?></small></h4>
                <p class="text-light opacity-75 lh-lg"><?= $service['full_desc'] ?></p>
                
                <h5 class="mt-4 mb-3" style="color: #ff7b00;">Program Highlights:</h5>
                <ul class="list-unstyled">
                    <?php foreach ($service['highlights'] as $item): ?>
                        <li class="mb-2"><i class="fa-solid fa-check me-2" style="color: #ff7b00;"></i> <?= $item ?></li>
                    <?php endforeach; ?>
                </ul>

                <div class="mt-4 d-flex gap-3">
                    <a href="FitZone_Contact.php?service=<?= urlencode($service['title']) ?>" class="btn btn-lg fw-bold" style="background: #ff7b00; color: black;">Join Now</a>
                    <a href="FitZone_Services.php" class="btn btn-outline-light btn-lg">Back to Services</a>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="text-center text-white py-5">
            <h2>Service Not Found!</h2>
            <a href="FitZone_Services.php" class="btn btn-warning mt-3">Back to All Services</a>
        </div>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>