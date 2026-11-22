# FitZone — Gym & Fitness Center Web Application

A responsive fitness center web application built with **PHP (PDO, Sessions)**, **MySQL**, **Bootstrap 5**, and **custom CSS**, featuring user authentication, member profiles, BMI calculation, service/trainer views, membership packages, and database-backed contact inquiries.

## Key Features
- **Authentication & Sessions:** User registration, session-based login/logout (`register.php`, `FitZone_Login.php`, `logout.php`), and a protected member profile page (`profile.php`).
- **Interactive BMI Calculator:** Instant Body Mass Index calculation and category feedback on the landing page (`index.php`).
- **Database Integration:** PDO-based database connectivity (`includes/db.php`) storing user accounts and contact submissions.
- **Responsive UI:** Built with Bootstrap 5 and custom stylesheets across Home, About, Services, Team, Packages, and Contact pages.

## Tech Stack
- **Backend:** PHP (PDO, Session Management)
- **Database:** MySQL
- **Frontend:** HTML5, CSS3, Bootstrap 5, JavaScript

## Live Demo
- **Hosted URL:** http://fitzone-lk.free.nf

## Local Setup (XAMPP)
1. Clone or download the repository into your web root (e.g., `htdocs/fitzone_web`).
2. Create a MySQL database named `fitzone_db` in phpMyAdmin and import your SQL schema.
3. Update `includes/db.php` (or set `DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS`) if using custom credentials.
4. Open `http://localhost/fitzone_web/index.php` in your browser.