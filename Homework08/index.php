<!DOCTYPE html>
<html lang="sr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework08</title>
</head>

<body>

    <!-- EN - Create an array of your favorites movies, including their respective release dates. Then, write a function that filters your list of movies down to only those that were released in the year 2000 or higher. Display the results in an unordered list. -->

    <h1>VRHUNSKI FILMOVI</h1>

    <?php $filmovi = [
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

 function filtrirajPoGodini($filmovi) {
    $filtriraniFilmovi = [];

    foreach ($filmovi as $film) {
        if ($film['godinaIzlaska'] >= 2000) {
            $filtriraniFilmovi[] = $film;
        }
    }


    return $filtriraniFilmovi;
 }

?>

    <ul>
        <?php foreach (filtrirajPoGodini($filmovi) as $film) : ?>
        <li>
            <a href="#">
                <?= $film['ime'];?> (<?= $film['godinaIzlaska']; ?>) - Rezirao <?= $film['reziser'] ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>

 

</body>

</html>