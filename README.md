# E-Commerce Admin Dashboard

A Laravel 12 learning project for managing products stored in MySQL.

## Features

- Dashboard with product counts and inventory overview.
- Product list with prices and stock availability.
- Create, edit, and delete products.
- Form validation, preserved input, and success messages.
- Responsive CSS for the dashboard and product pages.

## Requirements

- PHP 8.2 or newer
- Composer
- MySQL

## Local setup

1. Clone this repository and open its directory.
2. Run `composer install`.
3. Copy `.env.example` to `.env`.
4. Create a MySQL database named `ecommerce_dashboard`.
5. Set `DB_CONNECTION=mysql`, `DB_HOST=127.0.0.1`, `DB_PORT=3306`, and `DB_DATABASE=ecommerce_dashboard` in `.env`. Configure your own database username and password.
6. Run `php artisan key:generate`.
7. Run `php artisan migrate`.
8. Run `php artisan serve --port=8005`.
9. Open `http://127.0.0.1:8005/dashboard`.

The database starts empty. Add products at `/products/create`.

The `.env` file, local database contents, dependencies, and runtime files are excluded from version control. Install dependencies and configure your own environment after cloning.

This is a learning project. Authentication and authorization are not implemented yet.
