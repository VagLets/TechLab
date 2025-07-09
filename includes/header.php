<!-- header.php -->
<header class="w-full text-[var(--text-color)]" style="background: var(--nav-bg);">
  <div class="sticky top-0 z-50">

    <!-- Info Bar -->
    <div class="py-2 px-4">
      <div class="mx-auto max-w-[1400px] flex flex-col md:flex-row text-sm font-semibold">
        <div class="flex items-center mb-2 md:mb-0 md:w-1/3">
          <i class="fas fa-envelope mr-2"></i> info@techlab.gr
        </div>
        <div class="flex justify-center items-center mb-2 md:mb-0 md:w-1/3">
          <i class="fas fa-phone mr-2"></i> +30 24410 23373
        </div>
        <div class="flex justify-end items-center md:w-1/3">
          <i class="fas fa-map-marker-alt mr-2"></i> Καρδίτσα
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <nav style="background: var(--nav-bg);">
      <div class="max-w-[1400px] mx-auto px-4 py-4 flex justify-between items-center">

		<!-- Logo -->
		<a href="index.php" class="flex items-center group transition-transform hover:scale-105 duration-300">
		  <div class="relative mr-4 flex items-center" style="height: 85px;">
			<img src="../images/logo-light.png"
				 alt="TechLab Light Logo"
				 class="logo-light h-full w-auto" />
			<img src="../images/logo-dark.png"
				 alt="TechLab Dark Logo"
				 class="logo-dark h-full w-auto" />
		  </div>
		</a>
				
        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center space-x-6 text-sm font-semibold">
          <a href="index.php" class="hover:text-[var(--accent-color)] nav-underline">Αρχική</a>

          <!-- Dropdown -->
          <div class="relative group">
            <button class="flex items-center hover:text-[var(--accent-color)] nav-underline hover:bg-transparent focus:bg-transparent active:bg-transparent" style="border: none;">
              Υπηρεσίες <i class="fas fa-chevron-down ml-1 text-xs transition-transform duration-300 group-hover:rotate-180"></i>
            </button>
            <ul class="absolute invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all duration-300 rounded mt-2 py-2 min-w-max whitespace-nowrap text-left z-50"
                style="background-color: var(--dropdown-bg); color: var(--dropdown-text-color);">
              <li><a href="#" class="block px-4 py-2 hover:text-[var(--accent-color)] hover:bg-transparent nav-underline">Μηχανογράφηση (ERP/CRM)</a></li>
              <li><a href="#" class="block px-4 py-2 hover:text-[var(--accent-color)] hover:bg-transparent nav-underline">Δίκτυα</a></li>
              <li><a href="#" class="block px-4 py-2 hover:text-[var(--accent-color)] hover:bg-transparent nav-underline">Service Η/Υ</a></li>
              <li><a href="#" class="block px-4 py-2 hover:text-[var(--accent-color)] hover:bg-transparent nav-underline">Συναγερμοί / Κάμερες</a></li>
            </ul>
          </div>

          <a href="#" class="hover:text-[var(--accent-color)] nav-underline">Η Εταιρεία</a>
          <a href="#" class="hover:text-[var(--accent-color)] nav-underline">Επικοινωνία</a>

          <button id="open-login-modal"
                  class="ml-4 px-4 py-2 rounded transition duration-200 shadow"
                  style="background-color: var(--button-bg); color: var(--button-text-color); border: 1px solid var(--button-border-color);">
            <i class="fas fa-user mr-1"></i> Σύνδεση
          </button>

          <button id="theme-toggle" class="ml-2 hover:text-[var(--accent-color)]" style="border: none; background: transparent;">
            <i class="fas fa-adjust"></i>
          </button>
        </div>

        <!-- Mobile Toggle -->
        <button id="mobile-menu-button" class="lg:hidden" style="color: var(--text-color);">
          <i class="fas fa-bars fa-lg"></i>
        </button>
      </div>

      <!-- Mobile Menu -->
      <div id="mobile-menu" class="hidden lg:hidden px-4 pb-4 space-y-2 font-semibold text-[var(--text-color)]">
        <a href="index.php" class="block hover:text-[var(--accent-color)] nav-underline">Αρχική</a>
        <div>
          <button onclick="toggleMobileDropdown()" class="flex items-center justify-between w-full hover:text-[var(--accent-color)] nav-underline">
            Υπηρεσίες <i class="fas fa-chevron-down ml-2 text-xs"></i>
          </button>
          <ul id="mobile-services-dropdown" class="hidden mt-2 space-y-1 pl-4 text-sm">
            <li><a href="#" class="block py-1 hover:text-[var(--accent-color)] nav-underline" onclick="selectAndClose()">Μηχανογράφηση (ERP/CRM)</a></li>
            <li><a href="#" class="block py-1 hover:text-[var(--accent-color)] nav-underline" onclick="selectAndClose()">Δίκτυα</a></li>
            <li><a href="#" class="block py-1 hover:text-[var(--accent-color)] nav-underline" onclick="selectAndClose()">Service Η/Υ</a></li>
            <li><a href="#" class="block py-1 hover:text-[var(--accent-color)] nav-underline" onclick="selectAndClose()">Συναγερμοί / Κάμερες</a></li>
          </ul>
        </div>
        <a href="#" class="block hover:text-[var(--accent-color)] nav-underline">Η Εταιρεία</a>
        <a href="#" class="block hover:text-[var(--accent-color)] nav-underline">Επικοινωνία</a>
        <button id="mobile-login-button"
                class="block w-full px-4 py-2 rounded transition duration-200"
                style="background-color: var(--button-bg); color: var(--button-text-color); border: 1px solid var(--button-border-color);">
          Σύνδεση
        </button>
      </div>
    </nav>
  </div>
</header>

<!-- Mobile dropdown logic -->
<script>
  function toggleMobileDropdown() {
    const dropdown = document.getElementById('mobile-services-dropdown');
    dropdown.classList.toggle('hidden');
  }

  function selectAndClose() {
    document.getElementById('mobile-services-dropdown').classList.add('hidden');
  }
</script>
