# The Brand - Fullstack
PHP - Version: 7.1.33
## Usage

Local Development Server
----- 
If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve yii command. This command will start a development server at http://localhost:8000:
```bash
php yii serve
```

Database
----- 
Please make sure that the database was created on the localhost with the name 'thebranddb'
(U need the 'thebranddb_v2.0.sql' script for this)

## Development
Load Frontend depandencies
```bash
npm install
```

Load Backend depandencies
```bash
composer update
```

Compile SCSS
```bash
sass --watch views/assets/sass/app.scss web/css/site.css
```

Compile Vue
```bash
npm run watch
```


