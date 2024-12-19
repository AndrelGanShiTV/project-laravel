# 🚀 My Laravel Project

This project is a web application built with the **Laravel** framework and using **Herd** to run locally.

---

## 📦 **Prerequisites**

Before starting, make sure you have the following programs installed on your computer:

-   [Git](https://git-scm.com/downloads) - To clone the repository.
-   [Herd](https://herd.dev/) - To run the Laravel environment locally.
-   [Composer](https://getcomposer.org/download/) - To manage PHP dependencies.

---

## 📥 **Installation**

Follow these steps to have a copy of the project on your local machine.

### 1️⃣ **Clone the repository**

```bash
git clone https://github.com/AndrelGanShiTV/SQR-Academy-BackEnd.git
```

---

### 2️⃣ **Access the project folder**

```bash
cd project-laravel
```

---

### 3️⃣ **Install dependencies with Composer**

```bash
composer install
```

> **Note:** This command downloads all the dependencies defined in the `composer.json` file.

---

### 4️⃣ **Set up the .env file**

Copy the sample `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Then, update the database connection variables, for example:

#### mysql

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

```

#### sqlite

```
DB_CONNECTION=sqlite

```

---

### 5️⃣ **Generate the application key**

```bash
php artisan key:generate
```

This will generate a new unique key for the application.

---

### 6️⃣ **Run database migrations**

```bash
php artisan migrate
```

This command will create the necessary tables in the database.

---

## 🚀 **Run the project locally**

To run the Laravel application with Herd, use the following command:

```bash
herd share
```

Herd will provide a URL to access the application from your browser.

---

## 📚 **Useful commands**

| **Command**               | **Description**                  |
| ------------------------- | -------------------------------- |
| `herd share`              | Run the project locally          |
| `php artisan migrate`     | Run database migrations          |
| `php artisan db:seed`     | Seed the database with test data |
| `php artisan cache:clear` | Clear the application cache      |
| `php artisan route:list`  | View all routes in the app       |

---

## 📄 **Important files**

| **File / Folder**     | **Description**               |
| --------------------- | ----------------------------- |
| `.env`                | Environment variables file    |
| `composer.json`       | List of PHP dependencies      |
| `database/migrations` | Database migration files      |
| `storage/`            | Generated files (logs, cache) |
| `public/`             | Public folder for the app     |

---

## 📦 **How to contribute**

If you want to contribute to this project, follow these steps:

1. **Fork** this repository.
2. Create a new branch (`git checkout -b my-new-feature`).
3. Make your changes and **commit** them (`git commit -m 'Added new feature'`).
4. Push your branch (`git push origin my-new-feature`).
5. Create a **Pull Request**.

---
