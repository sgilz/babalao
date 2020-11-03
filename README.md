# Babalao

Babalao is an eCommerce platform implemented in Laravel for special topics in software engineering. This project has been built by Santi, Manu, Pipe and Lumi :)


## Installation

Below you can find details on how to install BookStack on your own hosting. There are a number of installation options available depending on your setup. The install process will require some knowledge of hosting a PHP web application & database.

- [Requirements](#reqs).
- [Installation steps](#inst).



## <a name="reqs"></a>Requeriments
Babalao has the following requirements:

    PHP >= 7.2
        For installation and maintenence, you’ll need to be able to run php from the command line.
        Required Extensions: OpenSSL, PDO, MBstring, Tokenizer, GD, MySQL, Tidy, SimpleXML & DOM
    MySQL >= 5.6
        Single Database (All permissions advised since application manages schema)
    Git Version Control
        (Not strictly required but helps manage updates)
    Composer


## <a name="inst"></a>Installation steps

1. Clone the release branch of the BookStack GitHub repository into a folder.


    git clone https://github.com/sgilz/babalao.git


2. cd into the application folder and run:


    composer install

2. Also install npm dependencies


    npm install


if you prefer yarn, run:


    yarn

3. Set up a .env file, you'll need to have a mysql database.

You can copy [.env.example](https://github.com/laravel/laravel/blob/master/.env.example) from laravel repository

And replace it with your information

4. In the application root, generate a unique application key, by running:


    php artisan key:generate 


5. Run migrations


    php artisan migrate

6. Generate seeds


    php artisan db:seed

7. Now we need to generate the storage symlink, if you have problems with the existing one, delete:


    babalao/public/storage

And run 

    php artisan storage:link

7. We are almost ready, al you need to do now is run:


    php artisan serve


You are good to go!
