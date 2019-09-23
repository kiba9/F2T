<?php
if (isset($_GET['send'])) $rpns = true; else $rpns ="fail";
$new = isset($_GET['upl']) ? $_GET['upl'] : null ;
?>

<html>
<head>
    <meta charset="utf-8"/>
    <title>Local Files</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>

    <p><br/></p>
    <h3 align="center">FILE 2 SHARE.</h3>

    <?php if(isset($_GET['send'])):?>
        <div class="container">
            <div class="alert alert-success">
                Elément Ajouté.
            </div>
        </div>
    <?php elseif(!$rpns): var_dump($rpns) ?>
        <div class="container">
            <div class="alert alert-danger">
                Erreur lors de l'upload.
            </div>
        </div>
    <?php endif; ?>

    <div id="upl" class="upload">
        <form action="upload.php" enctype="multipart/form-data" method="post">
            <input type="file" id="name" name="file" multiple>
            <input type="submit" value="Envoyer sur le server">
        </form>
    </div>

    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Fichiers</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //include "config.php";
                $files = scandir("uploads");
                for ($a = 2; $a < count($files); $a++):
                ?>
                <tr>
                    <td><?php if(!strcmp($new, $files[$a])) {echo "<i></i>";}
                        echo $files[$a] ?></td>
                    <td class="text-center"><a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>" class="btn btn-primary">Telecharger</a></td>
                </tr>
                <?php
                endfor;
                ?>
            </tbody>
        </table>
    </div>
    <a href="#" id="btnUp" class="calendar__button">Uploader un fichier</a>

    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>