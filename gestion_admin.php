<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    <main>
        <table>
            <tr>
                <td>Question:</td>
                <td>Modifier:</td>
                <td>Supprimer:</td>        
            </tr>
            <?php foreach($faq as $question):?>
                <tr>
                    <td>
                        <?= $question['question'] ?>
                    </td> 
                    <td>
                        <a href="modifier.php?&id=$id" title="modifier"><i class="bi bi-pencil-square"></i></a>
                    </td>
                    <td>
                        <a href="supprimer.php?&id=$id" title="supprimer"><i class="bi bi-x-square"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>