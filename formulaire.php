<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>WEB2/TP1/PHP_PROCEDURAL</title>
  </head>

    <body>
    <div class="container2">

    
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5>Fiche de Renseignements</h5>
                        </div>
                        <div class="card-body">

                            <form action="recap.php" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group row mb-3">
                                    <label for="nom" class="col-sm-2 col-form-label"> <i class="fa-solid fa-id-card"></i> Nom :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Veuillez entrer votre nom"   >
                                    </div>
                                </div>
                                
                                <div class="form-group row mb-3">
                                    <label for="lname" class="col-sm-2 col-form-label"> <i class="fa-solid fa-id-card"></i> Prenom :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="prenom" id="lname" class="form-control" placeholder="Veuillez entrer votre prenom">
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="age" class="col-sm-2 col-form-label"> <i class="fa-solid fa-id-card"></i> Age :</label>
                                    <div class="col-sm-8">
                                        <input type="number" name="age" id="age" class="form-control" placeholder="Entrer votre age">
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="phone" class="col-sm-2 col-form-label"> <i class="fa-solid fa-phone"></i> Telephone:</label>
                                    <div class="col-sm-8">
                                        <input type="numero" name="tel" id="phone" class="form-control" placeholder="Veuillez entrer votre numero telephonique">
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="mail" class="col-sm-2 col-form-label"> <i class="fa-solid fa-envelope"></i> Email :</label>
                                    <div class="col-sm-8">
                                        <input type="email" name="email" id="mail" class="form-control" placeholder="Veuillez entrer votre email">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <h6><i class="fa-solid fa-graduation-cap"></i> Vous etes en :</h6>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineRadio1">2AP:</label>
                                        <input class="form-check-input" type="radio" name="fil" id="inlineRadio1" value="2AP" class="form-control">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineRadio2">GSTR:</label>
                                        <input class="form-check-input" type="radio" name="fil" id="inlineRadio2" value="GSTR" class="form-control">
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineRadio3">GI:</label>
                                        <input class="form-check-input" type="radio" name="fil" id="inlineRadio3" value="GI" class="form-control">
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineRadio4">SCM:</label>
                                        <input class="form-check-input" type="radio" name="fil" id="inlineRadio4" value="SCM" class="form-control">
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineRadio5">GC:</label>
                                        <input class="form-check-input" type="radio" name="fil" id="inlineRadio5" value="GC" class="form-control">
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineRadio6">MS:</label>
                                        <input class="form-check-input" type="radio" name="fil" id="inlineRadio6" value="MS" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineRadio7">1er annee:</label>
                                        <input class="form-check-input" type="radio" name="year" id="inlineRadio7" value="1 annee" class="form-control">
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineRadio8">2eme annee:</label>
                                        <input class="form-check-input" type="radio" name="year" id="inlineRadio8" value="2 annee" class="form-control">
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineRadio9">3eme annee:</label>
                                        <input class="form-check-input" type="radio" name="year" id="inlineRadio9" value="3 annee" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <h6><i class="fa-solid fa-book"></i> Modules suivies cette annee :</h6>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="modules[]" id="inlineCheckbox1" value="Pro Av">
                                        <label class="form-check-label" for="inlineCheckbox1">Pro Av</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="modules[]" id="inlineCheckbox2" value="Compilation">
                                        <label class="form-check-label" for="inlineCheckbox2">Compilation</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="modules[]" id="inlineCheckbox2" value="reseaux Av">
                                        <label class="form-check-label" for="inlineCheckbox3">reseaux Av</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="modules[]" id="inlineCheckbox2" value="Web Avance">
                                        <label class="form-check-label" for="inlineCheckbox4">Web Avance</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="modules[]" id="inlineCheckbox2" value="POO">
                                        <label class="form-check-label" for="inlineCheckbox5">POO</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="modules[]" id="inlineCheckbox2" value="BD">
                                        <label class="form-check-label" for="inlineCheckbox6">BD</label>
                                    </div>
                                </div>
                                
                                    
                                <div class="form-groupe row mb-3">
                                    <label class="col-sm-8 col-form-label" for="quantity"> <h6><i class="fa-solid fa-chalkboard-user"></i> Nombre de projets realises cette annee:</h6></label> 
                                    <div class="col-sm-3" > 
                                        <select name="quantity" id="quantity" onchange="showFields()" class="form-select form-select mb-3 form-control">
                                            <option value="0">Select an option</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                        <div id="inputFields"> </div>
                                        
                                    </div>   
                                </div>

                                <div class="mb-3">
                                    <h6><i class="fa-solid fa-medal"></i> Clubs affilies :</h6>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="clubs[]" id="inlineCheckbox1" value="INFOTECH">
                                        <label class="form-check-label" for="inlineCheckbox1">INFOTECH</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="clubs[]" id="inlineCheckbox2" value="WIRNET">
                                        <label class="form-check-label" for="inlineCheckbox2">WIRNET</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="clubs[]" id="inlineCheckbox3" value="MECATRONIQUE">
                                        <label class="form-check-label" for="inlineCheckbox3">MECATRONIQUE</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="clubs[]" id="inlineCheckbox4" value="LOGISTICA">
                                        <label class="form-check-label" for="inlineCheckbox4">LOGISTICA</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="clubs[]" id="inlineCheckbox5" value="GENIE Civil">
                                        <label class="form-check-label" for="inlineCheckbox5">GENIE Civil</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="clubs[]" id="inlineCheckbox6" value="ECHECS">
                                        <label class="form-check-label" for="inlineCheckbox6">ECHECS</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="clubs[]" id="inlineCheckbox7" value="ENSART">
                                        <label class="form-check-label" for="inlineCheckbox7">ENSART</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="clubs[]" id="inlineCheckbox8" value="ROTARACT">
                                        <label class="form-check-label" for="inlineCheckbox8">ROTARACT</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="clubs[]" id="inlineCheckbox9" value="CETEC">
                                        <label class="form-check-label" for="inlineCheckbox9">CETEC</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="clubs[]" id="inlineCheckbox10" value="HULTPRIZE">
                                        <label class="form-check-label" for="inlineCheckbox10">HULTPRIZE</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="clubs[]" id="inlineCheckbox11" value="SPORT">
                                        <label class="form-check-label" for="inlineCheckbox11">SPORT</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="clubs[]" id="inlineCheckbox12" value="MASSJID">
                                        <label class="form-check-label" for="inlineCheckbox12">MASSJID</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="clubs[]" id="inlineCheckbox13" value="AFI">
                                        <label class="form-check-label" for="inlineCheckbox13">ASSOCIATION DES FUTURS INGENIEURS AFI</label>
                                    </div>

                                </div>

                                <div class="mb-3">
                                    <div class="form-floating">
                                        <textarea name ="textarea" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Vos remarques</label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label hidden = "hidden" for="formFile" class="form-label">Default file input example</label>
                                    <input class="form-control" name="image" type="file" accept="image/*" id="formFile">
                                </div>


                                <div class="mb-3 float-end">
                                    <button type="submit" class="btn btn-primary" name="save"> Envoyer</button>
                                    <input class="btn btn-secondary " type="reset" value="Reset">
                                </div>

                                <div class="mb-3">
                                <input type="submit" name="btn" class="btn btn-warning float-start" value="Générer pdf">
                                </div>
                            </form>
                        
                        </div> 
                        
                        <div class="card-footer text-muted">
                            Veuillez verifier que vos donnees sont correctes
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
            function showFields() {
                var quantity = document.getElementById("quantity").value;
                var inputFields = document.getElementById("inputFields");
                inputFields.innerHTML = ""; // Clear any existing input fields

                for (var i = 0; i < quantity; i++) {
                    var label = document.createElement("label");
                    label.textContent = "Projet " + (i+1) + ": ";
                    
                    var input = document.createElement("input");
                    input.type = "text";
                    input.name = "input" + (i+1);
                    input.classList.add("form-control");
                    inputFields.appendChild(label); //method allows you to add a node to the end of the list of child nodes of a specified parent node.
                    inputFields.appendChild(input);
                }
            }
        </script>
    
    </div>
    </body>

</html>
