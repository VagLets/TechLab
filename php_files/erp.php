<!-- ✅ /php_files/erp.php -->

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<?php $pageTitle = 'Μηχανογράφηση ERP/CRM | TechLab'; ?>

<!DOCTYPE html>
<html lang="el">

<!-- 🧠 HEAD SECTION: Περιέχει μόνο ό,τι χρειάζεται -->
<head>
  <!-- 📦 Περιεχόμενο από head-section.php, περιλαμβάνει όλα τα meta, styles και scripts -->
  <?php include __DIR__ . '/../includes/head-section.php'; ?>

  <!-- 🌀 Custom Animation ειδικά για τη σελίδα ERP -->
  <style>
    @keyframes fadeInHero {
      from { opacity: 0; transform: translateY(30px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .fade-in-erp {
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

      <!-- Φόντο με κυκλική γωνία -->
      <div class="absolute inset-0 bg-cover bg-center brightness-[0.40] z-[1] rounded-lg"
           style="background-image: url('../images/erp.jpg');">
      </div>

      <!-- Overlay Περιεχόμενο -->
      <div class="relative z-[2] flex items-center justify-center min-h-screen px-4 py-12">
        <div class="bg-black bg-opacity-30 backdrop-blur-sm rounded-lg px-6 py-12 md:px-16 md:py-16 max-w-[1000px] w-full fade-in-erp">
          <h2 class="mb-10 text-3xl md:text-5xl font-bold text-[var(--hero-text-color)]">
            Μηχανογράφηση - Μηχανοργάνωση Επιχειρήσεων με ERP (ή/και CRM)
          </h2>
          <h1 class="mb-6 text-3xl md:text-2xl text-justify text-[var(--hero-text-color)]">
            Το Α και το Ω μιας επιχείρησης στη σημερινή εποχή!

            Με τον όρο μηχανογράφηση - μηχανοργάνωση εννοούμε, την οργάνωση και υποστήριξη μιας επιχείρησης, με την χρήση ηλεκτρονικών υπολογιστών (και περιφερειακών, όπως barcode scanners και εκτυπωτές) και ταυτόχρονα με τη συνεργασία ενός λογισμικού (ERP, CRM).
          </h1>
          <p class="mb-6 text-3xl md:text-2xl text-justify text-[var(--hero-text-color)]">
            Η TechLab παρέχει ολοκληρωμένες λύσεις μηχανογράφησης, βασισμένες σε σύγχρονα συστήματα ERP και CRM.
            Βοηθάμε τις επιχειρήσεις να οργανώσουν και να βελτιώσουν τις διαδικασίες τους, με ευελιξία και προσαρμογή στις ανάγκες κάθε πελάτη.
          </p>
          <ul class="mb-10 text-3xl md:text-2xl list-disc list-inside text-justify text-left mx-auto max-w-[1000px] text-[var(--hero-text-color)]">
            <li>Ανάπτυξη και εγκατάσταση εμπορικών εφαρμογών ERP/CRM</li>
            <li>Προσαρμογή λογισμικού σε κάθε τύπο επιχείρησης</li>
            <li>Υποστήριξη δεδομένων, εκπαίδευση χρηστών και συντήρηση</li>
            <li>Διασύνδεση με hardware (POS, barcode, φορολογικά συστήματα)</li>
          </ul>
          <p class="font-semibold text-xl mb-6 text-center text-[var(--hero-text-color)]">
            Είμαστε δίπλα σας σε κάθε βήμα του ψηφιακού μετασχηματισμού της επιχείρησής σας.
          </p>
          <div class="text-center">
            <a href="contact.php" class="inline-block px-6 py-3 bg-[var(--accent-color)] text-white font-semibold rounded hover:brightness-110 transition duration-300">
              Ζητήστε προσφορά τώρα
            </a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>

