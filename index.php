// Задача 4<?php
// Задача 4
$num1 = 10;
$num2 = 20;

if ($num1 > $num2) {
    echo "Наибольшее число: " . $num1;
} else {
    echo "Наибольшее число: " . $num2;
}
?>
// Задача 5<?php
// Задача 5
$num1 = 150;
$num2 = 50;
if (abs($num1 - $num2) == 100) {
    echo "ДА";
} else {
    echo "нет";
}
?>
// Задача 6<?php
// Задача 6
$num1 = 30;
$num2 = 55;
if (abs($num1 - $num2) <= 20) {
    echo "Да";
} else {
    echo "нет";
}
?> 
// Задача 7<?php
// Задача 7
$month = 7;
if ($month >= 1 && $month <= 12) {
    switch ($month) {
        case 1:
        case 2:
        case 12:
            echo "Зима";
            break;
        case 3:
        case 4:
        case 5:
            echo "Весна";
            break;
        case 6:
        case 7:
        case 8:
            echo "Лето";
            break;
        case 9:
        case 10:
        case 11:
            echo "Осень";
            break;
    }
} else {
    echo "Ошибка";
}
?>
<?php
$isAdmin = true; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        .admin-container {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
        }
        .admin-container h2 {
            color: #333;
        }
        .admin-container button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .no-access {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php if ($isAdmin) { ?>
        <div class="admin-container">
            <h2>Welcome, Admin!</h2>
            <button>Enter Control Panel</button>
        </div>
    <?php } else { ?>
        <span class="no-access">You don't have access rights.</span>
    <?php } ?>
</body>
</html>

<?php
$lang = 'ru'; // or 'en' or 'de'
?>

<?php
switch ($lang) {
    case 'ru':
        $phrase = 'Это фраза на русском языке.';
        break;
    case 'en':
        $phrase = 'This is a phrase in English.';
        break;
    case 'de':
        $phrase = 'Das ist ein Satz auf Deutsch.';
        break;
    default:
        $phrase = 'Язык не найден.';
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multilingual Site</title>
</head>
<body>
    <p><?php echo $phrase; ?></p>
</body>
</html>