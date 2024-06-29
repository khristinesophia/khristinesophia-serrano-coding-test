# Setup Instructions
Follow these steps to set up and run the project locally.

## Prerequisites
Make sure you have the following installed:

- Git
- Composer
- PHP (>= 8.0.2)
- MySQL

## Step 1: Clone the repository
```
git clone https://github.com/khristinesophia/khristinesophia-serrano-coding-test
```
```
cd khristinesophia-serrano-coding-test
```

## Step 2: Install Dependencies
```
composer install
```

## Step 3: Set Environment Variables

- Copy the .env.example file to .env:
```
cp .env.example .env
```

- Update the .env file with your MySQL database credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=e_commerce_db
DB_USERNAME=e_commerce_user
DB_PASSWORD=password
```

## Step 4: Create a New MySQL Database

- Log into MySQL:
```
mysql -u root -p
```

- Create the Database:
```
CREATE DATABASE e_commerce_db;
```

- Create a User and Grant Privileges:
```
CREATE USER 'e_commerce_user'@'localhost' IDENTIFIED BY 'password';
```
```
GRANT ALL PRIVILEGES ON e_commerce_db.* TO 'e_commerce_user'@'localhost';
```
```
FLUSH PRIVILEGES;
```

## Step 5: Generate Application Key
```php artisan key:generate```

## Step 6: Migrate the Database
```php artisan migrate```

## Step 7: Seed the Database
```php artisan db:seed```

## Step 8: Serve the Application
```php artisan serve```