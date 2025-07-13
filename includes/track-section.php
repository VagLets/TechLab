<!-- /includes/track-section.php -->

<section id="track" class="relative py-3 mt-0 text-center" style="background-color: var(--bg-color);">
  <div class="relative mx-auto max-w-[1400px] overflow-hidden">

    <!-- Background Image με φίλτρο σκοτεινότητας -->
    <div class="absolute inset-0 bg-cover bg-center brightness-[0.6] z-[1]"
         style="background-image: url('../images/track-bg.jpg');"></div>

    <!-- Overlay περιεχόμενο -->
    <div class="relative z-[2] px-4 py-10">
      <div class="bg-black bg-opacity-25 rounded-lg p-6 md:p-12">
        
        <!-- Επικεφαλίδα -->
        <div class="max-w-2xl mx-auto mb-8">
          <h2 class="text-3xl md:text-5xl font-bold mb-4" style="color: var(--hero-text-color);">
            Εύρεση Επισκευής
          </h2>
          <p class="text-lg md:text-2xl" style="color: var(--hero-text-color);">
            Συμπληρώστε τον αριθμό επισκευής σας για να δείτε την κατάστασή της.
          </p>
        </div>
        
        <!-- Φόρμα -->
        <form class="flex flex-col md:flex-row justify-center items-center gap-4 max-w-3xl mx-auto">
          
          <!-- Πεδίο Αναζήτησης -->
          <input type="text"
                 class="w-full md:w-2/3 px-4 py-3 rounded text-base focus:outline-none focus:ring-2"
                 placeholder="Αριθμός Επισκευής"
                 required
                 style="
                   background-color: var(--input-bg-color);
                   color: var(--input-text-color);
                   border: 1px solid var(--input-border);
                 ">

          <!-- Κουμπί -->
          <button type="submit"
                  class="w-full md:w-auto px-6 py-3 rounded font-semibold transition-all duration-200"
                  style="
                    background-color: var(--button-bg);
                    color: var(--button-text-color);
                    border: 1px solid var(--button-border-color);
                  ">
            Εύρεση
          </button>

        </form>
      </div>
    </div>

  </div>
</section>
