commands for running:
1. open two terminals with the project directory and type:
	-npm run dev
	-php artisan serve
2. open .env file and configure your databases i.e.
	DB_CONNECTION=mariadb
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=blog
	DB_USERNAME=root
	DB_PASSWORD=123
3. perform database migration
	- php artisan migrate
4. seed data into database
	- php artisan db:seed