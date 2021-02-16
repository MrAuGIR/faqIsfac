<?php
require 'Configuration/bdd.php';
require 'class/ManagerQuestion.php';
$tab = [];
if (isset($_GET['submit']) && $_GET['submit'] == "Ajouter") {

    $tab['question'] = $_GET['question'];
    $tab['reponse'] = $_GET['reponse'];
    $tab['date'] = $_GET['date'];
    $tab['importance'] = $_GET['importance'];

    print_r($tab);
    $faq = new ManagerQuestion($pdo);
    $faq->addQuestion($tab);
    header('location: gestion_admin.php?add=success');
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
        <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">
            bkLib.onDomLoaded(nicEditors.allTextAreas);
        </script>
        <div class="container">
            <div class="row">
                <form method="get" action="">
                    <div class="mb-3">
                        <label for="question">Question</label>
                        <input type="text" class="form-control" name="question" id="question" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="question">la reponse</label>
                        <textarea class="form-control" name="reponse" id="reponse" placeholder=""></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="question">Importance</label>
                        <input type="number" class="form-control" name="importance" id="importance" placeholder="importance">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Ajouter">
                    </div>
                </form>
            </div>
    </main>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>