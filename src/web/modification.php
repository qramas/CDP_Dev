<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Circuit Scientifique Bordelais - Modification Atelier</title>
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
                     <li><a href="#">Lister les ateliers</a></li>
                     <li><a href="#">Inscrire un atelier</a></li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>
         <h1 class="col-sm-offset-2 col-sm-8">Modifier un atelier</h1>
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
                  Modification reussie!
                </div>
                <?php
           		}
           		else{ ?>
                <div class="alert alert-danger col-sm-offset-2 col-sm-8">
                  Echec de la modification, une erreur est survenue.
                </div>
                <?php
           		}
            }
            elseif (isset($_GET['id'])){
              $sql =	"SELECT * FROM `ateliers` where `id`=".$_GET['id'];
              $res=$conn->query($sql);
              $donnees = $res->fetch_assoc();
              echo substr($donnees['creneaux'], 1, 2);
            }
             else {
               header('Location: liste.php');
               die();
             }
         ?>
         <form class="form-horizontal col-sm-offset-2 col-sm-8" action="modification.php" method="post">

            <div class="form-group">
               <label for="input-titre" >Titre</label>
               <input type="text" name="titre" class="form-control" id="input-titre" placeholder="Titre" value="<?php echo $donnees['nom']; ?>" required>
            </div>
            <div class="form-group">
               <label for="input-theme" >Thème</label>
               <input type="text" name="theme" class="form-control" id="input-theme" placeholder="Thème" value="<?php echo $donnees['theme']; ?>" required>
            </div>
            <div class="form-group">
               <label for="input-type" >Type</label>
               <input type="text" name="type" class="form-control" id="input-type" placeholder="Type" value="<?php echo $donnees['type']; ?>" required>
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
                           <input type="checkbox" name="a1"  value="1" aria-label="" <?php if(substr($donnees['creneaux'], 0, 1)=='3' or substr($donnees['creneaux'], 0, 1)=='1') {echo 'checked';} ?>>
                           </label>
                        </div>
                     </td>
                     <td>
                        <div class="checkbox">
                           <label>
                           <input type="checkbox" name="a2" value="1" aria-label="" <?php if(substr($donnees['creneaux'], 1, 1)=='3' or substr($donnees['creneaux'], 1, 1)=='1') {echo 'checked';} ?>>
                           </label>
                        </div>
                     </td>
                     <td>
                        <div class="checkbox">
                           <label>
                           <input type="checkbox" name="a3" value="1" aria-label="" <?php if(substr($donnees['creneaux'], 2, 1)=='3' or substr($donnees['creneaux'], 2, 1)=='1') {echo 'checked';} ?>>
                           </label>
                        </div>
                     </td>
                     <td>
                        <div class="checkbox">
                           <label>
                           <input type="checkbox" name="a4" value="1" aria-label="" <?php if(substr($donnees['creneaux'], 3, 1)=='3' or substr($donnees['creneaux'], 3, 1)=='1') {echo 'checked';} ?>>
                           </label>
                        </div>
                     </td>
                     <td>
                        <div class="checkbox">
                           <label>
                           <input type="checkbox" name="a5" value="1" aria-label="" <?php if(substr($donnees['creneaux'], 4, 1)=='3' or substr($donnees['creneaux'], 4, 1)=='1') {echo 'checked';} ?>>
                           </label>
                        </div>
                     </td>
                     </tr>
                     <tr>
                        <td>Après-midi</td>
                        <td>
                           <div class="checkbox">
                              <label>
                              <input type="checkbox" name="pm1" value="1" aria-label="" <?php if(substr($donnees['creneaux'], 0, 1)=='3' or substr($donnees['creneaux'], 0, 1)=='2') {echo 'checked';} ?>>
                              </label>
                           </div>
                        </td>
                        <td>
                           <div class="checkbox">
                              <label>
                              <input type="checkbox" name="pm2" value="1" aria-label="" <?php if(substr($donnees['creneaux'], 1, 1)=='3' or substr($donnees['creneaux'], 1, 1)=='2') {echo 'checked';} ?>>
                              </label>
                           </div>
                        </td>
                        <td>
                           <div class="checkbox">
                              <label>
                              <input type="checkbox" name="pm3" value="1" aria-label="" <?php if(substr($donnees['creneaux'], 2, 1)=='3' or substr($donnees['creneaux'], 2, 1)=='2') {echo 'checked';} ?>>
                              </label>
                           </div>
                        </td>
                        <td>
                           <div class="checkbox">
                              <label>
                              <input type="checkbox" name="pm4" value="1" aria-label="" <?php if(substr($donnees['creneaux'], 3, 1)=='3' or substr($donnees['creneaux'], 3, 1)=='2') {echo 'checked';} ?>>
                              </label>
                           </div>
                        </td>
                        <td>
                           <div class="checkbox">
                              <label>
                              <input type="checkbox" name="pm5" value="1" aria-label="" <?php if(substr($donnees['creneaux'], 4, 1)=='3' or substr($donnees['creneaux'], 4, 1)=='2') {echo 'checked';} ?>>
                              </label>
                           </div>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="form-group">
               <label for="input-animateurs" >Animateur(s)</label>
               <input type="text" name="animateurs" class="form-control" id="input-animateurs" placeholder="Animateur(s)" value="<?php echo $donnees['animateur']; ?>" required>
            </div>
            <div class="form-group">
               <label for="input-adresse" >Adresse</label>
               <input type="text" name="adresse" class="form-control" id="input-adresse" placeholder="Adresse" value="<?php echo $donnees['adresse']; ?>" required>
            </div>
            <div class="form-group">
               <label for="input-ville" >Ville</label>
               <input type="text" name="ville" class="form-control" id="input-ville" placeholder="Ville" value="<?php echo $donnees['ville']; ?>"  required>
            </div>
            <div class="col-sm-5 no-margin no-padding">
               <div class="form-group">
                  <label for="input-cp" class="control-label">Code postal</label>
                  <input type="text" name="cp" class="form-control" id="input-cp" pattern="[0-9]{5}" placeholder="Code postal" value="<?php echo $donnees['codePostal']; ?>" required>
               </div>
            </div>
            <div class="col-sm-offset-2 col-sm-5 no-padding">
               <div class="form-group">
                  <label for="input-zone" class="control-label">Zone</label>
                  <select name="zone" class="form-control" id="input-zone">
                     <option <?php if(strcasecmp ($donnees['zone'],'A')==0) {echo 'selected';}; ?>>A</option>
                     <option <?php if(strcasecmp ($donnees['zone'],'B')==0) {echo 'selected';}; ?>>B</option>
                     <option <?php if(strcasecmp ($donnees['zone'],'C')==0) {echo 'selected';}; ?>>C</option>
                     <option <?php if(strcasecmp ($donnees['zone'],'D')==0) {echo 'selected';}; ?>>D</option>
                  </select>
               </div>
            </div>
            <div class="col-sm-5 no-margin no-padding">
               <div class="form-group">
                  <label for="input-duree" >Durée</label>
                  <div class="input-group">
                     <input  type="number" name="duree" min="1" class="form-control" id="input-duree" placeholder="Durée" value="<?php echo $donnees['duree']; ?>">
                     <div class="input-group-addon"> minutes</div>
                  </div>
               </div>
            </div>
            <div class="col-sm-offset-2 col-sm-5 no-padding">
               <div class="form-group">
                  <label for="input-capacitee">Capacitée</label>
                  <div class="input-group">
                     <input type="number" name="capacitee" min="1" class="form-control" id="input-capacitee" placeholder="Capacitée" value="<?php echo $donnees['capacite']; ?>">
                     <div class="input-group-addon"> personnes</div>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label for="input-resume" >Résumé</label>
               <textarea class="form-control" name="resume" rows="5" id="input-resume" placeholder="Résumé"><?php echo $donnees['resume']; ?></textarea>
            </div>
            <div class="form-group">
               <label for="input-public">Public visé</label>
               <div class="col-sm-12" id="input-public">
                  <div class="col-sm-6">
                     <div class="input-group">
                        <div class="checkbox">
                           <label>
                           <input name="pv1" type="checkbox" value="1" <?php if(substr($donnees['public']."", 0, 1)=='1') {echo 'checked';} ?>>
                           Primaire
                           </label>
                        </div>
                        <div class="checkbox">
                           <label>
                           <input name="pv2" type="checkbox" value="1" <?php if(substr($donnees['public']."", 1, 1)=='1') {echo 'checked';} ?>>
                           6ème - 5ème
                           </label>
                        </div>
                        <div class="checkbox">
                           <label>
                           <input name="pv3" type="checkbox" value="1" <?php if(substr($donnees['public']."", 2, 1)=='1') {echo 'checked';} ?>>
                           4ème - 3ème
                           </label>
                        </div>
                        <div class="checkbox">
                           <label>
                           <input name="pv4" type="checkbox" value="1" <?php if(substr($donnees['public']."", 3, 1)=='1') {echo 'checked';} ?>>
                           2nd
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="input-group">
                        <div class="checkbox">
                           <label>
                           <input name="pv5" type="checkbox" value="1" <?php if(substr($donnees['public']."", 4, 1)=='1') {echo 'checked';} ?>>
                           1ère
                           </label>
                        </div>
                        <div class="checkbox">
                           <label>
                           <input name="pv7" type="checkbox" value="1" <?php if(substr($donnees['public']."", 5, 1)=='1') {echo 'checked';} ?>>
                           Terminale
                           </label>
                        </div>
                        <div class="checkbox">
                           <label>
                           <input name="pv8" type="checkbox"value="1" <?php if(substr($donnees['public']."", 6, 1)=='1') {echo 'checked';} ?>>
                           Classes préparatoires
                           </label>
                        </div>
                        <div class="checkbox">
                           <label>
                           <input name="pv9" type="checkbox" value="1" <?php if(substr($donnees['public']."", 8, 1)=='1') {echo 'checked';} ?>>
                           Université
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label for="input-disciplines" >Disciplines </label>
               <input type="text" name="disciplines" class="form-control" id="input-disciplines" placeholder="Disciplines" value="<?php echo $donnees['discipline']; ?>" required>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-default pull-right" >Valider</button>
            </div>
         </form>
      </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>
