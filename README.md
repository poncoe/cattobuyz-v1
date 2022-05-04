# cattobuyz-frontend

## Build Setup

```bash
# install dependencies
$ npm install

# nuxt.config.js
1- update the <project directory>/nuxt.config.js
```
axios: {
    baseURL: ''   // lumen project base url
  }
  
  env: {
      PAYPAL_CLIENT_ID: ""   // paypal client id
    }
```
2- update the <project directory>/admin/nuxt.config.js
```
axios: {
    baseURL: ''    // lumen project base url
  }
  
  env: {
      PUSHER_APP_KEY: ""   // pusher app key
    }
```

## serve with hot reload at localhost:3000 for website and localhost:4000 for admin
$ npm run dev

## build for production and launch server
$ npm run build

# cattobuyz-backend
## Installation
`composer install`
## copy .env.example
copy .env.example to .env and setup db settings
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
## DB Setup
run the below commands to migrate and seed the database
```
php artisan migrate
php artisan db:seed
```
## Uploads
create an uploads/ directory in the public/ directory and make it writable

## jwt 
Generate jwt secret key with this command
```
php artisan jwt:secret
```

