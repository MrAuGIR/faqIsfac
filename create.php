<?php
require 'header.php';
$title = "Formulaire ajout";
if(isset($_GET['submit']) && $_GET['submit'] === 'enregistrer'){

    $text = $_GET['reponse'];

    var_dump($text);


}


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
            <div class="col-12">
                <form method="get" action="">
                    <div class="mb-3">
                        <label for="question">Question</label>
                        <input type="text" class="form-control" name="question" id="question" placeholder="la question">
                    </div>
                    <div class="mb-3">
                        <label for="question">la reponse</label>
                        <textarea class="form-control" name="reponse" id="reponse" placeholder="la reponse à donner"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" name="submit" id="submit" value="enregistrer">
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