# Answer :

What will prevent this to happen is that the IT Developer must prevent customer to add product that has UnitsInStock equals 0 or total quantity higher than UnitsInStock
before they can submit the cart order. There will be message to inform this.</br>

# Used Technology :

I am using php laravel, API, Postman, authentication, MYSQL.

# Instalation and running server locally:
1. Use command prompt and direct to root folder and type :</br>
   $ composer install</br>
2. Rename file .env.example to .env in root folder.</br>
   Open the file .env and adjust DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD to your MYSQL setting</br>
3. Use command prompt and direct to root folder and type :  
   $ php artisan key:generate </br>
   $ php artisan optimize </br>
   $ php artisan migrate </br>
   $ php artisan passport:install </br>
   $ php artisan db:seed </br>
   $ php artisan serve </br>
4. Open Postman and import Shopping Cart.postman_collection.json

# Notes :

Database Schema : in folder Database Schema. </br>  

Postman Collection (API endpoints design) : in folder Postman Collection. </br>  

# How to do functionality test (using Postman) :

1. Use POST /api/auth/signup folder User Authentication to register user.</br>
   Click the button "Send".</br>
2. Use POST /api/auth/login in folder User Authentication to login.</br> 
   Click the button "Send".</br>
3. Use POST /api/carts/ in folder Carts to start cart.</br>
   Click the button "Send".  
   You will get cartToken and cartKey.</br> 
4. Use POST /api/carts/:CartToken in folder Carts to add cart.</br>
   Replace f9508a7d6e438beddb6912f7f90f2b12 in url with cartToken from no 3.</br> 
   Replace cartKey in body raw with cartKey from no 3.</br>
   Replace productID in body raw with one of the id from products. I am using id = 21.</br>
   Replace quantity in body raw with 30.</br>
   Click the button "Send".</br>
5. Use POST /api/carts/:CartToken/checkout in folder Carts to order the cart.</br>
   Replace f9508a7d6e438beddb6912f7f90f2b12 in url with cartToken from no 3.</br>
   Click the button "Send".</br> 
   You will get response message 'The quantity you're ordering of  isn't available in stock'.