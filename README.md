🚀 Project Setup
1. Clone the Repository

git clone https://github.com/your-username/your-repo.git
cd your-repo

2. Install Dependencies

composer install
npm install && npm run dev

3. Configure Environment

Copy the example .env file:

cp .env.example .env

Then update the .env file with your settings:

APP_NAME="Wallet System"
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_user
DB_PASSWORD=your_password

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

Run Migrations and Seeders

php artisan migrate --seed

5. Serve the Application

php artisan serve

6. Admin Access

Use the seeded credentials to log in:

Email: user1@example.com
Password: password

🧪 Postman API Collection

The Postman collection is included in the project at:

postman/WalletSystem.postman_collection.json

To use:

    Open Postman

    Import the JSON file

    Set the base_url variable to match your APP_URL

    Start making requests!

📂 Folder Structure Highlights

    app/Models: Contains models like TopupRequest, WithdrawalRequest, Client, Admin.

    app/Http/Controllers: Handles all request logic.

    app/Notifications: Contains all custom notification logic.

    database/migrations: All table structures.

    resources/views: Admin panel views (Laravel Blade).

    routes/web.php: Web/admin routes.

    routes/api.php: API routes for mobile or frontend use.

📄 License

    This project is open-source and available under the MIT license.
