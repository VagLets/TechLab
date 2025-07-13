<!-- ✅ /includes/head-section.php -->

<!-- 🎚️ Theme loader — εφαρμόζεται πριν το DOM render -->
<script>
  (function() {
    const savedTheme = localStorage.getItem('theme') || 'midnight';
    document.documentElement.setAttribute('data-theme', savedTheme);
  })();
</script>

<!-- 🧠 Meta configuration -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- 🏷️ Τίτλος σελίδας (δυναμικός με fallback) -->
<?php if (!isset($pageTitle)) $pageTitle = 'TechLab'; ?>
<title><?php echo htmlspecialchars($pageTitle); ?></title>

<!-- 🔠 Google Font: Roboto -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

<!-- 🎯 Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- ⚙️ TailwindCSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- 🎨 Custom Styles -->
<link rel="stylesheet" href="../css/style.css">

<!-- 🧩 Custom JS Scripts -->
<script src="../js/script.js" defer></script>
