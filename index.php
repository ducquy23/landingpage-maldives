<?php
$pageTitle = 'Maldives Paradise - Tour Du Lịch Sang Trọng';
?>
<!DOCTYPE html>

<html class="light" lang="vi">

<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<title><?php echo $pageTitle; ?></title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com" rel="preconnect"/>
	<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;300;400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
	<!-- Tailwind CSS -->
	<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
	<!-- Tailwind Config -->
	<script id="tailwind-config">
		tailwind.config = {
			darkMode: "class",
			theme: {
				extend: {
					colors: {
						"primary": "#38e5d4",
						"primary-dark": "#2ccbc1",
						"secondary": "#111717",
						"background-light": "#f6f8f8",
						"background-dark": "#11211f",
					},
					fontFamily: {
						"display": ["Be Vietnam Pro", "sans-serif"]
					},
					borderRadius: {
						"DEFAULT": "0.25rem",
						"lg": "0.5rem",
						"xl": "0.75rem",
						"2xl": "1rem",
						"full": "9999px"
					},
				},
			},
		}
	</script>
	<!-- Custom CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-background-light dark:bg-background-dark text-secondary dark:text-white smooth-scroll antialiased">
<?php include 'includes/header.php'; ?>

<main>
	<?php include 'includes/content.php'; ?>
</main>

<?php include 'includes/footer.php'; ?>

<!-- Scroll to Top Button -->
<button id="scroll-to-top"
		class="fixed bottom-8 right-8 z-50 p-4 rounded-full bg-primary hover:bg-primary-dark text-secondary shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 invisible transform translate-y-4 hover:scale-110">
	<span class="material-symbols-outlined text-2xl">arrow_upward</span>
</button>

<!-- Floating CTA Buttons -->
<?php include 'includes/floating-cta-button.php'; ?>

<!-- Custom JavaScript -->
<script src="assets/js/script.js"></script>
</body>

</html>

