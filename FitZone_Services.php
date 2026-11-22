<?php 
$page_title = 'FitZone: Services';
$page_css = 'services.css'; 
include 'includes/header.php'; 
include 'includes/data.php'; 
?>

<!-- Services Section -->
<h1 class="title">Our Services</h1>

<div class="services-container">
    <?php foreach ($services as $key => $service): ?>
        <a href="service-details.php?id=<?= $key ?>" class="service-card-link">
            <div class="service-card">
                <img src="<?= $service['image'] ?>" alt="<?= $service['title'] ?>">
                <h2><?= $service['title'] ?></h2>
                <p><?= $service['short_desc'] ?></p>
                <span class="read-more">View Details <i class='bx bx-right-arrow-alt'></i></span>
            </div>
        </a>
    <?php endforeach; ?>
</div>

<!-- Schedule Table -->
<h1 class="table-title">Service Schedule</h1>

<div class="schedule-container">
    <table class="schedule-table">
        <thead>
            <tr>
                <th>Time</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>09:00 AM</td>
                <td>Yoga</td>
                <td>Cardio</td>
                <td>Personal Training</td>
                <td>Group Training</td>
                <td>Nutrition</td>
                <td>Kids</td>
                <td>Kids</td>
            </tr>
            <tr>
                <td>11:00 AM</td>
                <td>Personal Training</td>
                <td>Personal Training</td>
                <td>Ladies Only</td>
                <td>Ladies Only</td>
                <td>Body Transformation</td>
                <td>Yoga</td>
                <td>Yoga</td>
            </tr>
            <tr>
                <td>01:00 PM</td>
                <td>Ladies Only</td>
                <td>Nutrition</td>
                <td>Body Transformation</td>
                <td>Cardio</td>
                <td>Cardio</td>
                <td>Personal Training</td>
                <td>Personal Training</td>
            </tr>
            <tr>
                <td>03:00 PM</td>
                <td>Cardio</td>
                <td>Group Training</td>
                <td>Ladies Only</td>
                <td>Body Transformation</td>
                <td>Group Training</td>
                <td>Group Training</td>
                <td>-</td>
            </tr>
            <tr>
                <td>05:00 PM</td>
                <td>Yoga</td>
                <td>Body Transformation</td>
                <td>Yoga</td>
                <td>Personal Training</td>
                <td>Personal Training</td>
                <td>Cardio</td>
                <td>-</td>
            </tr>
        </tbody>
    </table>
</div>

<?php include 'includes/footer.php'; ?>