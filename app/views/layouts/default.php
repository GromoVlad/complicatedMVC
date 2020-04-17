<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
    <?php foreach ($this->getMeta() as $val): ?>
        <title><?= $val['title'] ?></title>
        <meta name="description" content="<?= $val['desc'] ?>">
        <meta name="keywords" content="<?= $val['keywords'] ?>">
    <?php endforeach; ?>
</head>

<body>
<h1>Шаблон DEFAULT</h1>
<?= $content; ?>


<?php debug($debugging); ?>
</body>
</html>
