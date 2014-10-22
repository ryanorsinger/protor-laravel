# My Laravel additions and setup steps for new projects.

## Routine tasks that I take when setting up a Laravel project
- Create env-template.php and .env.local.php with return $_ENV['values']
- Remove composer.lock from .gitignore
- Set laravel in composer.json to 4.2.9 (until further notice)
- Add $_ENV vars references to app/config/database.php
- Create UserTableSeeder with an admin user using $_ENV vars for credentials.
- Add $_ENV vars to app/config/ mail.php
- Set environment in bootstrap/start.php. Have it return the environment if set else return 'local':
        $env = $app->detectEnvironment(function()
        {
            if (!empty($_SERVER['LARAVEL_ENV'])) {
                return $_SERVER['LARAVEL_ENV'];
              }
            return 'local';
        });
- Replace existing README.md with My Own README text documenting these steps
- Add master layout
- Add partials
- Add 403 page
- Add 404 page

## Common packages and dependencies
- Add Faker, phpunit, ways generators, laracasts commander,
    - "fzaninotto/faker": "v1.3.0"
    - 'Way\Generators\GeneratorsServiceProvider',
- Add Commander package
    - 'Laracasts\Commander\CommanderServiceProvider'


