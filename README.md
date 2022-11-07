# Whenever you copy this repo into your PC, please run "composer install" and "npm i" from inside the root folder of the project to install all the dephendencies.
Without these, the project won't run.

# You'll have to create a DB in mySQL, and call it however you want to, and also configure it's name in .env file (I've called mine as "task"). After that, run "php artisan migrate:fresh", so this'll make all the tables in your DB. Because of some isues in my PC, I had to create data in "results" table by myself, so I was not able to test the seeders, but the program does get info, and post it on the page beautifully.

After installation run the laravel project with xampp (so you'll have your mySQL server for you), and also run "npm run dev" for the ret of the stuff to work. Go to 127.0.0.1 in your browser, to view the project itself.

The style is as minimal as possible, and made by me on pure css.
