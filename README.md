TechLab Project Documentation

Overview

TechLab is a modular web application designed for service management. It features a clean architecture with reusable components, dynamic titles, and a consistent UI/UX.

File Structure

PHP Files

File

Role in Page

Includes

index.php

📌 Home page with hero & track

header, login-modal, hero-section, track-section, footer

about.php

ℹ️ Company information

header, login-modal, footer

contact.php

✉️ Contact form

header, login-modal, footer

erp.php

⚙️ ERP/CRM services

header, login-modal, footer

networks.php

🌐 Network infrastructure

header, login-modal, footer

Common Includes

Include File

Role

head-section.php

✅ Contains meta tags, fonts, styles, scripts, TITLE

header.php

🔝 Logo, buttons, navbar, theme toggle, includes login-modal.php

login-modal.php

🔐 Login modal

footer.php

🔚 Footer of the page

hero-section.php

🎯 Central banner — only in index.php

track-section.php

🛠️ Services or presentation section — only in index.php

Assets and Scripts

File

Description

style.css

🎨 Main CSS for the entire UI

script.js

⚙️ Handles theme, modals, buttons

Dynamic Title Setup

To enable dynamic titles for each page:

Add the following line before the <head> in each page:

<?php $pageTitle =