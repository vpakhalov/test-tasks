# LeadMedia CMS

Пример верстки одностраничного каталога мебели с фильтром по цвету и\или бренду.

# Установка

1. `composer install`
2. Создать `.env` файл на основе .env.example и указать доступы к базе данных (я использовал sqlite)
3. `php artisan migrate`
4. `php artisan BD` - чтобы заполнить информацией БД.
5. `php artisan serve`.
