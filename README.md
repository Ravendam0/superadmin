# Superadmin — Instant M-PESA Shortcode & STK Gateway Web App

**Superadmin** is a web application that allows business owners (super-admins) to **request an M-PESA shortcode instantly** and start sending STK (Sim Toolkit) payment prompts to customers. This enables merchants to quickly integrate mobile money payments into their business.

Live demo: [[your live website link here]](https://superadmin.ci.co.ke/)

---

## Features

### Superadmin Features

* Fill a simple online form to request an M-PESA shortcode.
* Provide business/organization details and contact information.
* Track status of shortcode requests (pending, approved, rejected).

### Payment Features

* Once a shortcode is approved, merchants can trigger **STK Push** payment requests to customers.
* Supports seamless mobile money payment integration with M-PESA.
* Reduces setup time for merchants to start receiving payments.

---

## Technology Stack

* **Frontend:** HTML, CSS, JavaScript (with responsive design for all devices)
* **Backend:** PHP (handles form submission, request storage, and STK integration)
* **Database:** MySQL (stores superadmin details and shortcode requests)
* **Server:** Apache/Nginx or any PHP-compatible hosting

---

## Installation

1. Clone the repository:

```bash
git clone https://github.com/Ravendam0/superadmin.git
```

2. Create a MySQL database, e.g., `superadmin_db`.

3. Import the provided SQL file (if available) to create necessary tables.

4. Configure your `config.php` file with your database credentials:

```php
$DB_host = "localhost";
$DB_user = "your_db_username";
$DB_pass = "your_db_password";
$db = "superadmin_db";
```

5. Upload files to your PHP-enabled server.

6. Access the site via browser:

```
http://yourdomain.com/
```

---

## Usage

1. Superadmin visits the request page.
2. Fill in the form with name, email, organization, and contact number.
3. Submit the request to get assigned an M-PESA shortcode.
4. Once approved, integrate the shortcode with your business for STK Push payments.

---

## Project Structure

```
/superadmin
│
├── index.php             # Home / Request form
├── admin/                # Admin dashboard (optional)
├── config.php            # Database configuration
├── assets/               # CSS, JS, images
└── README.md
```

---

## Future Enhancements

* Add **admin panel** to manage requests and approve/reject automatically.
* Integrate **Daraja API** fully for live STK Push testing.
* Add email notifications for superadmins when shortcode is approved.
* Improve UI/UX with frameworks like TailwindCSS or Bootstrap.

---

## License

This project is open-source and free to use for learning and development purposes.

---

## Contact

For questions, feature requests, or contributions, contact **Ravendam0** via GitHub.
