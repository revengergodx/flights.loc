## AirBooking

It's a simple application that allows you to book a tickets for the flight.
It's currently in development so new features will come after each new push.

### Available functions

Currently, you can use all laravel breeze functions with profile (register, login, edit), use it to watch all available flights, and new flights as administrator. 
To use administrator features you need to manually change you role in users table in database to "1".

#### Using

First of all you need to copy your .env.example file, change its name to .env and set up your settings.
In this project, in learning purposes, I used sqlite for database and composer for starting local server on my machine.
If you wanna use same settings to quick familiarization with this app, setup sqlite connection, run terminal or cmd in project folder and use composer run dev.

If you don't have composer for some reason and/or want to use mysql or other database, setup it in .env file, then run two terminals or cmds in project folder and use "npm run dev" and "php artisan run dev".

