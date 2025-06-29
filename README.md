# ✈️ PHP MySQL Trip Registration Form

A beginner-friendly PHP + MySQL project that allows users to submit their details for a US trip hosted by IIT Kharagpur. This project demonstrates basic full-stack form handling, data validation, and MySQL integration.

---

## 📌 Features

- 📝 HTML form to collect user data
- 💾 MySQL backend for storing data
- ✅ Server-side validation using PHP
- 🎨 Styled with custom CSS and background image
- 📩 Displays success message upon form submission

---

## 🛠️ Tech Stack

| Layer       | Technology        |
|-------------|-------------------|
| Frontend    | HTML5, CSS3       |
| Backend     | PHP (Procedural)  |
| Database    | MySQL             |
| Server      | Apache (via XAMPP)|
| Version Control | Git + GitHub  |

---

## 📂 Folder Structure

my_first_php_mysql_project/

├── index.php # Homepage and backend logic

├── style.css # Styling

├── bg.jpg # Background image

├── index.js # Optional (currently unused)

---

## ⚙️ How to Run Locally

### 1. Prerequisites
- [XAMPP](https://www.apachefriends.org/index.html) installed (or WAMP/LAMP)
- PHP 7+ and MySQL enabled

### 2. Setup Instructions

1. Clone or download this repository:
```bash
git clone https://github.com/ompajgade/my_first_php_mysql_project

2. Copy the folder to your XAMPP htdocs directory:
```bash
C:/xampp/htdocs/my_first_php_mysql_project/

3. Start Apache and MySQL from XAMPP control panel.

4. Open phpMyAdmin and create a new database named:

```sql
trip

5. Then create the table trip using this SQL:

```sql
CREATE TABLE `trip` (
  `sno` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `age` INT(3) NOT NULL,
  `gender` VARCHAR(10),
  `email` VARCHAR(100),
  `phone` VARCHAR(15),
  `other` TEXT,
  `dt` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
);

6. Visit your project in browser:

```arduino
http://localhost/my_first_php_mysql_project/

