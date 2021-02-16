<?php

require 'Configuration/bdd.php';
require 'class/ManagerQuestion.php';

if(isset($_GET['id']) && !empty($_GET['id'])){

    $id = $_GET['id'];
    $manager = new ManagerQuestion($pdo);
    $question = $manager->find($id);
    $manager->deleteQuestion($question);
    header('location: gestion_admin.php?delete=success');
    exit();

}

header('location: gestion_admin.php?delete=fail');
exit();

?>