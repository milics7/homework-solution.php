<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
</head>
<body>

<!-- EN - Extend the book list from this episode's example to 
also include and display the release year immediately after the book's title. -->

<!-- SR - Проширите листу књига из примера ове епизоде ​​да 
бисте такође укључили и приказали годину издања одмах након наслова књиге -->

<h1>ВРХУНСКЕ КЊИГЕ</h1>

<?php $knjige = [
    [
        'ime'=>'Витези Кнеза Лазара',
        'godinaIzlaska'=>1994,
        'autor'=>'Сергеј Милић',
        'urlProdavnice'=>'http://primer0.com'
    ],
    [
        'ime'=>'ДИНА',
        'godinaIzlaska'=>1987,
        'autor'=>'Френк Херберт',
        'urlProdavnice'=>'http://primer1.com'
    ],
    [
        'ime'=>'Педесет Нијанси Сива',
        'godinaIzlaska'=>2013,
        'autor'=>'Е. Л. Џејмс',
        'urlProdavnice'=>'http://primer2.com'
    ]
 ];

?>

<ul>
    <?php foreach ($knjige as $knjiga) : ?>
        <li>
            <a href="<?= $knjiga['urlProdavnice'] ?>">
                <?= $knjiga['ime'];?>
                <?= $knjiga['godinaIzlaska'];?>
            </a>
        </li>    
    <?php endforeach; ?>

</ul>


</body>
</html>