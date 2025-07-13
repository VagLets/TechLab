<!-- ✅ /php_files/networks.php -->

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<?php $pageTitle = 'Δικτυακές Υποδομές | TechLab'; ?>

<!DOCTYPE html>
<html lang="el">

<!-- 🎯 HEAD SECTION: Ενιαίος & δυναμικός -->
<head>
  <!-- 📦 Κεντρικό include βασικών meta, styles, scripts & δυναμικού τίτλου -->
  <?php include __DIR__ . '/../includes/head-section.php'; ?>

  <!-- 🌀 Custom Style: Animation ειδική για αυτήν τη σελίδα -->
  <style>
    @keyframes fadeInHero {
      from { opacity: 0; transform: translateY(30px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .fade-in-network {
      opacity: 0;
      animation: fadeInHero 1.2s ease-out forwards;
    }
  </style>
</head>

<body class="text-white" style="background-color: var(--bg-color);">
  <?php include __DIR__ . '/../includes/header.php'; ?>
  <?php include __DIR__ . '/../includes/login-modal.php'; ?>

  <section class="relative text-center z-0 pt-4 pb-4">
    <div class="relative mx-auto max-w-[1400px]">

      <!-- Φόντο με στρογγυλές γωνίες -->
      <div class="absolute inset-0 bg-cover bg-center brightness-[0.40] z-[1] rounded-lg"
           style="background-image: url('../images/networks.jpg');">
      </div>

      <!-- Overlay Περιεχόμενο -->
      <div class="relative z-[2] flex items-center justify-center min-h-screen px-4 py-12">
        <div class="bg-black bg-opacity-30 backdrop-blur-sm rounded-lg px-6 py-12 md:px-8 md:py-8 max-w-[1100px] w-full fade-in-network">
          <h2 class="mb-10 text-3xl md:text-5xl font-bold text-[var(--hero-text-color)]">
            Σχεδιασμός και Υλοποίηση Δικτύων
          </h2>
          <h1 class="mb-6 text-3xl md:text-2xl text-justify text-[var(--hero-text-color)]">
            Κάθε σύγχρονη επιχείρηση χρειάζεται σταθερή και ασφαλή υποδομή δικτύου.
            Η TechLab παρέχει υπηρεσίες εγκατάστασης, διαχείρισης και βελτιστοποίησης για ενσύρματα και ασύρματα δίκτυα.
          </h1>
          <p class="mb-6 text-3xl md:text-2xl text-justify text-[var(--hero-text-color)]">
            Από μια απλή εγκατάσταση δικτύου (ενός χώρου) μέχρι τις πολύπλοκες εγκαταστάσεις διασύνδεσης (πχ. υποκαταστήματα σε άλλες περιοχές), σχεδιάζουμε και προσαρμόζουμε τις λύσεις στις ανάγκες σας.
            Είμαστε ένας έμπιστος συνεργάτης είτε για το επαγγελματικό σας είτε για το οικιακό σας δίκτυο.
          </p>
          <ul class="mb-10 text-3xl md:text-2xl list-disc list-inside text-justify text-left mx-auto max-w-[1000px] text-[var(--hero-text-color)]">
            <li>Μελέτη και εγκατάσταση του ενσύρματου, του ασύρματου, ή το συνδυασμό τους.</li>
            <li>Εγκατάσταση τεχνολογικού εξοπλισμού με δοκιμές απόδοσης.</li>
            <li>Διασφάλιση ασφάλειας δεδομένων με τεχνολογίες, όπως: firewalls, vpn, vlan κ.ά.</li>
            <li>Απομακρυσμένη εποπτεία και διαχείριση εξοπλισμού για την ορθή λειτουργία τους.</li>
          </ul>
          <p class="font-semibold text-xl mb-6 text-center text-[var(--hero-text-color)]">
            Δικτυωθείτε με αξιοπιστία — η TechLab σας καλύπτει σε κάθε βήμα.
          </p>
          <div class="text-center">
            <a href="contact.php" class="inline-block px-6 py-3 bg-[var(--accent-color)] text-white font-semibold rounded hover:brightness-110 transition duration-300">
              Ρωτήστε μας περισσότερα
            </a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
