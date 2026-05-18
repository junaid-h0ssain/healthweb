# HealthWeb — PHP Health & Wellness Portal

A small PHP-based health and wellness web project containing pages for finding doctors, viewing symptoms, wellness programs, medicines, and basic user profile/login with sessions.
Contributors:
Sujit Mohajan
Junaid Hossain
A.R Wahid

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

## Run with Docker

This project includes a Docker Compose setup for a PHP-Apache app container and a MariaDB database.

Run it from the project root:

```bash
docker compose up --build
```

Then open http://localhost:8080/index.php in your browser. The first database start automatically imports `project.sql` into the `project` database.

If you want to reset the database and rerun the import, stop the stack and remove the named volume:

```bash
docker compose down -v
```

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
