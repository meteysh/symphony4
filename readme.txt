====Symphony====
php bin/console server:run
выполните server:start и продолжайте работать с консолью дальше.
.env настройки подключения к базе
php bin/console doctrine:database:create  создать базу
php bin/console make:controller PostsController
php bin/console make:entity Post  создать сущность
php bin/console make:migration выполнить миграцию
php bin/console doctrine:migrations:migrate применить миграцию
php bin/console doctrine:fixtures:load запустить наши фикстуры
php bin/console cache:clear чистка кэша

composer require --dev doctrine/doctrine-fixtures-bundle скачать DoctrineFixturesBundle
composer require fzaninotto/faker скачаем популярную библиотеку Faker
composer require cocur/slugify библиотека cocur/slugify, делающая slug как из английских слов, так и из русских


return $this->render('posts/index.html.twig', [
     'posts' => $posts,
 ]);
!!!!!!именно 'posts', а не $posts, шаблонизатор Twig будете видеть в качестве переменной. !!!!!!!

{% %} делаем
{{ }} выводим

{% for post in posts %}
 {{ post.title }}
{% endfor %}

<p>{{ post.title }} </p>   можно так делать

====End Symphony====