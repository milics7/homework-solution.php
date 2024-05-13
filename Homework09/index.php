<!DOCTYPE html>
<html lang="sr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework09</title>
</head>

<body>

    <!-- EN - Update your book filtering logic from this episode to only display movies (originally books) that were first published between the years 1950 and 2020. Hint - the PHP equivalent of "and" is &&. -->

    <h1>VRHUNSKI FILMOVI</h1>

    <?php $stavke = [
    [
        'ime'=>'Leteci Holandjanin',
        'godinaIzlaska'=>1994,
        'reziser'=>'Arcibald Rafa',
    ],
    [
        'ime'=>'Dina',
        'godinaIzlaska'=>2006,
        'reziser'=>'Vladeta Branic',
    ],
    [
        'ime'=>'Pedeset Nijansi Siva',
        'godinaIzlaska'=>2013,
        'reziser'=>'Katarina Ljubicic',
    ]
 ]; 

//  function filter($stavke, $fn) {
//     $filtriraneStavke = [];

//     foreach ($stavke as $stavka) {
//         if ($fn($stavka)) {
//             $filtriraneStavke[] = $stavka;
//         }
//     }


//     return $filtriraneStavke;
//  }

 $filtriraneStavke = array_filter($stavke, function ($filmovi) {
    return $filmovi['godinaIzlaska'] >= 1950 && $filmovi['godinaIzlaska'] <= 2020;
 });


?>

    <ul>
        <?php foreach ($filtriraneStavke as $film) : ?>
        <li>
            <a href="#">
                <?= $film['ime'];?> (<?= $film['godinaIzlaska']; ?>) - Rezirao <?= $film['reziser'] ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>

 

</body>

</html>