<div class="relative z-[2] flex items-center justify-center min-h-[75vh] px-4 py-12">
  <div class="bg-black bg-opacity-10 rounded-lg px-6 py-12 md:px-16 md:py-16 max-w-[900px] w-full fade-in-hero">
    <h1 class="text-3xl md:text-5xl font-bold mb-6" style="color: var(--hero-text-color); text-shadow: none;">
      <?= $hero_title ?>
    </h1>
    <p class="mb-6 text-lg md:text-xl" style="color: var(--hero-text-color); text-shadow: none;">
      <?= $hero_description ?>
    </p>
    <?= $hero_content ?>
    <div class="text-center mt-6">
      <a href="<?= $hero_cta_link ?>" class="inline-block px-6 py-3 bg-[var(--accent-color)] text-white font-semibold rounded hover:brightness-110 transition duration-300">
        <?= $hero_cta_text ?>
      </a>
    </div>
  </div>
</div>
