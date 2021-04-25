# Answer :

What will prevent this to happen is that the IT Developer must prevent customer to add product that has UnitsInStock equals 0 or total quantity higher UnitsInStock
before they can submit the cart order. There will be message to inform this.  </br>

I am using php laravel. </br>  

# Instalation and running:
$ composer install </br>
$ php artisan key:generate </br>
$ php artisan migrate </br>
$ php artisan passport:install </br>
$ php artisan db:seed </br>
$ php artisan serve </br>
then open postman and import Postman Collection

# Notes :

Database Schema : in folder Database Schema. </br>  

Postman Collection for functional testing : in folder  Postman Collection. </br>  

# How to test :

1. use POST /api/auth/signup folder User Authentication to register user</br>  
2. use POST /api/auth/login in folder User Authentication to login</br>  
3. use POST /api/carts/ in folder Carts to start cart  
   You will get cartToken and cartKey</br> 
3. use POST /api/carts/:CartToken in folder Carts to add cart</br>
   replace f9508a7d6e438beddb6912f7f90f2b12 with cartToken from no 3.</br> 
   Replace cartKey in body raw with cartKey from no 3.