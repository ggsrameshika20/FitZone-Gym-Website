<?php 
$page_title = 'FitZone: Home';
$page_css = 'index.css'; 
include 'includes/header.php'; 
?>

<div class="main">
    <!-- Content Section -->
    <div class="content">
        <h1>Transform <span>Your</span><br> Body</h1>

        <p class="par">
            Join FitZone and experience the ultimate fitness journey with <br>expert trainers,
            premium equipment, and a supportive community.
        </p>

        <button class="cn"><a href="FitZone_Services.php">View Classes</a></button>
        <button class="cn-en"><a href="FitZone_Login.php">Log In Free</a></button>
    </div>
</div>

<!-- Second Section -->
<section class="features">
    <div class="feature-box">
        <i class="fa">&#xf0e7;</i>
        <h3>Expert Training</h3>
        <p>Professional trainers with years of experience</p>
    </div>

    <div class="feature-box">
        <i class='bx bx-group'></i>
        <h3>Community</h3>
        <p>Join a supportive fitness community</p>
    </div>

    <div class="feature-box">
        <i class='bx bx-trophy'></i>
        <h3>Results</h3>
        <p>Proven programs that deliver results</p>
    </div>

    <div class="feature-box">
        <i class='bx bx-time-five'></i>
        <h3>Flexible Hours</h3>
        <p>Open 24/7 for your convenience</p>
    </div>
</section>

<!-- Thin Divider -->
<div style="background: #0d1a2b; padding: 0 80px;">
    <hr style="margin: 0; border: 0; border-top: 1px solid rgba(255, 255, 255, 0.12);">
</div>

<!-- Why us section -->
<section class="hero">
    <div class="hero-text">
        <h1>Why Choose <br> <span>FitZone?</span></h1>

        <p>
            We’re more than a gym — we’re a community built to help you reach your goals with 
            expert trainers, modern equipment, and flexible membership options.
        </p>

        <ul class="hero-list">
            <li><i class="fa-solid fa-check"></i> State-of-the-art equipment</li>
            <li><i class="fa-solid fa-check"></i> Certified personal trainers</li>
            <li><i class="fa-solid fa-check"></i> Diverse fitness classes</li>
            <li><i class="fa-solid fa-check"></i> Flexible membership plans</li>
            <li><i class="fa-solid fa-check"></i> Flexible time table</li>
        </ul>

        <div class="hero-buttons">
            <a href="FitZone_Packages.php" class="btn-primary">View Pricing Plans</a>
        </div>
    </div>

    <div class="hero-img">
        <img src="assets/images/pic14.jpg" alt="Fitness Model">
    </div>
</section>

<!-- Thin Divider Before BMI -->
<div style="background: #0d1a2b; padding: 0 80px;">
    <hr style="margin: 0; border: 0; border-top: 1px solid rgba(255, 255, 255, 0.12);">
</div>

<!-- BMI Calculator Section -->
<section class="py-5" style="background: #0d1a2b; color: white;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="p-4 p-md-5 rounded-4" style="background: #0b1623; border: 1px solid rgba(255,255,255,0.1);">
                    <h2 class="fw-bold mb-2 text-center" style="color: #ff7200;">Calculate Your BMI</h2>
                    <p class="text-center mb-4" style="color: #cbd5e1;">Check your Body Mass Index and find the right starting point for your fitness journey.</p>

                    <form id="bmiForm" class="row g-3" novalidate>
                        <div class="col-md-6">
                            <label for="bmiHeight" class="form-label">Height (cm)</label>
                            <input type="number" step="0.1" id="bmiHeight" class="form-control bg-dark text-white border-secondary" placeholder="e.g. 170" required>
                        </div>
                        <div class="col-md-6">
                            <label for="bmiWeight" class="form-label">Weight (kg)</label>
                            <input type="number" step="0.1" id="bmiWeight" class="form-control bg-dark text-white border-secondary" placeholder="e.g. 65" required>
                        </div>
                        <div class="col-12 mt-3">
                            <button type="submit" id="bmiSubmitBtn" class="btn w-100 fw-bold py-2" style="background: #ff7200; color: black;">Calculate BMI</button>
                        </div>
                    </form>

                    <div id="bmiResult" class="mt-3"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const bmiForm = document.getElementById("bmiForm");
    const heightInput = document.getElementById("bmiHeight");
    const weightInput = document.getElementById("bmiWeight");
    const resultBox = document.getElementById("bmiResult");

    if (bmiForm && heightInput && weightInput && resultBox) {
        bmiForm.addEventListener("submit", function (e) {
            e.preventDefault();

            const heightCm = parseFloat(heightInput.value);
            const weightKg = parseFloat(weightInput.value);

            if (isNaN(heightCm) || isNaN(weightKg) || heightCm <= 0 || weightKg <= 0) {
                resultBox.innerHTML = `
                    <div class="alert alert-danger mb-0 py-2">
                        Please enter valid height (cm) and weight (kg) values.
                    </div>
                `;
                return;
            }

            const heightM = heightCm / 100;
            const bmiValue = weightKg / (heightM * heightM);
            const bmi = bmiValue.toFixed(1);

            let category = "";
            let badgeColor = "";

            if (bmiValue < 18.5) {
                category = "Underweight";
                badgeColor = "#38bdf8";
            } else if (bmiValue < 25) {
                category = "Normal Weight";
                badgeColor = "#22c55e";
            } else if (bmiValue < 30) {
                category = "Overweight";
                badgeColor = "#ff7b00";
            } else {
                category = "Obese";
                badgeColor = "#ef4444";
            }

            resultBox.innerHTML = `
                <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.06); border-left: 4px solid ${badgeColor};">
                    <h4 class="mb-1 text-white">Your BMI: <span style="color: ${badgeColor};">${bmi}</span></h4>
                    <p class="mb-0" style="color: ${badgeColor}; font-weight: 600;">Status: ${category}</p>
                </div>
            `;
        });
    }
});
</script>

<?php include 'includes/footer.php'; ?>