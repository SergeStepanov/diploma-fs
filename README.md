# Дипломный проект по профессии «Веб-разработчик»

Использованы:

* PHP ver. 
* Laravel ver.
* Composer 
* JS 
* MySQL

### Запуск:

* Склонировать репозиторий
* Скопировть в корень проекта файл "env.example" и переименовать его в ".env"

В терминале вводим:

``` 
composer install 
```

Создание миграции:

```
php artisan migrate
```

Наполнение базы данных информацией (данные администратора, предустановленные фильмы):

```
php artisan db:seed
```

Установка пакетов package.json:

```
npm install
```

Запуск сервера:

```
npm run dev
php artisan serve
```
### Доступ администратора:

* В строке url добавить "/admin"
* **login:** admin@test.com,
* **password:** admin123