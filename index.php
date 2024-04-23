<!DOCTYPE html>
<html lang="srb">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
</head>
<body>

<!-- EN - Create an array of any three usernames - perhaps for a "Top Performing Users" section of your website.
Then, create a loop that displays each username within a list item. -->

<!-- SRB - Napravi niz od tri korisnicka imena - recimo za "Korisnici Top Performansi" sekcije tvog sajta.
Zatim, kreiraj petlju koja prikazuje svako ime ponaosob unutar poslednje stavke-->

<h1>Корисници Топ Перформанси</h1>

<?php $korisnickaImena = [
    "Владан",
    "Сергеј",
    "Лазар"
];?>

<ol>
    <?php foreach ($korisnickaImena as $korisnickoIme) : ?>
        <li><?=$korisnickoIme; ?></li>
    <?php endforeach; ?>
    </ol>

</body>
</html>