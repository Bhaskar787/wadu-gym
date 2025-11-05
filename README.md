# PeakMA

**PeakMA** is a PHP-based web application designed to manage user interactions with a dynamic and responsive interface. It includes core functionalities such as registration, login, database connectivity, and a simple navigation structure. The system is suitable for learning and demonstrating web development concepts using PHP, MySQL, HTML, and CSS.

---

## 🚀 Features

- User registration and login system  
- Database integration using MySQL  
- Navigation and session management  
- Responsive front-end design with `style.css`  
- Organized project structure with modular PHP files  

---

## 🗂️ Project Structure

```
peakMA/
│
├── contact.php           # Contact page
├── database.php          # Database connection file
├── index.php             # Main homepage
├── login.php             # User login page
├── logout.php            # Logout functionality
├── navigation.php        # Navigation menu component
├── registration.php      # User registration form
├── query.sql             # SQL script for database setup
├── style.css             # Main stylesheet
└── images/               # Image assets for the website
```

---

## 🛠️ Technologies Used

- **Frontend:** HTML5, CSS3  
- **Backend:** PHP 8+  
- **Database:** MySQL  
- **Server Environment:** XAMPP / WAMP / LAMP  

---

## ⚙️ Installation & Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/Bhaskar787?tab=repositories
   ```

2. **Move the project folder** into your local web server directory  
   (e.g., `htdocs` for XAMPP or `www` for WAMP).

3. **Create a new MySQL database**
   - Import the `query.sql` file into your database using phpMyAdmin.

4. **Configure the database connection**
   - Update the database credentials in `database.php`:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "your_database_name";
     ```

5. **Run the application**
   - Open your browser and visit:
     ```
     http://localhost/peakMA/
     ```

---
