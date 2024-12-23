# 🚀 SQR-1 Academy Project ()

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

# API Documentation

## **Users**

### **1. Register a New User**

**Endpoint:** `POST /register`

**Description:**
Registers a new user by providing the required details.

**Request Body:**

```json
{
    "name": "string",
    "email": "string",
    "password": "string"
}
```

**Response:**

-   **201 Created:** User successfully registered.
-   **400 Bad Request:** Validation errors.

---

### **2. Login User**

**Endpoint:** `POST /login`

**Description:**
Authenticates the user and returns an access token.

**Request Body:**

```json
{
    "email": "string",
    "password": "string"
}
```

**Response:**

-   **200 OK:** User authenticated.
-   **401 Unauthorized:** Invalid credentials.

---

### **3. Get Authenticated User Profile**

**Endpoint:** `GET /profile`

**Description:**
Returns the profile information of the authenticated user.

**Authorization:**

-   Requires Sanctum authentication.

**Response:**

-   **200 OK:** Returns user details.
-   **401 Unauthorized:** User is not authenticated.

---

### **4. Logout User**

**Endpoint:** `POST /logout`

**Description:**
Logs out the authenticated user and invalidates the access token.

**Authorization:**

-   Requires Sanctum authentication.

**Response:**

-   **200 OK:** User successfully logged out.

---

## **Shopping Cart**

### **1. View Shopping Cart**

**Endpoint:** `GET /cart`

**Description:**
Returns the contents of the authenticated user's shopping cart.

**Authorization:**

-   Requires Sanctum authentication.

**Response:**

-   **200 OK:** Returns cart details.
-   **401 Unauthorized:** User is not authenticated.

---

### **2. Add Product to Cart**

**Endpoint:** `POST /cart/add`

**Description:**
Adds a product variant to the authenticated user's shopping cart.

**Request Body:**

```json
{
    "variant_id": "integer",
    "quantity": "integer"
}
```

**Response:**

-   **200 OK:** Product added to cart.
-   **400 Bad Request:** Validation errors or insufficient stock.

---

### **3. Update Product Quantity in Cart**

**Endpoint:** `PUT /cart/update/{CartItemID}`

**Description:**
Updates the quantity of a product variant in the shopping cart.

**Request Body:**

```json
{
    "quantity": "integer"
}
```

**Response:**

-   **200 OK:** Product quantity updated.
-   **404 Not Found:** Cart item not found.

---

### **4. Remove Product from Cart**

**Endpoint:** `DELETE /cart/remove/{CartItemID}`

**Description:**
Removes a product variant from the shopping cart.

**Response:**

-   **200 OK:** Product removed from cart.
-   **404 Not Found:** Cart item not found.

---

## **Products and Product Variants**

### **1. List All Products**

**Endpoint:** `GET /products`

**Description:**
Returns a list of all available products along with their variants.

**Response:**

-   **200 OK:** Returns a list of products and variants.

---

### **2. Get Product Details**

**Endpoint:** `GET /products/{ProductID}`

**Description:**
Returns details of a specific product, including its variants.

**Response:**

-   **200 OK:** Returns product details.
-   **404 Not Found:** Product not found.

---

## **Orders**

### **1. Create a New Order**

**Endpoint:** `POST /orders/create`

**Description:**
Creates an order based on the contents of the authenticated user's shopping cart.

**Authorization:**

-   Requires Sanctum authentication.

**Request Body:**

```json
{
    "PaymentMethod": "string",
    "ShippingAddress": "string"
}
```

**Validation:**

-   Orders cannot be created if the shopping cart is empty.

**Response:**

-   **201 Created:** Order successfully created.
-   **400 Bad Request:** Shopping cart is empty.

---

### **2. List All Orders**

**Endpoint:** `GET /orders`

**Description:**
Lists all orders placed by the authenticated user.

**Authorization:**

-   Requires Sanctum authentication.

**Response:**

-   **200 OK:** Returns a list of orders.
-   **401 Unauthorized:** User is not authenticated.

---

### **3. Get Order Details**

**Endpoint:** `GET /orders/{OrderID}`

**Description:**
Returns details of a specific order placed by the authenticated user.

**Authorization:**

-   Requires Sanctum authentication.

**Response:**

-   **200 OK:** Returns order details.
-   **404 Not Found:** Order not found or does not belong to the user.
