# Task

## Установка при помощи docker-compose

1. Обновление и установка зависимостей приложения

```
docker-compose run --rm backend composer update
```

```
docker-compose run --rm backend composer install
```

2. Инициализация приложения `--env=Development`

```
docker-compose run --rm backend php /app/init --env=Development
```

3. Редактирование конфигурации `common/config/main-local.php`

```
'dsn' => 'mysql:host=mysql;dbname=yii2advanced',
'username' => 'yii2advanced',
'password' => 'secret',
```

4. Запуск приложения

```
docker-compose up -d
```

5. Запуск миграции

```
docker-compose run --rm backend yii migrate
```

## Changelog

1. Настройка ЧПУ.

2. Созданы миграция для задания.

```
docker-compose run --rm backend yii migrate/create news_init
```
