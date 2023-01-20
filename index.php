<?php

$a = 0;
$x = 0;

if (isset($_POST['a'], $_POST['x'])) {
    $a = (int)$_POST['a'];
    $x = (int)$_POST['x'];

    $suma = $a;
    $count = 1;
    while ($suma < $a * 2) {
        $suma += $x;
        $count++;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>While ciklo uždaviniai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container-md">

    <?php include "nav.php"; ?>

    <form method="post">
        <div class="row d-flex justify-content-center my-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Suskaičiuokite po kiek mėnesių atlyginimas bus daugiau nei dvigubai didesnis
                    </div>
                    <div class="card-body">
                        <label class="mt-2">Įveskite pradinį atlyginimą, eur</label><br>
                        <input class="mt-2 col-12" type="text" name="a" placeholder="Pradinis atlyginimas"><br>
                        <label class="mt-3">Įveskite mėnesinį padidinimą, eur</label><br>
                        <input class="mt-2 col-12" type="text" name="x" placeholder="Mėnesinis padidinimas"><br>
                        <div class="text-center">
                            <button class="btn btn-success mt-4" type="submit">Skaičiuoti</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 mx-auto">
            <?php if ($a != 0) { ?>
                Pradinis atlyginimas: <?= $a ?> eur<br>
                Mėnesinis padidinimas: <?= $x ?> eur<br>
                Atlyginimas bus daugiau nei dvigubai didesnis po <?= $count ?> mėnesių<br>
                Atlyginimo dydis bus: <?= $suma ?> eur<br>
            <?php } ?>
            <?php if (isset($count) && $a==0) { ?>
                Suveskite duomenis
            <?php } ?>

        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>


