<?php
require 'Configuration/bdd.php';
require 'class/ManagerQuestion.php';
?>
<div class="container">
    <div class="row">
        <div class="col col-sm-3  col-md-2 col-lg-2">
            <button class="btn btn-outline-success" style="width:100%;" href="#" type="submit">Telecharger</button>
        </div>
        <div class="col col-sm-9  col-md-10 col-lg-10">
            <div class="accordion" id="accordionExample">
                <?php $manager = new ManagerQuestion($pdo); ?>
                <?php $questions = $manager->getAll(); ?>
                <?php foreach ($questions as $question) : ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <?= $question->getId() ?>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?= $question->getReponse() ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


    <div class="row">
        <?php $manager = new ManagerQuestion($pdo); ?>
        <?php $question = $manager->find(2); ?>
        <div class="container">
            <div class="col-12">
                <ul>
                    <li><?= $question->getId(); ?></li>
                </ul>
            </div>
        </div>
    </div>