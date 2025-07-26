# 📚 Bookworm Haven — PHP Registration System on AWS EC2

![Landing Page Screenshot](landingPage.jpg)

A beautifully designed **PHP-based member registration system** hosted on an **AWS EC2 Ubuntu instance**. Users can register with their **name, email, and phone number**, and the data is securely stored in a **MySQL database**. This repository also includes a responsive UI with modern styling and practical cloud deployment steps.

---

## 🌟 Features

- 📋 Member registration form (Name, Email, Phone)
- 💾 Data saved to MySQL `books_db`
- 🌐 Hosted on Apache Web Server
- 🎨 Stylish responsive design
- ☁️ Deployed on AWS EC2 Ubuntu Instance
- 🔐 Secure MySQL root user setup

---

## 🧰 Technologies Used

- HTML5 + CSS3
- PHP 8
- MySQL 8
- Apache2
- Ubuntu 22.04 LTS
- AWS EC2

---

## 🚀 Setup Instructions

> Follow these commands step-by-step to fully replicate the setup on a fresh EC2 instance.

---

## 1️⃣ Launch & Connect to EC2

```bash
ssh -i your-key.pem ubuntu@your-ec2-public-ip
```

---

## 2️⃣ Update System

```bash
sudo apt update
sudo apt upgrade -y
```

---

## 3️⃣ Install Apache Web Server

```bash
sudo apt install apache2 -y
```

---

## 4️⃣ Install MySQL Server

```bash
sudo apt install mysql-server -y
```

---

## 5️⃣ Install PHP & Required Modules

```bash
sudo apt install php libapache2-mod-php php-mysql -y
```

---

## 6️⃣ Restart Apache

```bash
sudo service apache2 restart
```

---

## 7️⃣ Install phpMyAdmin (Optional)

```bash
sudo apt install phpmyadmin -y
```

---

## 8️⃣ Configure MySQL User & Security

```bash
sudo mysql
```

Inside MySQL shell:

```sql
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'yourpassword';
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED WITH caching_sha2_password BY 'yourpassword';
FLUSH PRIVILEGES;
SELECT user, plugin, host FROM mysql.user;
SELECT user, authentication_string, plugin, host FROM mysql.user;
```

---

## 9️⃣ Create Database and Table

```sql
CREATE DATABASE books_db;
USE books_db;
CREATE TABLE members (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(20) NOT NULL
);
SHOW DATABASES;
SHOW TABLES;
DESCRIBE members;
```

---

## 🔟 Upload PHP Project to Web Server

```bash
cd /var/www/html
sudo mkdir bookworm-haven
cd bookworm-haven
scp -i your-key.pem index.php ubuntu@your-ec2-ip:/var/www/html/bookworm-haven/
```

---

## 1️⃣1️⃣ Set Proper Permissions

```bash
sudo chown -R www-data:www-data /var/www/html/bookworm-haven
sudo chmod -R 755 /var/www/html/bookworm-haven
```

---

## 1️⃣2️⃣ Access Website

```text
http://<your-ec2-public-ip>/bookworm-haven/
```

---

## 1️⃣3️⃣ Check Apache Status

```bash
sudo apache2ctl status
```

---

## 1️⃣4️⃣ Optional: Install and Run Load Test

```bash
sudo add-apt-repository universe
sudo apt install software-properties-common -y
sudo apt install stress -y
stress -c 8
```

---

## 🛠️ Useful MySQL Commands

```bash
sudo mysql -u root -p
USE books_db;
SELECT * FROM members;
SELECT user, host, plugin FROM mysql.user;
```

---

## 📦 Final Checklist

- ✅ EC2 running and accessible
- ✅ Apache + PHP + MySQL installed
- ✅ Database & table created
- ✅ `index.php` uploaded to web directory
- ✅ File permissions set correctly
- ✅ Form submits and stores data to `members` table
