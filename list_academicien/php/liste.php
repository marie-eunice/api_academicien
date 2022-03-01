<?php

require_once 'getApi.php';
require_once 'control.php';

if(isset($_GET['academicien']) && !empty($_GET['academicien'])){
    $academicien = control($_GET['academicien']);

    $resp = json_decode(getAcademicien($academicien));
    
    // echo "<pre>";
    // die(print_r($resp));
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Liste des projets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>
<div class="container" >    
        <div class="header">
            <section class="listes">
                <ul>
                    <li><a href="liste.php?academicien=Academicien">Voir la liste des académiciens</a></li>
                    
                </ul>
            </section>
           
        </div>
        <div class="academicien">
            
            <?php if(isset($academicien) && !empty($academicien)): ?>
                <div class="item">
                     <div><img src="../images/user.png" class="medium-icon" alt=""></div>
                    
                </div>
                <div class="item ">
                    <div class="label-b left">Matricule: <b class="temp"><?= $resp->nom ?></b></div>
                </div>
                <div class="item ">
                    <div class="label-b left">Nom: <b class="temp"><?= $resp->matricule ?></b></div>
                </div>
                <div class="item ">
                    <div class="label-b left">Prenom: <b class="temp"><?= $$resp->prenom ?></b></div>
                </div>
              
            <?php endif; ?>
        </div>
            
    </div>
    
</body>
</html>