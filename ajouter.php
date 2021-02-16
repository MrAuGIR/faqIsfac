<?php
require 'Configuration/bdd.php';
require 'class/ManagerQuestion.php';
$title = "Ajouter un article";
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


        require_once 'header.php';
        ?>
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