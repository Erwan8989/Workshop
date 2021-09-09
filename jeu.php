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
session_start();

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
                if (isset($_POST['Reset']) || isset($_SESSION['reset'])) {
                    if(isset($_POST['Reset'])){
                        $Reset=$_POST['Reset'];
                    }
                    else{
                        unset($_SESSION['reset']);
                        $Reset='Reset';
                    }
                    
                }
                
                if($Reset=='Reset'){
                    $req=$conn->prepare("UPDATE score set points = 0");
                    $req->execute();
                    unset($_SESSION['instruction']);
                    unset($_SESSION['question']);
                    $_SESSION['instruction3'];
                }

                echo '<FORM ACTION="jeu.php?i=1&j=1" METHOD=POST class="form"> ';
                echo "<INPUT TYPE=HIDDEN SIZE=1 NAME='Reset' VALUE='Reset'>";
                echo "<INPUT TYPE=SUBMIT VALUE='Reset' class=bouton3>  ";
                echo "</FORM>";
            ?>
        </div>


        


        <div id="popup1" class="overlay">
	        <div class="popup">
		        <h2>Règles</h2>
		        <a class="close" href="#">&times;</a>
                <div class="content"> Pendant votre partie de baby-foot, si l'un de vous parviens à mettre un but dans la cage adverse, il devra répondre à une question !
                    Bonne ou mauvaise réponse, la suite vous réserve des surprises ! 
                    <br> <br>                                                                                                          
                    Cette plateforme va vous permettre de jouer au baby-foot avec vos ami(e)s, en y ajoutant des éléments qui vont changer le mode de jeu. 
                    <br> <br>
                    Dès qu'un but est marqué, ajoutez un point. Une question est alors posée à l'équipe venant de gagner un point. 
                    Selon vos réponses, des instructions seront affichées en dessous. Appliquez-les jusqu'au prochain but. 
                    <br> <br>
                    Bonnes parties ! 
                </div>
	        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-1 p-0">
            <div class="bloc2">
                <!-- <a href="jeu.php" class="para2"><p class="para2">+1 point</p></a> -->
                <?php
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
                        unset($_SESSION['instruction']);  
                        unset($_SESSION['instruction2']);         
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
                        $_SESSION['question'] = $donnees2['question'];  
                        $_SESSION['reponse'] = $donnees2['reponse'];  
                        unset($_SESSION['instruction']);                    
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
                            $point1 = $donnees['points'];

                            ?> 

                            <!-- <div id="popup1" class="overlay">
                                <div class="popup">
                                    <h2>Règles</h2> -->
                                    <!-- <a class="close" href="#">&times;</a>
                                    <div class="content"> L'équipe rouge à gagné ! </div>
                                </div>
                            </div> --> 
                            

                            <?php

                            if($point1 == $_SESSION['point']){
                                echo "<INPUT TYPE=HIDDEN id=popup1 class=overlay class=popup>";
                            }
                        }?>
                    </td>

                    <td><?php 
                        if($i == 1){
                            $req=$conn->prepare("SELECT * FROM score WHERE id=2");
                            $req->execute();
                        }
                        
                        while ($donnees = $req->fetch()){
                            echo $donnees['points'];
                            $point2 = $donnees['points'];

                            ?> 
                            
                            
                            
                            
                            
                            
                            
                            <?php




                            if($point2 == $_SESSION['point']){
                                echo 'METTRE POPOPUP';
                            }
                        }
                        
                        ?>
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
                if(($point1 - $point2 ==3) || ($point2 - $point1 ==3)){
                    $_SESSION['instruction2'] = "Différence de 3 points !";
                    echo $_SESSION['instruction2'];
                }
                elseif(($point1 - $point2 == 4) || ($point2 - $point1 == 4)){
                    $_SESSION['instruction2'] = "Différence de 4 points !";
                    echo $_SESSION['instruction2'];
                }

                else{
                    if(isset($donnees2['question'])){
                        echo $donnees2['question'];
                    }
                    elseif(isset($_SESSION['question'])){
                        echo $_SESSION['question'];
                    } 
                    else{
                        echo "Les questions apparaîtront ici !";
                    }  
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
                            $req=$conn->prepare("SELECT * FROM bonus ORDER BY rand()");
                            $req->execute();
                            $donnees3 = $req->fetch();
                            $_SESSION['instruction'] = $donnees3['instruction'];
                            $_SESSION['titre'] = $donnees3['titre'];
                        }
                        else{
                            $req=$conn->prepare("SELECT * FROM malus ORDER BY rand()");
                            $req->execute();
                            $donnees3 = $req->fetch();
                            $_SESSION['instruction'] = $donnees3['instruction'];
                            $_SESSION['titre'] = $donnees3['titre'];
                        }
                    }
                        
                ?>
                
            </div>
            
            <div class="instru">
                <p class="instru_">
                    <?php
                    if(($point1 - $point2 == 3) || ($point2 - $point1 == 3)){
                        
                        $nombre_balle = rand(2, $_SESSION['balle']);

                        $_SESSION['instruction3'] = "Ajoutez $nombre_balle balles !";

                        echo $_SESSION['instruction3'];
                    }
                    elseif(($point1 - $point2 == 4) || ($point2 - $point1 == 4)){
                        echo '';
                        $_SESSION['instruction3'] = "Une équipe semble en difficulté... Pour rééquilibrer le match, chaque joueur tourne de 1 vers la droite. Bon match !";
                    echo $_SESSION['instruction3'];
                    }
                    else{
                        if(isset($_SESSION['instruction'])){
                            echo $_SESSION['titre'];
                            ?> <br><?php
                            echo $_SESSION['instruction'];;
                        }
                        else{
                            echo "Les instructions apparaîtront ici !";
                        }
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>
    <div class="row_regles">
        <div class="col-6 regles">
                <a class="button" href="#popup1">Règles</a>
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
