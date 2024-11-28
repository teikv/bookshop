<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Laravel Bookstore Application

## Description
This is a Laravel-based application designed to manage and display a list of books. 
The application includes key features such as showcasing books on the homepage, 
paginated book lists, and detailed views for each book. It utilizes a database 
to store book information and integrates them with views for seamless user interaction.

---

## Steps Completed

### 1. Initialize Laravel Project
- Created a new Laravel application using `composer create-project`.
- Installed necessary packages and configured the environment (`.env`) to connect to the database.

---

### 2. Database Setup
- Created a `books` table via **migrations**:
  - Fields include: `id`, `title`, `image`, `price`, `country`, `description`, and `slug`.
  - The `slug` field is used for creating user-friendly URLs instead of IDs.
- Ran migrations to apply changes to the database.

---

### 3. Added Sample Data
- Created a Seeder (`BooksTableSeeder`) to insert sample data into the `books` table.
- Data includes book titles, images, prices, countries, descriptions, and slugs.
- Executed the seeder using `php artisan db:seed`.

---

### 4. Built Model and Controller
- Created a **Model** `Book` to interact with the `books` table.
- Developed a **Controller** `BookController` with the following methods:
  - `index`: Displays a list of books.
  - `show`: Displays detailed information about a book using its `slug`.

---

### 5. Built User Interface (Views)
- Used Blade templates to create user-friendly interfaces:
  1. **`homepage.blade.php`**: Displays featured books on the homepage.
  2. **`booklist.blade.php`**: Shows all books with pagination.
  3. **`bookdetail.blade.php`**: Displays detailed information for a specific book.

---

### 6. Defined Routes
- Configured routes in `web.php`:
  - `GET /`: Displays the homepage.
  - `GET /books`: Displays the book list.
  - `GET /books/{slug}`: Displays detailed information for a book based on its `slug`.

---

### 7. Git Management and Deployment
- Created a `test-database` branch to manage database-related changes.
- Committed and pushed the following:
  - Database migrations and seeding setup.
  - Views and controller logic.
- Pushed changes to GitHub for source code management.

---

## Installation and Usage

### 1. Installation
- Clone the repository:
  ```bash
  git clone <repository-url>
  cd <project-directory>
  ```
- Install dependencies:
  ```bash
  composer install
  ```
- Create a `.env` file and configure database connection settings.

### 2. Database Setup
- Run migrations to create tables:
  ```bash
  php artisan migrate
  ```
- Seed the database with sample data:
  ```bash
  php artisan db:seed
  ```

### 3. Run the Application
- Start the development server:
  ```bash
  php artisan serve
  ```
- Access the application at [http://localhost:8000](http://localhost:8000).

---

## Features
1. **Book List**: Displays a list of books with basic details such as title, price, and image.
2. **Book Details**: Shows detailed information about a book, including description and "Buy Now" button.
3. **Pagination**: Paginates the book list for better user experience.
4. **Future Extensions**: Ready for features like search, filtering, and sorting by price or country.

---

Let me know if you need assistance with additional features or documentation! 😊
