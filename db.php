<?php
// Скачать модуль с сайта RedBeanPHP.com

// Подключить в проект модуль RedBean
require "libs/rb-mysql.php";

// Подключение к БД
// If you want to start using RedBeanPHP for real, you can connect to a MySQL database like this:
//    R::setup( 'mysql:host=localhost;dbname=mydatabase', 'myusername', 'mypassword' );
R::setup( 'mysql:host=localhost;dbname=school', 'root', '' );

// Нужно замораживать БД перед отправкой на продакшн! В случас с установленной заморозкой не получится установить новые поля в БД.
R::freeze( TRUE );

?>