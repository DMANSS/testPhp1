<?php
session_start();
if($_SESSION["login"]="YES")
{
    header("location:form.php");
}?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First_Page</title>
</head>
<body>

<form method="post" action="login.php">
    <p>Документ защищен</p>
</form>
</body>
</html>