# 🏫 SZABIST Registration Portal – ITC 1st Semester Project

**📚 Course:** Introduction to Computing (ITC)  
**🧑‍💻 Developed By:** Muhammad Saad  
**📅 Semester:** 1st Semester  
**🛠️ Technologies Used:** HTML, CSS, PHP, MySQL

---

## 📘 Project Overview

This project is a basic **web-based registration form** for SZABIST university built using `HTML`, `CSS`, and `PHP` with a backend MySQL database. It simulates a functional online student registration system where users can:

- Submit personal and contact details.
- Save their data in a database.
- Navigate official SZABIST resources (Admission, Courses, Contact).

---

## 🌐 Pages Included

### 🔹 `index.html` – Home Page
- Contains navigation to SZABIST official links (Admissions, Contact, Courses, etc.).
- Includes university information (About, Achievements, and Why Choose Us).
- Call-to-action for user registration.

### 🔹 `project1.html` – Sign-Up Page
- Collects user inputs:
  - Full Name
  - Email
  - Phone Number
  - Password
- Submits form data via POST to `linker.php`.

### 🔹 `linker.php` – Backend Script
- Accepts form data using PHP `$_POST`.
- Connects to MySQL database `accounts`.
- Inserts registration data into the `information` table using prepared statements.

---

## 🗃️ Database Structure

**Database Name:** `accounts`  
**Table Name:** `information`  
**Columns:**
- `Name` (VARCHAR)
- `Email` (VARCHAR)
- `Password` (VARCHAR)
- `Phonenumber` (INT)

---

## 🧠 Concepts Practiced

- Basic HTML Form and Layout
- Styling with Inline CSS
- Background images and table-based UI
- PHP form handling (`$_POST`)
- MySQLi prepared statements
- Data validation and database insertion
- Web navigation using anchor tags (`<a href>`)

---

## 📸 Screenshots (optional)

> You can add screenshots of the UI here if available.

---

## 🚀 How to Run

1. Install XAMPP or WAMP server.
2. Place the project files in the `htdocs` directory (`C:/xampp/htdocs/`).
3. Start **Apache** and **MySQL** from the XAMPP control panel.
4. Create a database named `accounts` and a table `information` with appropriate fields.
5. Access the project via browser:
