<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Peer to Peer Betting Web Application
This web application is a peer to peer betting platform where individuals can bet against each other on sports matches, and the winner is credited with the bet amount. The web application is built using the Laravel framework and it integrates with the Daraja API to facilitate the sending and receiving of money on mobile devices. Users can select multiple bets and bet against each other.

Features
The following are the main features of the web application:

User registration and login
Selection of sports matches to bet on
Selection of multiple bets and bet amounts
Peer to peer betting
Integration with the Daraja API for mobile money transactions
Crediting of the winner's account after the match outcome is determined
View of past bets and their outcomes
Installation
To install and run the web application, follow the following steps:

Clone the repository from GitHub: git clone https://github.com/Odenyi/competion_platform.git
Install the dependencies by running composer install in the project directory
Copy the .env.example file to .env and update the database configuration and Daraja API credentials
Run the database migrations by running php artisan migrate
Start the development server by running php artisan serve
Dependencies
The following are the main dependencies of the web application:

Laravel framework
Daraja API
MySQL database
Contribution
If you would like to contribute to the development of the web application, please fork the repository and create a pull request with your changes.

License
This web application is licensed under the MIT license.
