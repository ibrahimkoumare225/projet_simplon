    <?php
        include_once('actionConsulter.php');
    ?>
    <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Platcom</title>
            
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
                <link rel="stylesheet" href="app.css">
                <link rel="stylesheet" href="style1.css">
                <title>Page de consultation</title>
            </head>
            <body>
                <nav>
                    <header class="topbar">
                        <a href="index.php"class="topbar-logo ">Platcom</a>
                        
                    </header>
                </nav>

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