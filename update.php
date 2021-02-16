<?php

require 'Configuration/bdd.php';
require 'class/ManagerQuestion.php';
$title = "Modifier un article";
$error = false;
// recuperation de l'id passé en parametre
if (isset($_GET['id'])) {
    if (empty($_GET['id'])) {
        header('location: ../gestion_admin.php?etat=fail');
    }
    $id = $_GET['id'];
    $manager = new ManagerQuestion($pdo);
    $question = $manager->find($id);
}

//soumission du formulaire de modification
if (isset($_GET['submit']) && $_GET['submit'] === 'Modifier') {

    if (empty($_GET['question']) || empty($_GET['reponse']) || empty($_GET['id'])) {
        $error = true;
    }

    $data['id'] = $_GET['id'];
    $data['question'] = $_GET['question'];
    $data['reponse'] = $_GET['reponse'];
    $data['importance'] = $_GET['importance'];
    $data['date'] = date('Y-m-d');

    $manager = new ManagerQuestion($pdo);
    $question = new Question($data);
    $manager->updateQuestion($question);
    header('location: gestion_admin.php?update=success');
    exit();
}


require 'header.php';
?>
<main>
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <a href="gestion_admin.php">Retour page gestion</a>
            </div>
            <?php if ($error) : ?>
                <div class="col-12">
                    <p> erreur de saisie, des champs sont manquants </p>
                </div>
            <?php endif; ?>
            <div class="col-12">
                <form method="get" action="">
                    <div class="mb-3">
                        <label for="question">Question</label>
                        <input type="text" class="form-control" name="question" id="question" value="<?= $question->getQuestion() ?>">
                        <input type="number" class="form-control" name="id" id="id" value="<?= $question->getId() ?>" hidden>
                    </div>
                    <div class="mb-3">
                        <label for="question">la reponse</label>
                        <textarea class="form-control" name="reponse" id="reponse" value="<?= $question->getReponse() ?>"><?= $question->getReponse() ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="question">Importance</label>
                        <input type="number" class="form-control" name="importance" id="importance" value="<?= $question->getImportance() ?>">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Modifier">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<footer>

</footer>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>