<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="el">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Η Εταιρεία | TechLab</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Custom CSS & JS -->
  <link rel="stylesheet" href="../css/style.css" />
  <script src="../js/script.js" defer></script>

  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
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

  <!-- Ποιοι είμαστε -->
  <section class="py-16 px-6 max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
    <div>
      <img 
        src="../images/whoarewe-bg.jpg" 
        alt="Ποιοι είμαστε" 
        class="w-full md:w-[500px] lg:w-[700px] h-auto rounded-lg shadow-lg fade-in"
      />
    </div>
    <div class="fade-in p-6 rounded-lg shadow-md space-y-6 text-base leading-normal text-justify"
     style="background-color: rgba(255, 255, 255, 0.1); color: var(--text-color); backdrop-filter: blur(12px);">
      <h2 class="text-2xl font-semibold">Ποιοι είμαστε</h2>
      <p>Έχοντας ξεκινήσει από το <strong>2012</strong>, προσφέρουμε αξιόπιστες και άμεσες τεχνικές λύσεις με γνώμονα την ποιότητα, την ταχύτητα και το λογικό κόστος. Στόχος μας είναι να είμαστε πάντα δίπλα στους πελάτες μας, με αποτελεσματικότητα και επαγγελματισμό.</p>
      <p>Η διαθεσιμότητα τεχνικού τη σωστή στιγμή είναι καθοριστική – και γι’ αυτό φροντίζουμε να είμαστε πάντα έτοιμοι να ανταποκριθούμε, ανεξάρτητα από τη φύση του προβλήματος.</p>
      <p>Η ομάδα μας αποτελείται από άρτια καταρτισμένους επαγγελματίες, οι οποίοι παρακολουθούν συνεχώς τις εξελίξεις της τεχνολογίας. Έτσι, εφαρμόζουμε τις πιο σύγχρονες και αποδοτικές πρακτικές, κάνοντας την εργασία σας πιο εύκολη, σταθερή και αποδοτική.</p>
    </div>
  </section>

  <!-- Τι κάνουμε -->
  <section class="py-16 px-6 max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
    <div class="fade-in p-6 rounded-lg shadow-md space-y-6 text-base leading-normal text-justify"
     style="background-color: rgba(255, 255, 255, 0.1); color: var(--text-color); backdrop-filter: blur(12px);">
      <h2 class="text-2xl font-semibold">Τι κάνουμε</h2>
      <p>Παρέχουμε τις καλύτερες υπηρεσίες τεχνολογίας για την επιχείρησή σας σε θέματα όπως:</p>
      <ul class="list-disc list-inside space-y-2">
        <li>Εμπορικό λογισμικό (ERP, CRM, ειδικό λογισμικό)</li>
        <li>Hardware για την ορθή και αξιόπιστη λειτουργία</li>
        <li>Ρυθμίσεις υπολογιστών για πρόσβαση σε εφαρμογές τοπικά ή μέσω διαδικτύου</li>
        <li>Μελέτη και εγκατάσταση εταιρικού δικτύου</li>
        <li>Εγκατάσταση περιφερειακών</li>
        <li>Συστήματα συναγερμού</li>
        <li>Συστήματα CCTV</li>
      </ul>
      <p>Το φιλικό προσωπικό μας έχει πολυετή πείρα και είναι στη διάθεσή σας για οποιαδήποτε ερώτηση.</p>
      <p class="font-semibold">Καλέστε μας σήμερα ή προγραμματίστε ένα ραντεβού.</p>
    </div>
    <div class="order-1 md:order-2">
      <img 
        src="../images/whatwedo-bg.jpg" 
        alt="Τι κάνουμε" 
        class="w-full md:w-[500px] lg:w-[700px] h-auto rounded-lg shadow-lg fade-in"
      />
    </div>
  </section>

  <!-- Γιατί να μας επιλέξετε -->
  <section class="py-16 px-6 max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
    <div>
      <img 
        src="../images/whychooseus.jpg" 
        alt="Γιατί να μας επιλέξετε" 
        class="w-full md:w-[500px] lg:w-[700px] h-auto rounded-lg shadow-lg fade-in"
      />
    </div>
    <div class="fade-in p-6 rounded-lg shadow-md space-y-6 text-base leading-normal text-justify"
     style="background-color: rgba(255, 255, 255, 0.1); color: var(--text-color); backdrop-filter: blur(12px);">
      <h2 class="text-2xl font-semibold">Γιατί να μας επιλέξετε</h2>
      <p>Στην TechLab, δεν προσφέρουμε απλώς υπηρεσίες — προσφέρουμε εμπιστοσύνη. Η πολυετής εμπειρία μας, η συνεχής εκπαίδευση και η αφοσίωση στην ποιότητα μάς καθιστούν τον ιδανικό συνεργάτη για κάθε τεχνολογική σας ανάγκη.</p>
      <p>Είμαστε δίπλα σας με ανθρώπινη προσέγγιση, τεχνική αρτιότητα και διάθεση να λύσουμε κάθε πρόβλημα με τον πιο αποτελεσματικό τρόπο.</p>
      <p class="font-semibold">Επιλέξτε μας για αξιοπιστία, διαφάνεια και τεχνογνωσία που κάνει τη διαφορά.</p>
    </div>
  </section>

  <?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>