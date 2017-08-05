# laravel-admin
Administraion For My Laravel Projects


## Installation

1. Rename the .env.example file to .env
```
mv .env.example .env
```
2. Within the .env file update the database connection to match your credintials

3. Run composer to install and update packages
```laravel
composer update
```
4. Install NPM Dependancies
```
nmp install
```

5. Generate Application Key
```
php artisan key:generate
```
6. Run migrations and seeds
```
php artisan migrate --seed
```

7. Setup facebook, and twitter oAuth keys in the .env file
```
FACEBOOK_ID=REPLACE WITH ID
FACEBOOK_SECRET=REPLACE WITH SECRET

TWITTER_ID=REPLACE WITH ID
TWITTER_SECRET=REPLACE WITH SECRET
```


### More Installaltion Instructions to come
