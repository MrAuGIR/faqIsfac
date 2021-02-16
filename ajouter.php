<?php
    require 'Configuration/bdd.php';
    require 'class/ManagerQuestion.php';
    $tab=[];
    if (isset($_GET['submit']) && $_GET['submit'] == "envoyer") {

        $tab['question']= $_GET['question'];
        $tab['reponse']= $_GET['reponse'];
        $tab['date']= $_GET['date'];

        $faq = new ManagerQuestion($pdo);
        $faq->addQuestion($tab);
    }

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
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" name="question">Titre de la question</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Je suis un titre">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label" name="reponse">Réponse</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-2">
                        <input type="date" class="form-control" name="date">
                        <input type="submit" class="btn btn-outline-success" name="submit" value="envoyer">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
