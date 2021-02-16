<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="styles/style_gestion.css"/> 
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
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
                        <?php foreach($faq as $question):?>
                            <td>
                                <?= $question->getQuestion(); ?>
                            </td> 
                            <td>
                                <a href="modifier.php?&id=$question->getId()" title="modifier"><i class="bi bi-pencil-square"></i></a>
                            </td>
                            <td>
                                <a href="supprimer.php?&id=$id" title="supprimer"><i class="bi bi-x-square"></i></a>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


