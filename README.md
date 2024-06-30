# Setup Instructions
Follow these steps to set up and run the project locally.

## Prerequisites
Make sure you have the following installed:

- Git
- Composer
- PHP (>= 8.0.2)
- MySQL

## Step 1: Clone the repository
```git clone https://github.com/khristinesophia/khristinesophia-serrano-coding-test``` <br>
```cd khristinesophia-serrano-coding-test```

## Step 2: Install Dependencies
```composer install```

## Step 3: Set Environment Variables

- Copy the .env.example file to .env: <br>
```cp .env.example .env```

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

- Log into MySQL: <br>
```mysql -u root -p```

- Create the Database: <br>
```CREATE DATABASE e_commerce_db;```

- Create a User and Grant Privileges: <br>
```CREATE USER 'e_commerce_user'@'localhost' IDENTIFIED BY 'password';``` <br>
```GRANT ALL PRIVILEGES ON e_commerce_db.* TO 'e_commerce_user'@'localhost';``` <br>
```FLUSH PRIVILEGES;```

## Step 5: Generate Application Key
```php artisan key:generate```

## Step 6: Migrate the Database
```php artisan migrate```

## Step 7: Seed the Database
```php artisan db:seed```

## Step 8: Serve the Application
```php artisan serve```

#### Answer the question below by updating this file.

Q: The management requested a new feature where in the fictional e-commerce app must have a "featured products" section.
How would you go about implementing this feature in the backend?

A: To implement the "featured products" section in the backend of the e-commerce application, I would first modify the database schema by adding a boolean featured column to the products table. This column will allow products to be flagged as featured. Next, I would create a new API endpoint /api/products/featured to fetch products where featured is true. Administrators would access a dedicated section in the admin panel to mark products as featured. On the frontend, I'd update the application to display featured products prominently, enhancing visibility and potentially boosting sales.