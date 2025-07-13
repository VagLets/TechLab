<!-- ✅ /php_files/[ανώνυμο προσωρινό αρχείο].php -->

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<?php $pageTitle = 'Service Η/Υ | TechLab'; ?>

<!DOCTYPE html>
<html lang="el">

<!-- 🎯 HEAD SECTION: Μοναδικό και καθαρό -->
<head>
  <!-- 📦 Κεντρικό include όλων των βασικών meta/scripts/styles -->
  <?php include __DIR__ . '/../includes/head-section.php'; ?>

  <!-- 💅 Εσωτερικά Styles (animation για fade-in στοιχεία) -->
  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .fade-in {
      animation: fadeIn 1s ease-out forwards;
      opacity: 0;
    }
  </style>
</head>


<body class="text-white" style="background-color: var(--bg-color);">

  <!-- 🧭 Header + Menu -->
  <?php include __DIR__ . '/../includes/header.php'; ?>

  <!-- 🔐 Login Modal -->
  <?php include __DIR__ . '/../includes/login-modal.php'; ?>

  <!-- 🖼️ Hero Section / Background + Overlay -->
  <section class="relative text-center z-0 pt-4 pb-4">
    <div class="relative mx-auto max-w-[1400px]">

      <!-- 📷 Φόντο εικόνας -->
      <div class="absolute inset-0 bg-cover bg-center brightness-[0.70] z-[1] rounded-lg"
           style="background-image: url('../images/service.jpg');"></div>

      <!-- 💬 Κεντρικό overlay με τίτλο -->
      <div class="relative z-[2] flex flex-col items-center justify-center min-h-screen px-4 py-12 space-y-8">

        <!-- 🧊 Τίτλος σελίδας -->
        <div class="bg-black bg-opacity-15 backdrop-blur-sm rounded-lg px-6 py-12 md:px-10 md:py-3 w-full max-w-[1000px]">
          <h2 class="mb-6 text-3xl md:text-5xl font-bold text-[var(--hero-text-color)] text-center">
            Service Ηλεκτρονικών Υπολογιστών 
          </h2>
        </div>

        <!-- 🔧 Υπηρεσίες σε Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full">
          
          <!-- 🔧 Block 1: PC -->
          <div class="bg-black bg-opacity-15 backdrop-blur-sm rounded-lg px-6 py-10 flex items-start gap-6 fade-in">
            <img src="../images/pc.png" alt="Επισκευή Υπολογιστών" class="w-[140px] rounded-lg">
            <div>
              <h3 class="text-2xl md:text-4xl font-bold text-[var(--hero-text-color)] text-center mb-4">Επισκευή Υπολογιστών</h3>
              <ul class="list-disc list-inside text-lg md:text-xl text-[var(--hero-text-color)] space-y-1 text-left">
                <li>Υπηρεσία διάγνωσης</li>
                <li>Εγκατάσταση λειτουργικού συστήματος</li>
                <li>Εγκατάσταση εφαρμογών</li>
                <li>Δημιουργία backup</li>
                <li>Αναβάθμιση / Αντικατάσταση σκληρών δίσκων</li>
                <li>Αναβάθμιση μνήμης / Αντικατάσταση</li>
                <li>Αφαίρεση ιών / λογισμικού κατασκοπίας</li>
              </ul>
            </div>
          </div>

          <!-- 🔧 Block 2: Laptop -->
          <div class="bg-black bg-opacity-15 backdrop-blur-sm rounded-lg px-6 py-10 flex items-start gap-6 fade-in">
            <img src="../images/laptop.png" alt="Επισκευή Laptop" class="w-[140px] rounded-lg">
            <div>
              <h3 class="text-2xl md:text-4xl font-bold text-[var(--hero-text-color)] text-center mb-4">Επισκευή Laptop</h3>
              <ul class="list-disc list-inside text-lg md:text-xl text-[var(--hero-text-color)] space-y-1 text-left">
                <li>Υπηρεσία διάγνωσης</li>
                <li>Επισκευή πλακέτας</li>
                <li>Αλλαγή οθόνης</li>
                <li>Εγκατάσταση λειτουργικού συστήματος</li>
                <li>Εσωτερικός καθαρισμός</li>
                <li>Αναβάθμιση / Αντικατάσταση σκληρού δίσκου</li>
                <li>Αναβάθμιση μνήμης / Αντικατάσταση</li>
                <li>Αφαίρεση ιών / λογισμικού κατασκοπίας</li>
              </ul>
            </div>
          </div>

          <!-- 🔧 Block 3: Smartphone & Tablet -->
          <div class="bg-black bg-opacity-15 backdrop-blur-sm rounded-lg px-6 py-10 flex items-start gap-6 fade-in">
            <img src="../images/tablet.png" alt="Επισκευή Smartphone & Tablet" class="w-[140px] rounded-lg">
            <div>
              <h3 class="text-2xl md:text-4xl font-bold text-[var(--hero-text-color)] text-center mb-4">Επισκευή Smartphone & Tablet</h3>
              <ul class="list-disc list-inside text-lg md:text-xl text-[var(--hero-text-color)] space-y-1 text-left">
                <li>Επισκευές στο 99% των μοντέλων</li>
                <li>Αντικατάσταση οθονών</li>
                <li>Θέματα πλήρωσης και σύνδεσης</li>
                <li>Αντικατάσταση μπαταριών</li>
                <li>Αντικατάσταση κουμπιών</li>
                <li>Αντικατάσταση μικροφώνου και ηχείου</li>
                <li>Επαναφορά εργοστασιακών ρυθμίσεων</li>
              </ul>
            </div>
          </div>

          <!-- 🔧 Block 4: On-Site -->
          <div class="bg-black bg-opacity-15 backdrop-blur-sm rounded-lg px-6 py-10 flex items-start gap-6 fade-in">
            <img src="../images/onsight.png" alt="Επισκευή στο Χώρο σας" class="w-[140px] rounded-lg">
            <div>
              <h3 class="text-2xl md:text-4xl font-bold text-[var(--hero-text-color)] text-center mb-4">Επισκευή στο Χώρο σας</h3>
              <ul class="list-disc list-inside text-lg md:text-xl text-[var(--hero-text-color)] space-y-1 text-left">
                <li>Ασύρματο δίκτυο σπιτιού/γραφείου</li>
                <li>Αφαίρεση ιών (αν επιτρέπεται επί τόπου)</li>
                <li>Ασφάλεια Διαδικτύου (firewall)</li>
                <li>Ανάκτηση δεδομένων & αντίγραφα ασφαλείας</li>
                <li>Αναβαθμίσεις και εγκατάσταση hardware</li>
                <li>Επισκευή και συντήρηση υπολογιστών</li>
                <li>Βοήθεια και εκπαίδευση χρήστη</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- 🎯 Call to Action -->
  <div class="text-center py-10">
    <a href="contact.php"
       class="inline-block px-6 py-3 bg-[var(--accent-color)] text-white font-semibold rounded hover:brightness-110 transition duration-300">
      Ζητήστε διάγνωση
    </a>
  </div>

  <!-- 🧾 Footer -->
  <?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
