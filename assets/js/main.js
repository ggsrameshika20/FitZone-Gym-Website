document.addEventListener("DOMContentLoaded", () => {
    // 1. Mobile Menu Toggle
    const menuIcon = document.querySelector(".menu-icon");
    const menuList = document.querySelector(".menu ul");

    if (menuIcon && menuList) {
        menuIcon.addEventListener("click", () => {
            menuList.classList.toggle("show");
        });
    }

    // 2. Highlight Current Page Link in Navbar & Footer
    const currentPage = window.location.pathname.split("/").pop() || "index.php";
    const allLinks = document.querySelectorAll(".menu ul li a, .footer-links ul li a");

    allLinks.forEach((link) => {
        const hrefPage = link.getAttribute("href");
        if (hrefPage === currentPage) {
            link.style.color = "#ff7200";
            link.classList.add("active-link");
        }
    });

    // 3. Login / Register Password Show & Hide Toggle
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("loginPassword");

    if (togglePassword && passwordInput) {
        togglePassword.addEventListener("click", () => {
            const isPassword = passwordInput.getAttribute("type") === "password";
            passwordInput.setAttribute("type", isPassword ? "text" : "password");

            togglePassword.classList.toggle("bx-lock");
            togglePassword.classList.toggle("bx-lock-open");
        });
    }

    // 4. BMI Calculator Logic
    const bmiForm = document.getElementById("bmiForm");
    const heightInput = document.getElementById("bmiHeight");
    const weightInput = document.getElementById("bmiWeight");
    const resultBox = document.getElementById("bmiResult");

    function calculateAndShowBMI(event) {
        if (event) {
            event.preventDefault();
        }

        if (!heightInput || !weightInput || !resultBox) return;

        const heightCm = parseFloat(heightInput.value);
        const weightKg = parseFloat(weightInput.value);

        if (isNaN(heightCm) || isNaN(weightKg) || heightCm <= 0 || weightKg <= 0) {
            resultBox.innerHTML = `
                <div class="alert alert-danger mt-3 mb-0 py-2">
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
            <div class="p-3 rounded-3 mt-3" style="background: rgba(255,255,255,0.06); border-left: 4px solid ${badgeColor};">
                <h4 class="mb-1 text-white">Your BMI: <span style="color: ${badgeColor};">${bmi}</span></h4>
                <p class="mb-0" style="color: ${badgeColor}; font-weight: 600;">Status: ${category}</p>
            </div>
        `;
    }

    if (bmiForm) {
        bmiForm.addEventListener("submit", calculateAndShowBMI);
    }
});