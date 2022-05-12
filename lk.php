<?php
session_start();

echo "<h2>$_SESSION[first_name], Вы успешно зарегистрировались!</h2>";
echo "<p>Добро подаловать в лк!</p>";
echo "<p><a href='index.php'>На главную страницу</a></p>";
echo "<p><a href='exit.php'>Выйти</a></p>";
?>