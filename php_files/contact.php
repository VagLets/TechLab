<!-- ✅ /php_files/contact.php -->

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<?php $pageTitle = 'Επικοινωνία | TechLab'; ?>

<!DOCTYPE html>
<html lang="el">

<!-- 🎯 HEAD SECTION -->
<head>
  <?php include __DIR__ . '/../includes/head-section.php'; ?>

  <!-- 🌀 Custom Fade-in για στοιχεία της φόρμας -->
  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .fade-in {
      opacity: 0;
      animation: fadeIn 1s ease-out forwards;
    }
  </style>
</head>

<body class="bg-[var(--bg-color)] text-[var(--text-color)]">

  <?php include __DIR__ . '/../includes/header.php'; ?>
  <?php include __DIR__ . '/../includes/login-modal.php'; ?>

  <!-- Επικοινωνία -->
  <section class="py-16 px-6 max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-start">
    
    <!-- Φόρμα -->
    <div class="fade-in p-6 rounded-lg shadow-md space-y-6 text-base leading-normal"
         style="background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(12px);">
      <h2 class="text-2xl font-semibold mb-4">Φόρμα Επικοινωνίας</h2>
      <form action="send-message.php" method="POST" class="space-y-4">
        <input type="text" name="name" placeholder="Ονοματεπώνυμο" required class="w-full p-3 rounded bg-white text-black border border-gray-300" />
        <input type="email" name="email" placeholder="Email" required class="w-full p-3 rounded bg-white text-black border border-gray-300" />
        <input type="text" name="subject" placeholder="Θέμα" required class="w-full p-3 rounded bg-white text-black border border-gray-300" />
        <textarea name="message" rows="5" placeholder="Μήνυμα" required class="w-full p-3 rounded bg-white text-black border border-gray-300"></textarea>
        <button type="submit" class="px-6 py-2 rounded font-semibold shadow" style="background-color: var(--button-bg); color: var(--button-text-color); border: 1px solid var(--button-border-color);">
          Αποστολή
        </button>
      </form>
    </div>

    <!-- Στοιχεία επικοινωνίας -->
    <div class="fade-in space-y-6 text-base leading-relaxed">
      <h2 class="text-2xl font-semibold">Στοιχεία Επικοινωνίας</h2>
      <p><i class="fas fa-map-marker-alt mr-2 text-[var(--accent-color)]"></i> Βάλβη 19, Καρδίτσα, ΤΚ 43100</p>
      <p><i class="fas fa-phone mr-2 text-[var(--accent-color)]"></i> +30 24410 23373</p>
      <p><i class="fas fa-envelope mr-2 text-[var(--accent-color)]"></i> info@techlab.gr</p>
      <p><i class="fas fa-clock mr-2 text-[var(--accent-color)]"></i> 
        <strong>Ώρες λειτουργίας:</strong><br>
        Δευτέρα - Τετάρτη - Παρασκευή: 09:00 - 14:30 & 18:00 - 20:30<br>
        Τρίτη - Πέμπτη: 09:00 - 14:30<br>
        Σάββατο: 10:00 - 14:00<br>
        Κυριακή: Κλειστά
      </p>
    </div>
  </section>

  <!-- Google Map κάτω από τις δύο στήλες -->
  <section class="px-6 pb-10 max-w-6xl mx-auto fade-in">
    <div class="w-full h-80 mt-8 rounded-lg overflow-hidden shadow-lg">
      <iframe
        class="w-full h-full"
        src="https://www.google.com/maps?q=Βάλβη+19,+Καρδίτσα,+Ελλάδα&output=embed"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </section>

  <?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
