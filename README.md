## to get the vendor Folder and other plugins
composer install

## to get updated with the latest plugin updates
composer update

## composer requires
composer require spatie/laravel-permission
composer require laravelcollective/html
composer require laravel/ui
    - php artisan ui bootstrap --auth
    - npm install
    - npm run dev

## create the database and change the .env config for thr database connection
Database name: UserandRoleManagement

## migrate the taabes to the database
php artisan migrate

## Database seeds
php artisan db:seed --class=MenuTableSeeder
php artisan db:seed --class=PermissionTableSeeder
php artisan db:seed --class=CreateAdminUserSeeder

## start the project
php artisan serve
