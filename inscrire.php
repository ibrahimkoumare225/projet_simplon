<?php
    include_once('actionInscrire.php');
?>
    <!DOCTYPE html>
        <html lang="fr">
            
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Platcom</title>
            
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
                <link rel="stylesheet" href="app.css">
                <link rel="stylesheet" href="style1.css">
                <title>Page d'incsription</title>
            </head>

            

            <body>
                    <nav>
                        <header class="topbar">
                            <a href="index.php"class="topbar-logo ">Platcom</a>
                            
                        </header>
                    </nav>
                <center>
                <fieldset >
                    <form method="POST">
                        <?php
                            if(isset($errorMsg))
                                {  echo '</p>'. $errorMsg. '</p>'; }
                            elseif(isset($successMsg)){echo '</p>'. $successMsg. '</p>'; }
                        ?> 
                        <h1>Inscrivez-vous !</h1>
                        <hr>
                        <table>
                            <tr>
                                <td>Nom: </td><td><input type="text" name="nom" ><br><br></td>   
                            </tr>
                            <tr>
                                <td>Prenom: </td><td><input type="text" name="prenom" ><br><br></td>   
                            </tr>
                            <tr>
                                <td>N°téléphone: </td><td><input type="tel" name="numero" ><br><br></td>   
                            </tr>
                            <tr>
                                <td>Email: </td><td><input type="email" name="email" ><br><br></td>   
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" name="validate"id="submit" value="S'inscrire"></td>   
                            </tr>
                        </table>
                    </form>
                </fieldset>
            
                </center>
            </body>
        </html>