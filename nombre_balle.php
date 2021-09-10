<!doctype html>
<html lang="fr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
  <title>Hello, world!</title>

  <style type="text/css">
        body{
    background-image: url(images/wallp.png);
	background-size: cover;
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-position: top;
}
    </style>
</head>
<body>
<?php
session_start();
?>

    <div class="formulaire_balle">
        <form action="nombre_balle.php" method="post" class="form-example bloc_balle">
            <div class="form-example">
                <label><p class="bloc3">Combien de balle avez-vous? (Entre 1 et 4)</p></label>
                <input type="text" name="balle" id="name" class="reponse_balle" required>
                <label><p class="bloc3">Jusqu'à combien de point voulez-vous jouer pour gagner ?</p></label>
                <input type="text" name="point" id="name" class="reponse_balle" required>
                <input type="hidden" name="reset" id="name" class="reponse_balle" required>
                <input type="submit" class="reponse_bloc4" value="Valider">
            </div>
        </form>
    </div>

    <?php
        if(isset($_POST['balle'])){
            if($_POST['balle'] < 1 || $_POST['balle'] > 4){ ?> 
            
            <div class="erreur">
                <p class="poste">Veuillez entrer une valeur entre 1 et 4</p>
            </div>
    
            <?php
               
            }
            elseif($_POST['point'] < 1){ ?>
            
            <div class="erreur1">
                <p class="poste1">Veuillez entrer une valeur valide</p>
            </div>


            <?php
            }
            else{
                $_SESSION['balle'] = $_POST['balle'];
                $_SESSION['point'] = $_POST['point'];
                $_SESSION['reset'] = $_POST['reset'];
                header('Location: jeu.php?i=1&j=1');
            }
        }
    ?>
    

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
-->
</body>
</html>
