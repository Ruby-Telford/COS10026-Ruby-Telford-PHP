<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Days of the Week</title>
</head>

<body>
    <h1>Days of the Week</h1>

    <h2>The days of the week in English</h2>

<?php
    $englishdays = array (
        "Monday", 
        "Tuesday", 
        "Wednesday", 
        "Thursday", 
        "Friday", 
        "Saturday", 
        "Sunday");

    echo "$englishdays[0], ";
    echo "$englishdays[1], ";
    echo "$englishdays[2], ";
    echo "$englishdays[3], ";
    echo "$englishdays[4], ";
    echo "$englishdays[5], ";
    echo "$englishdays[6], ";
?>

<h2>The days of the week in French</h2>

<?php
        $frenchdays = array (
        "Dimanche", 
        "Lundi", 
        "Mardi", 
        "Mercredi", 
        "Jeudi", 
        "Vendredi", 
        "Samedi");

    echo "$frenchdays[0], ";
    echo "$frenchdays[1], ";
    echo "$frenchdays[2], ";
    echo "$frenchdays[3], ";
    echo "$frenchdays[4], ";
    echo "$frenchdays[5], ";
    echo "$frenchdays[6], ";
?>

</body>
</html>