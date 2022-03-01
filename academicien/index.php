<?php
require_once 'php/control.php';

    if(isset($_POST['btnval'])) {
        $matricule = control($_POST['matricule']);
        $nom = control($_POST['nom']);
        $prenom = control($_POST['prenom']);
        $url = "http://127.0.0.1:8000/api/academicien";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        return $resp = curl_exec($curl);

        curl_close($curl);

		if($user){
            header('location: php/liste.php');
        }else{
            echo "Utilisateur Inconnu";
        }

    }
 

?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/cssmenu.css">
    <title>Academicien</title>
</head>
<body>
   <div id="modFrm">
		<div class="frmCtn">
			<div class="logofrm"><img src=""></div>
			<div class="separator"></div>
			<div class="frm">
				<div class="avatar"><img src="images/user.png"></div>
				<div class="frmadmin">
					<form method="POST" action="">
						<div class="inputFrm">
							<input type="text" name="nom" id="nom" placeholder="Matricule" required="required" autocomplete="off">
						</div>
						<div class="inputFrm">
							<input type="text" name="nom" id="nom" placeholder="Nom" required="required" autocomplete="off">
						</div>
                        <div class="inputFrm">
							<input type="text" name="prenom" id="nom" placeholder="Prenom" required="required" autocomplete="off">
						</div>
						<div class="inputFrm" style="margin-top:20px;">
							<input type="submit" name="btnval" value="Se connecter">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html> 