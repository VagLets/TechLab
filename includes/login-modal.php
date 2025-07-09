<!-- 🔒 Login Modal Overlay -->
<div id="login-modal"
     class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">

  <!-- 📦 Modal Box -->
  <div id="modal-box"
       class="relative rounded-xl shadow-xl max-w-md w-full mx-4 p-6"
       style="background-color: var(--bg-color); color: var(--text-color);"
       onclick="event.stopPropagation()">

    <!-- 🧭 Modal Header -->
    <div class="flex justify-between items-center mb-4">
      <h3 class="text-lg font-bold" style="color: var(--heading-color);">
        Σύνδεση Διαχειριστή
      </h3>

      <!-- ❌ Close Button -->
      <button id="close-login-modal">
        <i class="fas fa-times"></i>
      </button>
    </div>

    <!-- 📝 Login Form -->
    <form id="login-form" method="POST" class="space-y-4">

      <!-- 👤 Username -->
      <div>
        <label for="username" class="block text-sm font-semibold mb-1" style="color: var(--text-color);">
          Όνομα χρήστη
        </label>
        <input type="text"
               id="username"
               name="username"
               required
               class="w-full rounded px-3 py-2 focus:outline-none focus:ring-2"
               style="background-color: var(--input-bg-color);
                      color: var(--input-text-color);
                      border: 1px solid var(--input-border);" />
      </div>

      <!-- 🔒 Password -->
      <div>
        <label for="password" class="block text-sm font-semibold mb-1" style="color: var(--text-color);">
          Κωδικός πρόσβασης
        </label>
        <input type="password"
               id="password"
               name="password"
               required
               class="w-full rounded px-3 py-2 focus:outline-none focus:ring-2"
               style="background-color: var(--input-bg-color);
                      color: var(--input-text-color);
                      border: 1px solid var(--input-border);" />
      </div>

      <!-- ✅ Remember Me -->
      <div class="flex items-center">
        <input type="checkbox" id="remember-me" name="remember-me" class="form-checkbox" />
        <label for="remember-me" class="ml-2 text-sm" style="color: var(--text-color);">
          Να με θυμάσαι
        </label>
      </div>

      <!-- 🔘 Action Buttons -->
      <div class="flex justify-between mt-4">
        <button type="button" id="cancel-button" onclick="closeLoginModal()">Ακύρωση</button>
        <button type="submit"
                class="px-4 py-2 rounded transition duration-200 shadow"
                style="background-color: var(--button-bg);
                       color: var(--button-text-color);
                       border: 1px solid var(--button-border-color);">
          Σύνδεση
        </button>
      </div>
    </form>
  </div>
</div>