<?php
require 'Configuration/bdd.php';
require 'class/ManagerQuestion.php';
$title = "Accueil";
?>
    <?php require_once 'header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="fixed col col-sm-3  col-md-2 col-lg-2">
                <a class="btn btn-outline-primary" style="width:100%; color:#1E90FF; border-color:#1E90FF;" href="/pdf/faq-coronavirus-2020-71379.pdf" type="submit">Telecharger</button>
            </div>
            <div class="col col-sm-9  col-md-10 col-lg-10">
                <div class="accordion" id="accordionExample">
                    <?php $manager = new ManagerQuestion($pdo); ?>
                    <?php $questions = $manager->getAll(); ?>
                    <?php foreach ($questions as $question) : ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?= $question->getId(); ?>">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $question->getId(); ?>" aria-expanded="true" aria-controls="collapse<?= $question->getId(); ?>">
                                    <?= $question->getQuestion() ?>
                                </button>
                            </h2>
                            <div id="collapse<?= $question->getId() ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $question->getId(); ?>" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?= $question->getReponse() ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div>
        <a href="#"><img src="img/backDebutPage.png" style="width:50px;" alt="..."></a>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>