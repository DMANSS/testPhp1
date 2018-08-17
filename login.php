<?php
if($_POST["username"]=="admin" && $_POST["password"]=="root")
{
    session_start();
    $_SESSION["login"]="YES";
    echo "<h1>Welcome admin!</h1>";
    echo "<p><a href='document.php'>Структура данных с иерархией объектов</a></p>";
} else
{
    session_start();
    $_SESSION["login"]="NO";
    echo "<h1>Welcome guest!</h1>";
    echo "<p><a href='document.php'>Структура данных</a></p>";
}