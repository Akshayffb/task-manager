# `composer require laravel/breeze --dev`

Installs the Laravel Breeze package as a development dependency.

This command makes Breeze's Artisan commands available, including:

```bash
php artisan breeze:install
```

Laravel does not provide ready-made authentication pages by default, such as:

* Login
* Registration
* Password Reset
* Email Verification

Laravel Breeze adds these features with minimal authentication scaffolding.

Without installing the Breeze package, Laravel will not recognize the `breeze:install` command.

# `php artisan breeze:install blade`

Generates authentication scaffolding using Laravel Blade templates.

This command creates:

* Login pages
* Registration pages
* Password reset pages
* Email verification pages
* Logout functionality
* Authentication routes
* Authentication controllers
* Blade view files
* Tailwind CSS configuration

The `blade` option tells Breeze to generate traditional server-rendered Blade views instead of using frontend frameworks such as React or Vue.
