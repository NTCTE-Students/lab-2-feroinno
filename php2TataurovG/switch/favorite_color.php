<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат выбора цвета</title>
</head>
<body>
    <?php
    $color = (string) $_POST['color'];
    switch ($color) {
        case 'red':
            print('Вы выбрали красный цвет. Красный цвет символизирует энергию и страсть!');
            break;
        case 'blue':
            print('Вы выбрали синий цвет. Синий цвет символизирует спокойствие и доверие!');
            break;
        case 'green':
            print('Вы выбрали зеленый цвет. Зеленый цвет символизирует природу и гармонию!');
            break;
        case 'yellow':
            print('Вы выбрали желтый цвет. Желтый цвет символизирует радость и оптимизм!');
            break;
        case 'purple':
            print('Вы выбрали фиолетовый цвет. Фиолетовый цвет символизирует творчество и мудрость!');
            break;
        default:
            print('Вы не выбрали цвет. Пожалуйста, вернитесь и выберите цвет.');
            break;
    }
?>
</body>
</html>