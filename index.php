<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/mario.png" />
        <link rel="stylesheet" type="text/css" href="mario.css" media="screen" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
        <title>Mario - Signa</title>
    </head>
     <body>
            <h1>Ajude o Mario com um número inteiro:</h1>

            <form action="/" method="get">
                <input type="text" id="row" name="row">
                <button>Enviar</button>
            </form>
            <?php

                $row = $_GET['row'];
                $width = $row + 2;

                if (!ctype_digit($row)) {
                    echo '<div class="error">Não é um número inteiro, tente novamente!</div>';
                    echo '<div class="mario-die"><img src="img/mariodie.png" /></div>';
                } else {
                    echo '<div class="mario-jumping"><img src="img/mario-jumping.png" /></div>';
                    echo '<div class="piramide">';
                    echo '<div class="left">';

                        for($i = 0; $i < $row; $i++) {
                            $hashes = $i + 1;
                            echo '<div class="row">';
                                echo str_repeat('<div class="block-empty"></div>', $width - $hashes);
                                echo str_repeat('<div class="block"></div>', $hashes);
                            echo '</div>';
                        }
                    echo '</div>';
                    echo '<div class="right">';
                        for($i = 0; $i < $row; $i++) {
                            $hashes = $i + 1;
                            echo '<div class="row">';
                                echo str_repeat('<div class="block"></div>', $hashes);
                                echo str_repeat('<div class="block-empty"></div>', $width - $hashes);
                            echo '</div>';
                        }
                    echo '</div>';
                    echo '</div>';
                }

            ?>
    </body>
</html>

