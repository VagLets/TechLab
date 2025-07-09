<?php
// Ενεργοποίηση σφαλμάτων για debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="el">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Η Εταιρεία | TechLab</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style.css" />

  <!-- Font Awesome Icons -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-pap3R+Xf+1sBqvFLe+rPjqxUe6eGEC+u+8pXj1D0vFstYghQJXQTa+DYs9KjXbzOzpJGNxPVmSVZ+nN7yVY2xA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />

  <!-- Custom JS -->
  <script src="../js/script.js" defer></script>
</head>

<body class="bg-[var(--bg-color)] text-[var(--text-color)]">

  <?php include __DIR__ . '/../includes/header.php'; ?>

  <!-- Κύριο περιεχόμενο -->
  <main class="py-16 px-6 max-w-4xl mx-auto">
    <h1 class="text-4xl font-bold mb-10 text-center">Η Εταιρεία</h1>

    <section class="space-y-6 text-lg leading-relaxed">
      <p>
        Η <strong>TechLab</strong> είναι μια ομάδα επαγγελματιών με πάθος για την τεχνολογία και την εκπαίδευση. Από το 2015, προσφέρουμε υπηρεσίες πληροφορικής, τεχνική υποστήριξη και σεμινάρια για ιδιώτες και επιχειρήσεις.
      </p>
      <p>
        Πιστεύουμε ότι η τεχνολογία πρέπει να είναι προσβάσιμη και κατανοητή από όλους. Γι’ αυτό δημιουργούμε λύσεις που είναι πρακτικές, ευέλικτες και φιλικές προς τον χρήστη.
      </p>
      <p>
        Είμαστε δίπλα σας για να σας βοηθήσουμε να εξελιχθείτε, να μάθετε και να αξιοποιήσετε την τεχνολογία με τον καλύτερο δυνατό τρόπο.
      </p>
    </section>
  </main>

  <?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>