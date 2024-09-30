# Promebel

Пример верстки одностраничного каталога мебели с фильтром по цвету и\или бренду.

<img width="686" alt="image" src="https://github.com/user-attachments/assets/dc3da269-2246-43b0-b9bf-c03d77f56599">


# Установка

1. `composer install`
2. Создать `.env` файл на основе .env.example и указать доступы к базе данных (я использовал sqlite)
3. `php artisan migrate`
4. `php artisan BD` - чтобы заполнить информацией БД.
5. `php artisan serve`.
6. перейти по роуту `/catalog`.
