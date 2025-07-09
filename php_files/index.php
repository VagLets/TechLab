<!DOCTYPE html>
<html lang="el" data-theme="midnight">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TechLab</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />

    <!-- Roboto Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Custom Styles -->
    <link rel="stylesheet" href="../css/style.css" />
  </head>

  <body class="m-0 p-0 font-['Roboto']">
    <?php
      include '../includes/header.php';
      include '../includes/login-modal.php';
      include '../includes/hero-section.php';
      include '../includes/track-section.php';
      include '../includes/footer.php';
    ?>

    <!-- JS λειτουργικότητα -->
    <script src="../js/script.js" defer></script>
  </body>
</html>
