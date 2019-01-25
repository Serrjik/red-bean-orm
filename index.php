<?php

require "db.php";

// ----------------------
// Создание новой записи в БД
// ----------------------

// Создадим новый Bean
// $course = R::dispense( 'courses' );

// Задаём значения для этого Bean'а
// $course->title = 'Курс по верстке';

// Данные пользователя всё-равно необходимо обрабатывать для предотвращения межсайтового скриптинга через функцию htmlentities()
// $course->title = htmlentities($course->title, ENT_QUOTES); // Курс по &lt;верстке&gt; 2

// Можно создать новый Bean и указать для него значения. RedBean видит новые поля и автоматически создаёт их в БД. При этом догадывается какой тип у поля должен быть.
// $course->tuts = 6;
// $course->homeworks = 25;
// $course->level = "Для новичков";
// $course->price = 80;

// Сохранить Bean в базу данных
// R::store( $course );

// ----------------------
// Вывод записей из БД
// ----------------------

// Получение всех записей
// R::find() находит информацию и использует её для вывода
// $courses = R::find('courses');
/*echo "<pre>";
print_r($courses);
echo "</pre>";*/
/*foreach ($courses as $course) {
	echo "ID: ". $course->id . "<br>";
	echo "Название: ". $course->title . "<br>";
	echo "Кол-во уроков: ". $course->tuts . "<br>";
	echo "Уровень: ". $course->level . "<br><hr>";
}*/

// ----------------------
// Обновление записи в БД
// ----------------------

// Получение одного курса
// R::load() находит информацию. При этом её можно изменять
// Найдем курс с ID = 9
$course = R::load('courses', 9);
// echo "<pre>";
// print_r($course);
// echo "</pre>";
echo "ID: ". $course->id . "<br>";
echo "Название: ". $course->title . "<br>";
echo "Кол-во уроков: ". $course->tuts . "<br>";
echo "Уровень: ". $course->level . "<br>";
echo "Цена: ". $course->price . "<br><hr>";

// Изменяем значения полей
$course->title = "React - ступень 1-я";
$course->tuts = 20;
$course->price = 80;

// Сохраняем изменения
// Передаём в функцию R::store() тот Bean, который записываем
R::store( $course );

?>