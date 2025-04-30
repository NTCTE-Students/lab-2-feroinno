<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат проверки возраста</title>
</head>
<body>
    <?php
            $age = (int)  $_POST['age'];
            
            if  ($age < 18) {
                print ('Вы еще молоды, наслаждайтесь детством');
            } elseif ($age >= 18 && $age < 65) {
                print("Вы находитесь в трудоспособном возрасте, не забудьте отдыхать!");
            } else {
                print('Вы достигли пенсионного возраста, пора наслаждаться заслуженным отдыхом!');
            }
        ?>
</body>
</html>