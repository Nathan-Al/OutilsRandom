<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div id="romanLetter" class="romanLetter">
            <div class="lettercarte">
                <h1>PHP</h1>
                <p>Decoder votre chiffre arabe en romain grâce a php</p>
                <div class="">
                    <form action="outils.php" method="post">
                    <input type="text" name="textephpletterrm" name="decodephp">
                    <input type="submit" name="phpletterrm" value="decode">
                    </form>

                </div>
                <h1>Résultat</h1>
                <p><?php if(isset($php_letter_result_rm))echo $php_letter_result_rm; ?></p>
                <p>Decoder votre chiffre romain en arabe grâce a php</p>
                <div class="">
                    <form action="outils.php" method="post">
                    <input type="text" name="textephpletterar" name="decodephp">
                    <input type="submit" name="phpletterar" value="decode">
                    </form>

                </div>
                <h1>Résultat</h1>
                <p><?php if(isset($php_letter_result_ar))echo $php_letter_result_ar; ?></p>
            </div>
            <div class="lettercarte">
                <div class="">
                    <h1>PYTHON</h1>
                </div>
                <div class="col-12 col-lg-4">

                </div>
            </div>
            <div class="lettercarte">
                <div class="">
                    <h1>JAVASCRIPT</h1>
                </div>
                <div class="col-12 col-lg-4">

                </div>
            </div>
        </div>
    </div>
</body>

</html>