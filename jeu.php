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
</head>
<body>

<?php
include('bdd.php');

$i = $_GET['i'];

?>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-1 p-0">
            <div class="rouge2 bloc2">
                <a href="jeu.php" class="para2"><p class="para2">+1 point</p></a>
            </div>
        </div>
        <div class="col-4">
            <table class="m-auto">
                <tbody>
                <tr>
                    <td scope="equipe_rouge">Equipe rouge</td>
                    <td scope="equipe_bleue">Equipe bleue</td>
                </tr>
                <tr>
                    <td><?php 
                        if($i == 1){
                            $req=$conn->prepare("SELECT * FROM score WHERE id=1");
                            $req->execute();
                        }

                        while ($donnees = $req->fetch()){
                            echo $donnees['points'];
                        }?>
                    </td>
                    <td><?php 
                        if($i == 1){
                            $req=$conn->prepare("SELECT * FROM score WHERE id=2");
                            $req->execute();
                        }
                        
                        while ($donnees = $req->fetch()){
                            echo $donnees['points'];
                        }?>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-1 p-0">
            <div class="bleu2 bloc2">
                <a href="jeu.php" class="para2"><p class="para2">+1 point</p></a>
            </div>
        </div>
        <div class="col-6">

        </div>
    </div>
</div>
    <!-- <?php
    
    $nombre = 0; //Récupération de ton nombre via base de donnée ou fichier (cf cours m@teo21)

if (isset($_POST['plus'])){
    $nombre++;
    // update ton score
    //On renvoi le nombre dans la base de donnée ou le fichier
}else if(isset($_POST['moins'])){
    $nombre--;
    //On renvoi le nombre dans la base de donnée ou le fichier
}
echo $nombre;
// echo du score en base : SELECT
?>
    <form method="post" action="jeu.php">
        <input type="submit" name="plus" value="Plus" />
        <input type="submit" name="moins" value="Moins" />
    </form> -->

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
