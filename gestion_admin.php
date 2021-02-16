<?php
    require 'Configuration/bdd.php';
    require 'class/ManagerQuestion.php';
    $faq = new ManagerQuestion($pdo);
    $select = $faq->getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="styles/style.css"/>
    <link rel="stylesheet" href="styles/pages_gestion.css"/>
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
                <div class="col col-2">
                    <a href="ajouter.php" title="ajouter">Ajouter</a>
                </div>
                <div class="col col-10">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <td>Question</td>
                                <td>Modifier</td>
                                <td>Supprimer</td>    
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach($select as $question):?>
                                    <tr>
                                        <td>
                                            <?= $question->getQuestion(); ?>
                                        </td>
                                        <td>
                                        <a href="update.php?&id=<?php echo $question->getId(); ?>" title="modifier">modifier</a>
                                    </td>
                                    <td>
                                        <a href="delete.php?&id=$id" title="supprimer">supprimer </a>
                                    </td>
                                    </tr>

                                <?php endforeach; ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


