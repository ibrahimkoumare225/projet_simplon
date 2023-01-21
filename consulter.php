<?php
    include_once('action/actionConsulter.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/head.php')?>
    <link rel="stylesheet" href="assets/style1.css">
    <title>Page d'incsription</title>
</head>
<body>
    <?php include('includes/navbarconect.php')?>

    <br><br>
        <div class="domaineCompétence">
            <center>
                <table>
                                <tr>
                                    <th class="colorBlueLigth">ID</th>
                                    <th class="colorBlueLigth">NOM</th>
                                    <th class="colorBlueLigth">PRENOM</th>
                                    <th class="colorBlueLigth">N°téléphone</th>
                                    <th class="colorBlueLigth">ADRESSE EMAIL</th>
                                </tr>
                                <?php 
                                        while($inscrit =  $getAllInscrit->fetch()){
                                        
                                ?>
                                <tr>
                                    <td><?= $inscrit['id'] ?></td>
                                    <td><?= $inscrit['nom'] ?></td>
                                    <td><?= $inscrit['prenom'] ?></td>
                                    <td><?= $inscrit['numero'] ?></td>
                                    <td><?= $inscrit['email'] ?></td>
                                </tr>
                                <?php
                                    }
                                ?>
                 </table>
            </center>
              
        </div>       
</body>
</html>