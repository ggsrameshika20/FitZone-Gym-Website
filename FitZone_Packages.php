<?php 
$page_title = 'FitZone: Packages';
$page_css = 'package.css'; 
include 'includes/header.php'; 
?>
	
<section class="pricing-section">

	<!-- Price Section -->
	<h1 class="packages-title">Choose Your Plan</h1>

	<div class="pricing-container">

		<!-- Basic section -->
		<div class="price-box">
			<h3>Perfect for getting started</h3>
			<h1>LKR 15000 <span>/month</span></h1>

			<ul>
				<li>Access to gym equipment</li>
				<li>Locker room access</li>
				<li>2 group classes per week</li>
				<li>Basic fitness assessment</li>
				<li>Mobile app access</li>
			</ul>

			<a href="FitZone_Contact.php?plan=Basic" class="btn-basic d-block text-center text-decoration-none">Select Basic</a>
		</div>

		<!-- Pro / Standard -->
		<div class="price-box highlight">
			<h3>Most popular choice</h3>
			<h1>LKR 20000 <span>/month</span></h1>

			<ul>
				<li>Everything in Basic</li>
				<li>Unlimited group classes</li>
				<li>2 personal training sessions/month</li>
				<li>Nutrition consultation</li>
				<li>Priority class booking</li>
				<li>Guest passes (2/month)</li>
			</ul>

			<a href="FitZone_Contact.php?plan=Standard" class="btn-pro d-block text-center text-decoration-none">Select Standard</a>
		</div>

		<!-- Elite / Premium -->
		<div class="price-box">
			<h3>Ultimate fitness experience</h3>
			<h1>LKR 30000 <span>/month</span></h1>

			<ul>
				<li>Everything in Pro</li>
				<li>8 personal training sessions/month</li>
				<li>Custom meal plans</li>
				<li>Body composition analysis</li>
				<li>Unlimited guest passes</li>
				<li>Private locker</li>
				<li>Exclusive member events</li>
			</ul>

			<a href="FitZone_Contact.php?plan=Premium" class="btn-basic d-block text-center text-decoration-none">Select Premium</a>
		</div>

	</div>

</section>
			
<!-- Benefit section -->
<section class="benefits-section">

	<h1 class="benefits-title">Membership Benefits</h1>
	
	<div class="benefits-container">
	
		<div class="benefit-box">
			<h2>No Long-Term Commitment</h2>
			<p>Cancel anytime with no penalties or hidden fees. We believe in earning your membership every month.</p>
		</div> 
	
		<div class="benefit-box">
			<h2>Free Trial</h2>
			<p>Try any membership for 7 days completely free. Experience FitZone before you commit.</p>
		</div>

		<div class="benefit-box">
			<h2>Freeze Options</h2>
			<p>Life happens. Freeze your membership for up to 3 months per year at no additional cost.</p>
		</div>

		<div class="benefit-box">
			<h2>Family Discounts</h2>
			<p>Add family members to your plan and save up to 30% on additional memberships.</p>
		</div>

	</div>
	
</section>

<?php include 'includes/footer.php'; ?>