<?php

//print_r($_FILES);


//$h = 5;
//echo $h."<br>";
//echo gettype($h) . "<br>";
//$var1 = (string)$h;
////var_dump($var1);
//echo $var1 . "<br>";
//echo gettype($var1) . "<br>";
//$var2 = (integer)$var1;
//echo $var2 . "<br>";
//echo gettype($var2) . "<br>";

$file=null;
if (isset($_FILES['data'])) {
    $to = 'C:/xampp/htdocs/while_ciklo_uzdaviniai/uploads/' . $_FILES['data']['name'];
    move_uploaded_file($_FILES['data']['tmp_name'], $to);

    $file = fopen($to, 'r');
$minimum=100;
$maximum=-100;
$counter=0;
$sum=0;
    while ($eilute=fgets($file)) {
        $temp=(integer)$eilute;
        $counter++;
        $sum+=$temp;
        if($temp<=$minimum){
            $minimum=$temp;
        }
        if($temp>=$maximum){
            $maximum=$temp;
        }
    }
    $average=$sum/$counter;
//    echo $sum."<br>";
//    echo $counter."<br>";
//    echo $average."<br>";

//    $eilute=fgets($file);
//    echo $eilute."<br>";
//    $eilute=fgets($file);
//    echo $eilute."<br>";
//    $eilute=fgets($file);
//    echo $eilute."<br>";
//    $eilute=fgets($file);
//    echo $eilute."<br>";
    fclose($file);
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

    <form method="post" enctype="multipart/form-data">
        <div class="row d-flex justify-content-center my-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Sužinokite minimalią, maksimalią ir vidutinę temperatūras
                    </div>
                    <div class="card-body">
                        <label class="mt-2">Įkelkite failą</label><br>
                        <input class="mt-2" type="file" name="data"><br>
                        <div class="text-center">
                            <button class="btn btn-success mt-4" type="submit" name="issiusti" value="1">Sužinokite
                                temperatūras
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 mx-auto">
                        <?php if (isset($counter) && $counter != 0) { ?>
                            Pagal Jūsų pateiktus duomenis faile "<?= $_FILES['data']['name'] ?>" temperatūros yra:<br>
                            Minimali temperatūra yra <?= $minimum ?> <sup> o</sup>C<br>
                            Maksimali temperatūra yra <?= $maximum ?> <sup> o</sup>C<br>
                            Vidutinė temperatūra yra <?= round($average,2) ?> <sup> o</sup>C<br>
                        <?php } ?>
                        <?php if (isset($temp) && $temp==0) { ?>
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




