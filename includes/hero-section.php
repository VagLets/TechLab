<!-- /includes/hero-section.php -->
<section id="hero" class="relative text-white text-center z-0" style="background-color: var(--bg-color);">
  <div class="relative mx-auto max-w-[1400px]">

    <!-- Φόντο -->
    <div
      class="absolute inset-0 bg-cover bg-center brightness-[0.55] z-[1]"
      style="background-image: url('../images/techlab-bg.jpg');">
    </div>

    <!-- Overlay Περιεχόμενο -->
    <div class="relative z-[2] flex items-center justify-center min-h-[70vh] px-4 py-12">
      <div class="bg-black bg-opacity-10 rounded-lg px-6 py-12 md:px-16 md:py-16 max-w-[1000px] w-full fade-in-hero">
        <h1 class="text-3xl md:text-6xl font-bold" style="color: var(--heading-color);">
          Καλώς ήρθατε στο <span style="color: var(--accent-color);">TechLab</span>
        </h1>
        <p class="mt-4 text-xl md:text-2xl" style="color: var(--hero-text-color);">
          Σκοπός μας είναι να βρούμε λύσεις στα προβλήματά σας.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Fade-in animation για το hero section -->
<style>
  @keyframes fadeInHero {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .fade-in-hero {
    opacity: 0;
    animation: fadeInHero 1.2s ease-out forwards;
  }
</style>