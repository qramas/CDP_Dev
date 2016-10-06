<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Circuit Scientifique Bordelais - Inscription Atelier</title>
      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom css-->
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <div class="container">
         <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
               <div class="navbar-header">
                  <a class="navbar-brand" href="#">
                  <img class="logo" alt="Brand" src="img/logo.png">
                  </a>
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                     <li><a href="liste.php">Lister les ateliers</a></li>
                     <li class="active"><a href="#">Inscrire un atelier<span class="sr-only">(current)</span></a></li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>
         <h1 class="col-sm-offset-2 col-sm-8">Inscrire un atelier</h1>
         <?php
         /*

         Permet la creation d'un atelier en rentrant les différentes informations
         parametre exemple: "nom" : Presentation de Scrum "theme": conduite de projet, etc...
         */
         include 'config.php';
         error_reporting(E_ALL & ~E_NOTICE);

         if (!empty($_POST))
         {
           $nom = $_POST['titre'];
           $theme = $_POST['theme'];
           $type = $_POST['type'];
           $discipline = $_POST['disciplines'];
           $duree =$_POST["duree"];
           $capacite=$_POST["capacitee"];
           $animateur =$_POST['animateurs'];
           $adresse= $_POST['adresse'];
           $ville= $_POST['ville'];
           $codeP =$_POST["cp"];
           $zone =$_POST['zone'];
           $resume = $_POST['resume'];

           if($_POST['pv1']){
           	$public ="1";
           }
           else{
           	$public = "0";
           }
           if($_POST['pv2']){
           	$public .="1" ;
           }
           else{
           	$public .="0" ;
           }
           if($_POST['pv3']){
           	$public .="1" ;
           }
           else{
           	$public .="0" ;
           }
           if($_POST['pv4']){
           	$public .="1" ;
           }
           else{
           	$public .="0" ;
           }
           if($_POST['pv5']){
           	$public .="1" ;
           }
           else{
           	$public .="0" ;
           }
           if($_POST['pv7']){
           	$public .="1" ;
           }
           else{
           	$public .="0" ;
           }
           if($_POST['pv8']){
           	$public .="1" ;
           }
           else{
           	$public .="0" ;
           }
           if($_POST['pv9']){
           	$public .="1" ;
           }
           else{
           	$public .= "0" ;
           }

           if($_POST['a1'] && $_POST['pm1']){
           	$creneaux="3";
           }
           elseif($_POST['a1']){
           	$creneaux="1";
           }elseif($_POST['pm1']){
           	$creneaux="2";
           }
           else $creneaux ="0";
           if($_POST['a2'] && $_POST['pm2']){
           	$creneaux.="3";
           }
           elseif($_POST['a2']){
           	$creneaux.="1";
           }elseif($_POST['pm2']){
           	$creneaux.="2";
           }
           else $creneaux .="0";
           if($_POST['a3'] && $_POST['pm3']){
           	$creneaux.="3";
           }
           elseif($_POST['a3']){
           	$creneaux.="1";
           }elseif($_POST['pm3']){
           	$creneaux.="2";
           }
           else $creneaux .="0";
           if($_POST['a4'] && $_POST['pm4']){
           	$creneaux.="3";
           }
           elseif($_POST['a4']){
           	$creneaux.="1";
           }elseif($_POST['pm4']){
           	$creneaux.="2";
           }
           else $creneaux .="0";
           if($_POST['a5'] && $_POST['pm5']){
           	$creneaux.="3";
           }
           elseif($_POST['a5']){
           	$creneaux.="1";
           }elseif($_POST['pm5']){
           	$creneaux.="2";
           }
           else $creneaux.="0";
           $sql = "INSERT INTO `cdpm2`.`ateliers` (`id`, `nom`, `theme`, `type`, `discipline`, `public`, `duree`,
           										`capacite`,`animateur`,`adresse`, `ville`, `codePostal`, `zone`,
           										`creneaux`, `resume`)
           		VALUES (NULL, '$nom', '$theme', '$type', '$discipline', '$public','$duree','$capacite',
           				'$animateur','$adresse','$ville','$codeP','$zone','$creneaux','$resume');";
           		if ($res=$conn->query($sql)) { ?>
                <div class="alert alert-success col-sm-offset-2 col-sm-8">
                  Création reussie!
                </div>
                <?php
           		}
           		else{ ?>
                <div class="alert alert-danger col-sm-offset-2 col-sm-8">
                  Echec de la création, une erreur est survenue.
                </div>
                <?php
           		}
            }
         ?>
         <form class="form-horizontal col-sm-offset-2 col-sm-8" action="inscription.php" method="post">
            <div class="form-group">
               <label for="input-titre" >Titre</label>
               <input type="text" name="titre" class="form-control" id="input-titre" placeholder="Titre" required>
            </div>
            <div class="form-group">
               <label for="input-theme" >Thème</label>
               <input type="text" name="theme" class="form-control" id="input-theme" placeholder="Thème" required>
            </div>
            <div class="form-group">
               <label for="input-type" >Type</label>
               <input type="text" name="type" class="form-control" id="input-type" placeholder="Type" required>
            </div>
            <div class="form-group">
               <label for="input-creneaux" >Créneaux</label>
               <table class="table table-bordered" id="input-creneaux">
                  <tbody>
                     <tr>
                        <td></td>
                        <td>Lundi</td>
                        <td>Mardi</td>
                        <td>Mercredi</td>
                        <td>Jeudi</td>
                        <td>Vendredi</td>
                     </tr>
                     <td>Matin</td>
                     <td>
                        <div class="checkbox">
                           <label>
                           <input type="checkbox" name="a1"  value="1" aria-label="">
                           </label>
                        </div>
                     </td>
                     <td>
                        <div class="checkbox">
                           <label>
                           <input type="checkbox" name="a2" value="1" aria-label="">
                           </label>
                        </div>
                     </td>
                     <td>
                        <div class="checkbox">
                           <label>
                           <input type="checkbox" name="a3" value="1" aria-label="">
                           </label>
                        </div>
                     </td>
                     <td>
                        <div class="checkbox">
                           <label>
                           <input type="checkbox" name="a4" value="1" aria-label="">
                           </label>
                        </div>
                     </td>
                     <td>
                        <div class="checkbox">
                           <label>
                           <input type="checkbox" name="a5" value="1" aria-label="">
                           </label>
                        </div>
                     </td>
                     </tr>
                     <tr>
                        <td>Après-midi</td>
                        <td>
                           <div class="checkbox">
                              <label>
                              <input type="checkbox" name="pm1" value="1" aria-label="">
                              </label>
                           </div>
                        </td>
                        <td>
                           <div class="checkbox">
                              <label>
                              <input type="checkbox" name="pm2" value="1" aria-label="">
                              </label>
                           </div>
                        </td>
                        <td>
                           <div class="checkbox">
                              <label>
                              <input type="checkbox" name="pm3" value="1" aria-label="">
                              </label>
                           </div>
                        </td>
                        <td>
                           <div class="checkbox">
                              <label>
                              <input type="checkbox" name="pm4" value="1" aria-label="">
                              </label>
                           </div>
                        </td>
                        <td>
                           <div class="checkbox">
                              <label>
                              <input type="checkbox" name="pm5" value="1" aria-label="">
                              </label>
                           </div>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="form-group">
               <label for="input-animateurs" >Animateur(s)</label>
               <input type="text" name="animateurs" class="form-control" id="input-animateurs" placeholder="Animateur(s)" required>
            </div>
            <div class="form-group">
               <label for="input-adresse" >Adresse</label>
               <input type="text" name="adresse" class="form-control" id="input-adresse" placeholder="Adresse" required>
            </div>
            <div class="form-group">
               <label for="input-ville" >Ville</label>
               <input type="text" name="ville" class="form-control" id="input-ville" placeholder="Ville" required>
            </div>
            <div class="col-sm-5 no-margin no-padding">
               <div class="form-group">
                  <label for="input-cp" class="control-label">Code postal</label>
                  <input type="text" name="cp" class="form-control" id="input-cp" pattern="[0-9]{5}" placeholder="Code postal" required>
               </div>
            </div>
            <div class="col-sm-offset-2 col-sm-5 no-padding">
               <div class="form-group">
                  <label for="input-zone" class="control-label">Zone</label>
                  <select name="zone" class="form-control" id="input-zone">
                     <option>A</option>
                     <option>B</option>
                     <option>C</option>
                     <option>D</option>
                  </select>
               </div>
            </div>
            <div class="col-sm-5 no-margin no-padding">
               <div class="form-group">
                  <label for="input-duree" >Durée</label>
                  <div class="input-group">
                     <input  type="number" name="duree" min="1" class="form-control" id="input-duree" placeholder="Durée">
                     <div class="input-group-addon"> minutes</div>
                  </div>
               </div>
            </div>
            <div class="col-sm-offset-2 col-sm-5 no-padding">
               <div class="form-group">
                  <label for="input-capacitee">Capacitée</label>
                  <div class="input-group">
                     <input type="number" name="capacitee" min="1" class="form-control" id="input-capacitee" placeholder="Capacitée">
                     <div class="input-group-addon"> personnes</div>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label for="input-resume" >Résumé</label>
               <textarea class="form-control" name="resume" rows="5" id="input-resume" placeholder="Résumé"></textarea>
            </div>
            <div class="form-group">
               <label for="input-public">Public visé</label>
               <div class="col-sm-12" id="input-public">
                  <div class="col-sm-6">
                     <div class="input-group">
                        <div class="checkbox">
                           <label>
                           <input name="pv1" type="checkbox" value="1">
                           Primaire
                           </label>
                        </div>
                        <div class="checkbox">
                           <label>
                           <input name="pv2" type="checkbox" value="1">
                           6ème - 5ème
                           </label>
                        </div>
                        <div class="checkbox">
                           <label>
                           <input name="pv3" type="checkbox" value="1">
                           4ème - 3ème
                           </label>
                        </div>
                        <div class="checkbox">
                           <label>
                           <input name="pv4" type="checkbox" value="1">
                           2nd
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="input-group">
                        <div class="checkbox">
                           <label>
                           <input name="pv5" type="checkbox" value="1">
                           1ère
                           </label>
                        </div>
                        <div class="checkbox">
                           <label>
                           <input name="pv7" type="checkbox" value="1">
                           Terminale
                           </label>
                        </div>
                        <div class="checkbox">
                           <label>
                           <input name="pv8" type="checkbox"value="1">
                           Classes préparatoires
                           </label>
                        </div>
                        <div class="checkbox">
                           <label>
                           <input name="pv9" type="checkbox" value="1">
                           Université
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label for="input-disciplines" >Disciplines </label>
               <input type="text" name="disciplines" class="form-control" id="input-disciplines" placeholder="Disciplines" required>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-default pull-right">Valider</button>
            </div>
         </form>
      </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>
