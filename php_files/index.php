<!-- ✅ /php_files/index.php -->

<!DOCTYPE html>
<html lang="el">

<!-- 🎯 HEAD SECTION -->
<head>
  <?php include __DIR__ . '/../includes/head-section.php'; ?>
</head>

<!-- 🧩 BODY SECTION -->
<body class="m-0 p-0 font-['Roboto']">
  <?php
    include __DIR__ . '/../includes/header.php';         // Πλοήγηση & λογότυπο
    include __DIR__ . '/../includes/login-modal.php';    // Modal για σύνδεση χρήστη
    include __DIR__ . '/../includes/hero-section.php';   // Κεντρικό banner παρουσίασης
    include __DIR__ . '/../includes/track-section.php';  // Ενότητα υπηρεσιών ή workflow
    include __DIR__ . '/../includes/footer.php';         // Υποσέλιδο
  ?>
</body>

</html>


