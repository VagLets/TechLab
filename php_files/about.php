<?php
// Εμφάνιση σφαλμάτων PHP για debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="el">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Η Εταιρεία | TechLab</title>

  <!-- CSS & JS -->
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/script.js" defer></script>
</head>
<body class="bg-[var(--bg-color)] text-[var(--text-color)]">

  <?php include __DIR__ . '/../includes/header.php'; ?>

  <!-- Hero Section -->
  <section class="relative h-[60vh] md:h-screen">
    <img
      src="../images/aboutus-bg.jpg"
      alt="Φόντο Η Εταιρεία"
      class="absolute inset-0 w-full h-full object-cover"
    >
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 flex items-center justify-center h-full max-w-[1400px] mx-auto px-4">
      <!-- Μπορείς να προσθέσεις τίτλο/κείμενο εδώ -->
    </div>
  </section>

  <!-- Main Content -->
  <main class="py-16">
    <div class="max-w-[1400px] mx-auto px-4 space-y-16">

      <!-- ΠΟΙΟΙ ΕΙΜΑΣΤΕ -->
      <section class="grid md:grid-cols-2 gap-8 items-center">
        <div>
          <img
            src="../images/whoarewe-bg.jpg"
            alt="Ποιοι είμαστε"
            class="w-full rounded-lg shadow-lg"
          >
        </div>
        <div class="bg-[rgba(255,255,255,0.92)] p-6 rounded-lg shadow-lg">
          <h2 class="text-2xl font-bold mb-4 text-[var(--heading-color)]">ΠΟΙΟΙ ΕΙΜΑΣΤΕ</h2>
          <p>Από το 2012 μέχρι σήμερα, παρέχουμε άμεσες και αξιόπιστες τεχνολογικές λύσεις με σεβασμό στον προϋπολογισμό σας.</p>
          <p>Το έμπειρο προσωπικό μας επεμβαίνει γρήγορα σε όποιο ζήτημα προκύψει, εξασφαλίζοντας αδιάλειπτη λειτουργία στον εξοπλισμό σας.</p>
          <p>Εκπαιδευόμαστε διαρκώς σε νέες τεχνολογίες και σεμινάρια, για να σας προσφέρουμε πάντα την κορυφαία υποστήριξη.</p>
          <p>Εμπιστευτείτε επαγγελματίες που αγαπούν τη δουλειά τους και την κάνουν με ακρίβεια.</p>
        </div>
      </section>

      <!-- ΤΙ ΚΑΝΟΥΜΕ -->
      <section class="grid md:grid-cols-2 gap-8 items-center">
        <div class="order-last md:order-first bg-[rgba(255,255,255,0.92)] p-6 rounded-lg shadow-lg">
          <h2 class="text-2xl font-bold mb-4 text-[var(--heading-color)]">ΤΙ ΚΑΝΟΥΜΕ</h2>
          <p>Προσφέρουμε ένα ευρύ φάσμα υπηρεσιών:</p>
          <ul class="list-disc pl-6 mb-4">
            <li>ERP, CRM και εξειδικευμένο λογισμικό</li>
            <li>Προμήθεια και υποστήριξη hardware</li>
            <li>Ρυθμίσεις και απομακρυσμένη πρόσβαση</li>
            <li>Μελέτη και εγκατάσταση δικτύων</li>
            <li>Εγκατάσταση περιφερειακών συσκευών</li>
            <li>Συστήματα συναγερμού και CCTV</li>
          </ul>
          <p>Με πολυετή εμπειρία, διασφαλίζουμε λύσεις προσαρμοσμένες στις ανάγκες σας.</p>
          <p>Επικοινωνήστε μαζί μας ή κλείστε ραντεβού σήμερα.</p>
        </div>
        <div>
          <img
            src="../images/whatwedo-bg.jpg"
            alt="Τι κάνουμε"
            class="w-full rounded-lg shadow-lg"
          >
        </div>
      </section>

    </div>
  </main>

  <?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>