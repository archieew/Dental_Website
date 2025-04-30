# Dental Website 🦷

A dynamic dental clinic website developed using HTML, CSS, JavaScript, and MySQL. This project allows users to explore dental services, book appointments, and contact the clinic, with data stored in a MySQL database via XAMPP.

## 📌 Features

- 🏥 Informative pages about the dental clinic and its services
- 🗓️ Appointment booking form (data stored in MySQL)
- 📱 Responsive design for mobile and desktop
- 📨 Contact form with database integration
- 💾 MySQL backend to manage form submissions

## 💻 Technologies Used

- HTML5  
- CSS3  
- JavaScript  
- MySQL (via phpMyAdmin)  
- XAMPP (Apache + MySQL)

## 📁 Folder Structure


## 🛠️ Setup Instructions (Using XAMPP)

1. **Install XAMPP** from [apachefriends.org](https://www.apachefriends.org).
2. Copy this project folder into `htdocs` (e.g., `C:\xampp\htdocs\dental-website`).
3. Start **Apache** and **MySQL** from the XAMPP Control Panel.
4. Open **phpMyAdmin** (`http://localhost/phpmyadmin`) and:
   - Create a new database (e.g., `dental_clinic`).
   - Import the SQL file (`dental.sql`) located in the `/db` folder.
5. Update any database connection details in your PHP scripts (e.g., `php/submit_appointment.php`).
6. Open your browser and go to:

## 📬 Contact

Created by **Archie D. Custodio**  


--

> ⚠️ This project is for educational purposes. For production use, consider implementing security features like input validation, prepared statements (to prevent SQL injection), and HTTPS.
