# HealthWeb — PHP Health & Wellness Portal

A small PHP-based health and wellness web project containing pages for finding doctors, viewing symptoms, wellness programs, medicines, and basic user profile/login with sessions.


## Requirements

- PHP (7.2+ recommended)
- HTML/CSS/JavaScript
- XAMPP on Windows. Apache, PHP, MySQL linux.
- Can also use Laragon
- A browser.

## Quick local run (built-in PHP server)

Open a terminal (Git Bash ) in the project folder and run:

```bash
cd "c:/Users/junu/Downloads/New folder/healthweb"
php -S localhost:8000
```

Then open http://localhost:8000/index.php (or http://localhost:8000) in your browser.

If you use XAMPP/WAMP, place the project folder inside your webroot (`C:/xampp/htdocs/healthweb`) and start Apache.

## Project structure (high level)

- `index.php` — Landing page.
- `login.php` — Login form (no external auth configured by default).
- `profile.php` — User profile page.
- `find_doctors.php` — Search/lookup for doctors.
- `symptoms.php` — Symptom information page.
- `wellness_program.php` — Wellness program details.
- `drugs_suppliment.php` — Drugs and supplements listing.
- `header.php`, `footer.php` — Shared header/footer included by pages.
- `style.css`, `script.js` — Site styles and client-side scripts.
- `img/`, `doc/`, `medicine/` — Static assets.
