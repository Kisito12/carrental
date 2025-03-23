# **Car Rental System - Laravel 12** 🚗💼  

This is a **Car Rental System** built using **Laravel 12** and **Tailwind CSS**, designed for Cameroon. It includes a **multi-authentication system**, local payment integration, and a full MVC structure.

---

## **📌 Features**
- User Authentication (Laravel Breeze)
- Car Listing (Add, Edit, Delete)
- Rental Booking System
- Admin & User Dashboard
- Local Payment Integration
- Responsive UI with Tailwind CSS

---

## **📋 Requirements**  
Make sure your system meets the following requirements before proceeding:  

### **Server Requirements**  
- PHP **>= 8.1**
- Composer **>= 2.x**
- MySQL **>= 5.7** or MariaDB **>= 10.x**
- Node.js **>= 16.x** (for frontend dependencies)
- NPM **>= 8.x** or Yarn **(optional)**
- Apache/Nginx Server  
- Laravel 12  

### **Local Development Tools (Recommended)**  
- Laravel Sail (for Docker users)
- Postman (for API testing)
- VS Code / PHPStorm (Recommended IDEs)

---

## **💾 Installation Guide**  

### **1️⃣ Clone the Repository**  
```bash
git clone https://github.com/Kisito12/carrental.git
cd carrental
```

### **2️⃣ Install Dependencies**  
```bash
composer install
npm install && npm run build
```

### **3️⃣ Configure the Environment**  
Create a `.env` file from `.env.example` and update database credentials:  
```bash
cp .env.example .env
```
Edit `.env` with your database details:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### **4️⃣ Generate Application Key**  
```bash
php artisan key:generate
```

### **5️⃣ Run Migrations & Seeders**  
```bash
php artisan migrate --seed
```

### **6️⃣ Storage Setup**  
```bash
php artisan storage:link
```

### **7️⃣ Start the Application**  
```bash
php artisan serve
```
Access the project at:  
👉 `http://127.0.0.1:8000`

---

## **🔑 Default Admin Credentials**  
After running migrations & seeders, use these credentials:  

| Role  | Email              | Password  |
|--------|------------------|-----------|
| Admin  | admin@example.com | password  |

Change these from the **Admin Dashboard**.

---

## **📦 Folder Structure**
```
car-rental/
│-- app/                   # Application files (Controllers, Models, etc.)
│-- bootstrap/             # Framework bootstrapping
│-- config/                # Configuration files
│-- database/              # Migrations, Seeders, and Factories
│-- public/                # Public assets (CSS, JS, images)
│-- resources/             # Blade templates & assets
│-- routes/                # Web & API routes
│-- storage/               # Uploaded files
│-- tests/                 # Automated tests
│-- .env                   # Environment configuration
│-- artisan                # Artisan CLI
│-- composer.json          # PHP dependencies
│-- package.json           # JavaScript dependencies
│-- webpack.mix.js         # Laravel Mix setup
```

---

## **🌍 Local Payment Integration**  
The system supports **Cameroon local payments**. You need to configure API keys in `.env`:  
```
PAYMENT_GATEWAY_KEY=your_api_key
PAYMENT_SECRET=your_secret_key
```

---

## **🐞 Debugging & Logs**  
If you face issues, check Laravel logs:  
```bash
tail -f storage/logs/laravel.log
```

Run in debug mode:  
```bash
php artisan serve --env=local
```

---

## **🛠 Common Issues & Fixes**
| Issue | Solution |
|-------|----------|
| `SQLSTATE[HY000] [1045] Access denied` | Check your `.env` database credentials |
| `APP_KEY not set` | Run `php artisan key:generate` |
| `500 Server Error` | Check `storage/logs/laravel.log` |
| `Class not found` | Run `composer dump-autoload` |

---

## **📢 Contribution Guide**  
1. Fork the repository  
2. Create a new branch (`git checkout -b feature-name`)  
3. Commit changes (`git commit -m "Added feature"`)  
4. Push branch (`git push origin feature-name`)  
5. Create a Pull Request  

---