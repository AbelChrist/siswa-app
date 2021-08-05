# siswa-app

## Getting Started
To get a local copy up and running, follow these simple steps.

### Prerequisites
- Install PHP & MySQL or [XAMPP](https://www.apachefriends.org/download.html) (include PHP & MySQL)
- Install [Composer](https://getcomposer.org/download/)
- Install [Node.js](https://nodejs.org/en/)

### Installation

1. Clone the repo
```bash
git clone https://github.com/abelchrist/siswa-app.git
cd siswa-app
```

2. Installing app dependencies
```bash
composer install
npm install && npm run dev
```
3. Copy .env file
```bash
cp .env.example .env
# windows 
# copy .env.example .env
```

4. Database configuration
Create database (siswa_app). Then in ```.env``` file:
```text
DB_PORT=3306
DB_DATABASE=siswa_app
DB_USERNAME=root
DB_PASSWORD=
```
5. App Configuration
```bash
php artisan key:generate
php artisan migrate
```

6. Start App
Make sure mysql server already started
```bash
php artisan serve
```
Then open [http://127.0.0.1:8000](http://127.0.0.1:8000).