# seemsneatBackendTask

Project has what was needed for requirements, you can create your database fill credentials in the env file, do the database migration and test api endpoints for Customer data.
For Currency converter - only login/register to the app needed in DB.


Clone the project repository by running the command below if you use SSH

```
git clone git@github.com:boyziusas/seemsneattask.git
```

If you use https, use this instead

```
git clone https://github.com/boyziusas/seemsneattask.git
```

Switch to the repo folder

```
cd seemsneattask
```

Install all the dependencies using composer

```
composer install
```

Copy the example env file and **make the required configuration changes** in the .env file

```
cp .env.example .env
```

Generate a new application key

```
php artisan key:generate
```

Change your DB name in .env file and then do the DB migrations in terminal

```
php artisan migrate
```


Don't forget to run node commands

```
npm install && npm run dev
```

Start the local development server

```
php artisan serve
```

You can now access the server at http://127.0.0.1:8000

**Used command list**

```
git clone git@github.com:boyziusas/seemsneattask.git
cd seemsneattask
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run dev
php artisan serve 
```
