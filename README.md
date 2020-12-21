### Step 1
    - Install composer
    - Install git
### Step 2
    ```
        git clone https://github.com/eba-alemayehu/supply-chain.git
    ```
### Step 3
    - Create database `supply_chain`
    - Copy .env.example to .env
    - run 
        ```
            composer install 
            npm install
            npm run dev
            php artisan migrate
            php artisan key:gen
            php artisan serve
        ```
