# 🚀 Laravel Project Setup Guide

Welcome to the Laravel project! Follow these steps to get your project up and running smoothly. If you encounter any issues, feel free to reach out. Happy coding! 😄

## 🛠️ Prerequisites

Before you begin, ensure you have the following installed on your system:

- PHP >= 8.0
- Composer
- MySQL or any other database of your choice

## 📦 Clone the Repository

First, clone the repository to your local machine:

```bash
git clone https://github.com/your-username/your-repo.git
cd your-repo
```

## 🔧 Install Dependencies

Install PHP dependencies using Composer:

```bash
composer install
```

## 🔑 Environment Setup

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

## 🗄️ Database Configuration

Open the `.env` file and update the following lines with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Run the database migrations and seed the database:

```bash
php artisan migrate
```

## 🌐 API Endpoints

### Auth API Endpoints

- **Register**: `POST /api/register`
- **Login**: `POST /api/login`
- **Logout**: `POST /api/logout` (requires Bearer token)

## 🔄 Running the Project

To start the local development server, run:

```bash
php artisan serve
```

Open your postman to test the app `http://127.0.0.1:8000/api/register`.

## 🌟 Features

- **User Authentication**: Register, login, and logout functionality.
- **CRUD Operations**: Basic CRUD operations for managing resources.



Happy Coding! 💻✨
