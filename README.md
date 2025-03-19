## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Laravel Encryption and Decryption Project setup
- Install the required packages by running the following command in your terminal:
 git clone https://github.com/ranvijaychandel/laravel-encrypt-decrypt.git
 cd laravel-encrypt-decrypt
 composer install
 - Create a new database and update the .env file with your database credentials.
 - Run the following command to create the tables in the database:
 php artisan migrate
 - Run the following command to seed the database with some data:
 php artisan db:seed
 - Run the following command to start the server:
 php artisan serve
 - Open your web browser and navigate to http://localhost:8000


## Encryption and Decryption
    App\Services\EncryptionService
    There is to function encrypt to decrypt
    $this->encryptionService->encrypt($data); data will encrypt
    $this->encryptionService->decrypt($data); data wil decrypt
Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
