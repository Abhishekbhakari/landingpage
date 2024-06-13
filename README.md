# My Project

## Description
This project is a landing page for the Adobe Substance 3D Collection, featuring a form to download a whitepaper.

## Folder Structure
my_project/
│
├── css/
│ └── styles.css
│
├── images/
│ └── adobe-logo.png
│
├── js/
│ └── scripts.js
│
├── includes/
│ └── db_connect.php
│
├── index.html
├── submit.php
└── README.md
## Setup Instructions

1. **Install XAMPP**:
   - Download and install XAMPP from https://www.apachefriends.org/index.html.
   - Start Apache and MySQL from the XAMPP Control Panel.

2. **Set Up Project Folder**:
   - Create a folder named `my_project` inside the `htdocs` directory (e.g., `C:\xampp\htdocs\my_project`).

3. **Create Database**:
   - Open phpMyAdmin (usually accessible at `http://localhost/phpmyadmin`).
   - Create a new database (e.g., `your_database_name`).
   - Create a table named `submissions` with columns for each form field (e.g., `first_name`, `last_name`, `business_email`, `phone_number`, `company_name`, `job_title`, `company_size`, `industry`, `functional_area`, `state`, `zip`, `country`, `agree`).

4. **Place Project Files**:
   - Place the HTML, CSS, PHP, and image files according to the folder structure described above.

5. **Run the Project**:
   - Open a web browser and navigate to `http://localhost/my_project/index.html` to view the landing page.
   - Submit the form to test if the data is being stored in the database correctly.


