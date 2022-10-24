# Laravel Filament custom theme

Filament project with a custom theme.

![screenshot](https://github.com/leandrocfe/filament-custom-theme/blob/a5f6977195420513ae8460f5eecda5222321b577/screenshots/theme-1.jpg?raw=true)

## Installation

Clone the repository:

```bash
git clone https://github.com/leandrocfe/filament-custom-theme.git
```

Switch to the repo folder:

```bash
cd filament-custom-theme
```

Create a new MySQL database called `filament_custom_theme`. Copy the example env file and set the database connection:

```bash
cp .env.example .env
```

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=filament_custom_theme
DB_USERNAME=YOUR_USERNAME
DB_PASSWORD=YOUR_PASSWORD
```

You may run the following commands in your terminal:

```bash
composer install
php artisan migrate --seed
npm install && npm run build
```

## Usage

After the project has been built, start Laravel's local development server using the Laravel's Artisan CLI serve command:
```bash
php artisan serve
```
Once you have started the Artisan development server, your application will be accessible in your web browser at [http://localhost:8000/admin](http://localhost:8000/admin).

You can choose a user's credentials and authenticate to access the Filament Admin Panel (default password: *password*).

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
