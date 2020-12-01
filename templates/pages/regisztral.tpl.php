<!DOCTYPE html>
<html>
    <head>
        <title>Regisztráció</title>
        <meta charset="utf-8">
    </head>
    <body>


<?php // Regisztrációs üzi    ?>

        <?php if(isset($uzenet)) { ?>
            <h1><?= $uzenet ?></h1>


<?php // Hibás reg. üzi    ?>

            <?php if($ujra) { ?>
                <a href="pelda.html">Próbálja újra!</a>
            <?php } ?>
        <?php } ?>
    </body>  
</html>