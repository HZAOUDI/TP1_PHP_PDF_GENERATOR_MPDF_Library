<?php  
    if (isset($_POST['save'])) {
        $nom =   $_POST['nom'];
        $prenom =  $_POST['prenom'];
        $age = $_POST['age'];
        $tel =  $_POST['tel'];
        $email = $_POST['email'];
        $fil = $_POST['fil'];
        $year = $_POST['year'];
        $modules = $_POST['modules'];
        $quantity = $_POST['quantity'];
        $clubs = $_POST['clubs'];
        $textarea = $_POST['textarea'];

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $allowed_types = array("jpg", "jpeg", "png", "gif");
        
        // Check if the file is an image and has a valid extension
        if(in_array($imageFileType, $allowed_types) && getimagesize($_FILES["image"]["tmp_name"]) !== false) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                //echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Sorry, only JPG, JPEG, PNG and GIF files are allowed.";
        }

    }
?>

<?php
if(isset($_POST['btn'])){
	$nom =   $_POST['nom'];
	$prenom =  $_POST['prenom'];
	$age = $_POST['age'];
	$tel =  $_POST['tel'];
	$email = $_POST['email'];
	$fil = $_POST['fil'];
	$year = $_POST['year'];
	$modules = $_POST['modules'];
	$quantity = $_POST['quantity'];
	$clubs = $_POST['clubs'];
	$textarea = $_POST['textarea'];

    $pic=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    $folder="uploads/".$pic;
    move_uploaded_file($tmp_name,$folder);


	$html="<!DOCTYPE html>
	<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' type='text/css' href='style.css'>
		<title>CV</title>
	</head>
	<body>
	<div id='container'>
			<div id='header'>
				<div id='left'>
					<div id='image'>
						<img src='uploads/{$pic}'>
					</div>
					<div>
					
						<h1>
							$prenom $nom  
						</h1>
						<h3> 
                            Etudiante a l'ENSA Tetouan en
                            $fil $year
						</h3>
					</div>
					<div>
						<h2>Contact</h2>
						<ul id='list'>
							<li>Age: $age</li>
							<li>Tel: $tel</li>
							<li>Email: $email</li>
						</ul>
						<h2>Skills</h2>
						<ul id='list'>
							skills
						</ul>
						<h2>Languages</h2>
						<ul id='list'>
							<li>language1</li>
							<li>language2</li>
							<li>language3</li>
						</ul>
					</div>
				</div>
				<div id='right'>
					<div>
						<h2>About me</h2>
						<p> $textarea </p>

						<h2>Personal Information</h2>
						<table cellspacing='0' cellpadding='7'>
							<tr>
								<td><b>Nom: <b></td>
								<td>$nom</td>
							</tr>
							<tr>
								<td><b>Prenom: <b></td>
								<td>$prenom</td>
							</tr>
							<tr>
								<td><b>Age: <b></td>
								<td>$age</td>
							</tr>
							<tr>
								<td><b>Email: <b></td>
								<td>$email</td>
							</tr>
						</table>

						<h2>Education</h2>
                        <table cellspacing='0' cellpadding='7'>
							<tr>
								<td><b>Filiere: <b></td>
								<td>$fil</td>
							</tr>
							<tr>
								<td><b>Annee: <b></td>
								<td>$year</td>
							</tr> 

						</table>  

                        <p> Modules etudiees: </p><ul> ";

                        $checkbox_val = $_POST['modules'];
                        foreach ($checkbox_val as $value) {
                            $html .= "<li> $value </li>" ;
                        }

						$html .= "</ul> <h2>Experience</h2> 
                        <p> Club Affiliees: </p>
                        <ul>"; 

                        $checkbox_val = $_POST['clubs'];
                        foreach ($checkbox_val as $value) {
                            $html .= "<li> $value </li>";
                        }

						$html .= " </ul>
                        
						<h2>Projets</h2>
                        <p> Nombre de projet realises : $quantity </p>
						<ul> "; 
                            $quantity = $_POST['quantity'];
                            for ($i = 1; $i <= $quantity; $i++) {
                                $inputName = 'input' . $i;
                                $inputValue = $_POST[$inputName];
                                $html .= "<li>Projet $i: $inputValue</li>";
                            }

                            $html .="
						</ul>
					</div>
				</div>
			</div>
	    </div>
		<div id='footer'>
			Mobile:mobile / Email:email
		</div>
	</body>
	</html>";

include "vendor/autoload.php";
$mpdf=new \Mpdf\Mpdf(['margin_top'=>2, 'margin_right'=>2,
	'margin_bottom'=>2,'margin_left'=>2]);
$mpdf->SetDisplayMode('fullpage');

$style=file_get_contents('style.css');
$mpdf->WriteHTML($style,1);
$mpdf->WriteHTML($html);
$mpdf->Output('');
exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>WEB2/TP1/PHP_PROCEDURAL</title>
  </head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card text-center">
                    <div class="card-header">
                        <h5>Recaputilatif des informations  de l'etudiant</h5>
                    </div>

                    <div class="card-body">
                       
                        <div class="form-group row mb-3">
                            <label for="fname" class="col-sm-2 col-form-label">Nom :</label>
                            <div class="col-sm-8">
                                <p id="fname" class="form-control">
                                    <?= $_POST['nom']?>
                                </p>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-3">
                            <label for="lname" class="col-sm-2 col-form-label">Prenom :</label>
                            <div class="col-sm-8">
                                <p id="lname" class="form-control">
                                    <?= $_POST['prenom']?>
                                </p>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="age" class="col-sm-2 col-form-label">Age :</label>
                            <div class="col-sm-8">
                                <p id="age" class="form-control">
                                <?= $_POST['age']?>
                                </p>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="phone" class="col-sm-2 col-form-label">Numero de telephone :</label>
                            <div class="col-sm-8">
                                <p id="phone" class="form-control">
                                    <?= $_POST['tel']?>
                                </p>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="mail" class="col-sm-2 col-form-label">Email :</label>
                            <div class="col-sm-8">
                                <p id="mail" class="form-control">
                                    <?= $_POST['email']?>
                                </p>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label> <h6>Vous etes en :</h6></label>  <br/>
                            <?= $_POST['fil']?> <br/> 
                            <?= $_POST['year'] ?>
                        </div>
                        
                        <div class="mb-3">
                            <label> <h6>Modules suivies cette annee :</h6></label> <br/>
                            <?php
                            if(isset($_POST['modules'])){
                                $checkbox_val = $_POST['modules'];
                                foreach ($checkbox_val as $value) {
                                    echo $value . "<br>";
                                }
                                } else {
                                echo "No values selected.";
                                }

                            ?>
                        </div>

                        <div class="mb-3">
                            <label> <h6> Nombre de projets realises cette annee:</h6></label> 
                            <?php
                                if(isset($_POST['quantity'])){
                                    echo $quantity;
                                }else {
                                    echo "Pas de projet realisé.";
                                }
                            
                            ?>
                            <?php
                                $quantity = $_POST['quantity'];
                                for ($i = 1; $i <= $quantity; $i++) {
                                    $inputName = 'input' . $i;
                                    $inputValue = $_POST[$inputName];
                                    echo "<p>Projet $i: $inputValue</p>";
                                }
                            ?>

                        </div>

                        <div class="mb-3">
                            <label> <h6>Clubs affilies :</h6></label> <br/>
                            <?php
                            if(isset($_POST['clubs'])){
                                $checkbox_val = $_POST['clubs'];
                                foreach ($checkbox_val as $value) {
                                    echo $value . "<br>";
                                }
                            } else {
                                echo "No club selected.";
                            }

                            ?>
                        </div>
                        
                        <div class="mb-3">
                            <label for="floatingTextarea2">Comments:</label>
                            <?php
                            if (isset($_POST['textarea'])) {
                                    ?>
                                <p class="form-control" >
                                    <?=  $_POST['textarea'] ?>
                                </p>

                                <?php
                            
                            } else {
                                echo "No text entered.";
                            }
                            ?>

                        </div>

                        <div class="form-group row mb-3">
                            <label for="file" class="col-sm-2 col-form-label"> Votre image :</label>
                            <div class="col-sm-8">
                             <?php echo "<img src='$target_file' alt='uploaded image' width='100px'>"; ?>
                            </div>
                        </div>

                        <div class="mb-3 ">
                            <input class="submit btn btn-success" type="submit" name="valider" value="valider" onclick="printTXT()">

                            <form action="formulaire.php"  method="GET">
                                <input class="submit btn btn-primary" type="button" onclick="history.go(-1);" value="Modifier">
                                
                            </form>
                        </div>     

                    </div> 
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script> 
        function printTXT() {
            <?php

            $quantity = $_POST['quantity'];
            $output = "";
            for ($i = 1; $i <= $quantity; $i++) {
                $inputName = 'input' . $i;
                $inputValue = $_POST[$inputName];
                $output .= "  -> projet $i: $inputValue\n";
            }

            if(isset($_POST['modules'])){
                 $values = implode(', ', $_POST['modules']);
            }
            $file = fopen("data.txt","w");
            fwrite($file, 
                "Nom: " . $_POST['nom'] .
                "\nPrenom: " . $_POST['prenom'] .
                "\nage: " . $_POST['age'] .
                "\nTel: " . $_POST['tel'] .
                "\nEmail: " . $_POST['email'] .
                "\nVous etes en: " . $_POST['fil'] .
                "\nAnnee: " . $_POST['year'] .
                "\nModules:" . $values .
                "\nNbr de projets:" . $_POST['quantity'] .
                "\nListes de projets:\n" . $output .
                "Remarque:" . $_POST['textarea'] . 
                "\n====================================" .                   
            "\n");
            fclose($file);
            ?>
        }
       
    </script>
</body>
</html>