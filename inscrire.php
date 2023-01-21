<?php
    include_once('action/actionInscrire.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/head.php')?>
    <link rel="stylesheet" href="assets/style1.css">
    <title>Padge d'incsription</title>
</head>
<body>
    <?php include('includes/navbarconect.php')?>
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