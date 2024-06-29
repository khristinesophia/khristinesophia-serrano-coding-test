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
cd khristinesophia-serrano-coding-test
```

## Step 2: Install Dependencies
```
composer install
npm install && npm run dev
```

## Step 3: Set Environment Variables
- Copy the .env.example file to .env:
`cp .env.example .env`

## Step 4: Generate Application Key
`php artisan key:generate`

## Step 5: Migrate the Database
`php artisan migrate`

## Step 6: Seed the Database
`php artisan db:seed`

## Step 7: Serve the Application
`php artisan serve`
