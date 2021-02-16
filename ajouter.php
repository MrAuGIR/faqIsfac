<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/favicon.ico" rel="icon" type="image/png" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link href="styles/styles.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <header>
        <?php
            require_once 'header.php';
        ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col col-12">
                    <form action="" method="post">
                        <input type="text" name="question">
                        <input type="text" name="reponse">
                        <input type="date" name="date">
                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
