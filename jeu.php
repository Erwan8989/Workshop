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
    background-image: url(images/YAHOO.png);
	background-size: cover;
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-position: top;
}
    </style>
</head>
<body>

<?php
include('bdd.php');

$i = $_GET['i'];
$j = $_GET['j'];
$mov = "";
$mov2 = "";
$reponse = "";
$Reset = "";
$donnees2 = "";

?>

<div class="container-fluid mt-5">
    <div class="row ">
        <div class="col-6">
            <?php 
                if (isset($_POST['Reset'])) {
                $Reset=$_POST['Reset'];
                }
                
                if($Reset=='Reset'){
                    $req=$conn->prepare("UPDATE score set points = 0");
                    $req->execute();
                }

                echo '<FORM ACTION="jeu.php?i=1&j=1" METHOD=POST class="form"> ';
                echo "<INPUT TYPE=HIDDEN SIZE=1 NAME='Reset' VALUE='Reset'>";
                echo "<INPUT TYPE=SUBMIT VALUE='Reset' class=bouton3>  ";
                echo "</FORM>";
            ?>
        </div>
        <div class="col-6 regles">
            <a href="/workshop/regles.php" target="_BLANK" class="texte_regles">Règles</a>
        </div>
    </div>
    <div class="row">
        <div class="col-1 p-0">
            <div class="bloc2">
                <!-- <a href="jeu.php" class="para2"><p class="para2">+1 point</p></a> -->
                <?php

                    @session_start();

                    // Conditions pour points equipes 1

                    if (isset($_POST['mov'])) {
                        $mov=$_POST['mov'];
                    }


                    if($mov=='+1 point')
                    {
                        $req=$conn->prepare("UPDATE score set points = points + 1 WHERE id=1");
                        $req->execute();
                        $req=$conn->prepare("SELECT * FROM question ORDER BY rand()");
                        $req->execute();    
                        $donnees2 = $req->fetch(); 
                        $_SESSION['question'] = $donnees2['question'];  
                        $_SESSION['reponse'] = $donnees2['reponse'];               
                    }
                    

                    // Conditions pour points equipes 2

                    if (isset($_POST['mov2'])) {
                        $mov2=$_POST['mov2'];
                        }
    
                    if($mov2=='+1 point'){
                        $req=$conn->prepare("UPDATE score set points = points + 1 WHERE id=2");
                        $req->execute();
                        $req=$conn->prepare("SELECT * FROM question ORDER BY rand()");
                        $req->execute();    
                        $donnees2 = $req->fetch();                         
                    }

                    echo '<FORM ACTION="jeu.php?i=1&j=1" METHOD=POST>';
                    echo "<INPUT TYPE=HIDDEN SIZE=1 NAME='mov' VALUE='+1 point'>";
                    echo "<INPUT TYPE=SUBMIT VALUE='+1 point' class=bouton>";
                    echo "</FORM>";
                ?>
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
            <div class="bloc2">
                <!-- <a href="jeu.php" class="para2"><p class="para2">+1 point</p></a> -->
                <?php

                    echo '<FORM ACTION="jeu.php?i=1&j=1" METHOD=POST>';
                    echo "<INPUT TYPE=HIDDEN SIZE=1 NAME='mov2' VALUE='+1 point'>";
                    echo "<INPUT TYPE=SUBMIT VALUE='+1 point' class=bouton2>";
                    echo "</FORM>";

                ?>
            </div>
        </div>
        <div class="col-6">
            <div class="bloc4">
                <?php
                if(isset($donnees2['question'])){
                    echo $donnees2['question'];
                }
                else{
                    echo $_SESSION['question'];
                }                  
                ?>
            </div>
            <div>
                <form action="" method="post" class="form-example formulaire">
                    <div class="form-example">
                        <label for="name" class="reponse_bloc4">Réponse</label>
                        <input type="text" name="name" id="name" class="reponse" required>
                        <input type="submit" class="reponse_bloc4" value="Valider">
                    </div>
                </form>

                <?php 
                    if(isset($_POST['name'])){
                        if($_POST['name'] == $_SESSION['reponse']){
                            echo 'Hello';
                            $req=$conn->prepare("SELECT * FROM bonus ORDER BY rand()");
                            $req->execute();
                            $donnees3 = $req->fetch();
                            echo $donnees3['instruction'];
                        }
                        else{
                            
                        }
                    }

                        // $reponse = "";
                        

                       
                        // $req=$conn->prepare("SELECT * FROM question ORDER BY RAND);
                        // $req->execute([$_POST['valeur']])
                        

                        
                        // $reponse = $req->fetch();  
                        // if($reponse){  
                        //     $erreurs['nom'] ="Ce nom exixte";  
                        // }elseif ($user != $_POST['nom']) {  
                        // $erreurs['nom'] ="Votre nom n'est pas le même veillez revérifier";  
                        



                        
                        // while ($donnees = $req->fetch()){
                        //     echo $donnees['points'];
                        // }
                        
                ?>
                
            </div>
            
            <div class="instru">
                <p class="instru_">
                    Instructions
                </p>
            </div>
        </div>
    </div>
</div>

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
