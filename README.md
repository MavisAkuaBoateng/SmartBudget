<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# SmartBudget 💰

SmartBudget is a **Laravel 12** web application for personal finance management. It helps users track their expenses, manage budgets, and gain insights into their spending patterns with a clean, responsive interface.

## 🌟 Features

- **Budget Management:** Create, update, and delete budget items.  
- **Expense Tracking:** Log and categorize expenses.  
- **Dashboard:** View all budget items in a simple and clean layout.  
- **Responsive Design:** Works seamlessly on desktop and mobile.  
- **Flash Messages:** Get instant feedback when adding, updating, or deleting items.

## 🛠️ Installation

1. **Clone the repository:**

```bash
git clone https://github.com/MavisAkuaBoateng/SmartBudget.git
cd SmartBudget

2. Install PHP dependencies:
composer install

3. Install Node.js dependencies (optional if using assets):
npm install

4. Configure your environment:
cp .env.example .env
php artisan key:generate

5. Set up your database in .env (SQLite or MySQL).

6. Run migrations and seed sample data:
php artisan migrate --seed

7. Start the development server:
php -S 127.0.0.1:8080 -t public
Open your browser and visit http://127.0.0.1:8000.

🚀 Usage
1. Home Page: Welcome message with a call-to-action to the budget dashboard.

2. Budget Dashboard: View all budget items.

3. Add Item: Add new budget entries.

4. Edit/Delete: Manage existing budget items directly from the dashboard.

🤝 Contributing

Contributions are welcome!

1. Fork the repository

2. Create a feature branch (git checkout -b feature/YourFeature)

3. Commit your changes (git commit -m "Add feature")

4. Push to the branch (git push origin feature/YourFeature)

5. Open a Pull Request

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
