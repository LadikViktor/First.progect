<?php
include 'autoload.php';

$student = new Student("Петр", "Иванов");
echo $student->introduce();
echo $student->Learn();
echo "<br>";
echo "<br>";

$teacher = new Teacher("Владимир", "Яковлев");
echo $teacher->introduce();
echo "<br>";
echo $teacher->teach();
echo "<br>";
echo "<br>";

$engineer = new Engineer("Андрей", "Мухич");
echo $engineer->work();
echo "<br>";
echo $engineer->introduce();
