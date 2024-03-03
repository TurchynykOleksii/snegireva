<img width="200" height="200" src="https://upload.wikimedia.org/wikipedia/commons/7/72/Gulp.js_Logo.svg">

## Gulp стартовая сборка для Wordpress

### Что есть в сборке:

- компилятор для препроцессора scss/sass;
- минификация готового css;
- автопрефиксер;
- импорт одних файлов в другие, который позволяет собирать html из модулей;
- конвертация шрифтов из ttf в woff и woff2;
- автоматическое формирование и подключение @font-face;
- для живого обновления страниц - browsersync;
- сжатие изображений;
- создание svg-спрайтов и конвертация svg в background-image;
- конвертация растровых изображений в webp;
- базовая настройка для Wordpress
- Структура php файлов с примерами
- выгрузка на FTP сервер
- собрать ZIP архив

### Настройка:

```bash
# Установить зависимости:
npm i

# Запустить сборщик (http://localhost:3000/)
npm run dev или gulp

# Собрать проект
npm run build

# Конвертировать otf, ttf в woff, woff2
npm run fonts

```

## Структура:

**Development**

- `dev/index.html` - Главный HTML файл
- `dev/html/` - HTML компоненты
- `dev/styles/` - CSS/SCSS библиотеки, компоненты, переменные, миксины, шрифты, стили модулей, стили страниц
- `dev/img` - Изображения
- `dev/js` - Библиотеки и скрипты
- `dev/fonts` - Шрифты

**Production**

- `build/index.html` - Главный HTML файл
- `build/css` - CSS стили
- `build/img` - Изображения
- `build/js` - Скрипты
- `build/fonts` - Шрифты

**Wordpress**

- `functions.php` - Подключение файлов functions-parts/, настройка темы, дополнительные функции, изменение параметров
- `functions-parts/ajax/` - Файлы с ajax подключаемые в \_ajax.php
- `functions-parts/_ajax.php` - Основной файл с ajax запросами
- `functions-parts/_assets.php` - Подключение стилей и скриптов
- `functions-parts/_breadcrumbs.php` - Хлебные крошки
- `functions-parts/_hooks.php` - Хуки
- `functions-parts/_post-types-registration.php` - Регистрация пост тайпов
- `functions-parts/_taxonomies-registration.php` - Регистрация таксономий
