<?php

require_once './../vendor/autoload.php';


$faker = Faker\Factory ::create();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>
        <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>Email</th>
        </tr>
        <?php for ($i = 1; $i < 99; $i++) {?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $faker->name?></td>
                <td><?= $faker->email?></td>
            </tr>
            <?php }?>
    </table>

</body>
</html>