<!-- /includes/footer.php -->
<footer class="pt-5 text-center" style="background-color: var(--footer-bg-color); color: var(--footer-text-color);">
  <div class="max-w-[1400px] mx-auto px-4">

    <!-- Social Icons -->
    <div class="mb-4 flex justify-center space-x-4 text-xl">
      <a href="#" class="transition hover:text-[var(--accent-color)]"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="transition hover:text-[var(--accent-color)]"><i class="fab fa-instagram"></i></a>
      <a href="#" class="transition hover:text-[var(--accent-color)]"><i class="fab fa-youtube"></i></a>
      <a href="#" class="transition hover:text-[var(--accent-color)]"><i class="fab fa-linkedin-in"></i></a>
    </div>

    <!-- Theme Selector -->
    <div class="mb-4">
      <label for="theme-dropdown-footer" class="text-sm mr-2">Θέμα:</label>
      <select id="theme-dropdown-footer" class="px-3 py-1 rounded text-sm"
              style="color: var(--input-text-color); background-color: var(--input-bg-color); border: 1px solid var(--input-border);">
        <option value="midnight" style="background-color: var(--input-bg-color); color: var(--input-text-color);">Midnight</option>
        <option value="light" style="background-color: var(--input-bg-color); color: var(--input-text-color);">Light</option>
        <option value="charcoal" style="background-color: var(--input-bg-color); color: var(--input-text-color);">Charcoal</option>
      </select>
    </div>

    <!-- Footer Text -->
    <p class="mb-1 text-sm">
      &copy; <span id="displayYear"></span> All Rights Reserved – TechLab
    </p>
    <p class="text-xs subtext">
      Σχεδιάστηκε με ❤️ στην Καρδίτσα
    </p>
  </div>
</footer>

<!-- JS για δυναμικό έτος -->
<script>
  document.getElementById("displayYear").textContent = new Date().getFullYear();
</script>
