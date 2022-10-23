# Laravel Filament custom theme

Filament project with a custom theme.

![screenshot](https://github.com/leandrocfe/filament-custom-theme/blob/master/screenshots/theme-1.jpg?raw=true)

## Installation

You may run the following commands in your terminal:

```bash
cd filament-custom-theme
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

You may choose an user account (users table) and access the Filament Admin Panel.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
