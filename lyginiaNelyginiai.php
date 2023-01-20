<?php

//$a = 0;

//echo $a % 10;


if (isset($_POST['a'])) {
    $a = (int)$_POST['a'];
//    $a = $_POST['a'];

    $pradinis=$a;
    $lygin = 0;
    $nelygin = 0;
    $sk = $a;
    while ($a > 0) {
        $sk %= 10;
        $a = floor(($a / 10));


        if ($sk % 2 == 0) {
            $lygin++;
        } else {
            $nelygin++;
        }
        $sk = $a;

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
                        Sužinokite kiek duotas skaičius a turi lyginių ir nelyginių skaitmenų
                    </div>
                    <div class="card-body">
                        <label class="mt-2">Įveskite skaičių</label><br>
                        <input class="mt-2 col-12" type="text" name="a" placeholder="0123456789"><br>
                        <div class="text-center">
                            <button class="btn btn-success mt-4" type="submit">Skaičiuoti</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 mx-auto">
                        <?php if (isset($pradinis) && $pradinis != 0) { ?>
                            Jūsų pateiktą skaičių "<?= $pradinis ?>" sudaro:<br>
                            Lyginiai skaičiai <?= $lygin ?> vnt<br>
                            Nelyginiai skaičiai <?= $nelygin ?> vnt<br>
                        <?php } ?>
                        <?php if (isset($pradinis) && $pradinis==0) { ?>
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



