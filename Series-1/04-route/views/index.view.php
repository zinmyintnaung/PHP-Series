<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <!-- in real case, you will just need 'contact', 'about' only, instead of giving long path -->
        <li><a href='/PHP-Series/Series-1/04-route/index.php/contact'>Contact</a></li>
        <li><a href='/PHP-Series/Series-1/04-route/index.php/about'>About</a></li>
    </ul>
    <ul>
        <?php foreach($tasks as $task): ?>
            <li>
                <?php if($task->completed): ?>
                    <strike><?= $task->description; ?></strike>
                <?php else: ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>