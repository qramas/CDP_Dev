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
                     <li class="active"><a href="#">Lister les ateliers<span class="sr-only">(current)</span></a></li>
                     <li><a href="#">Inscrire un atelier</a></li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>
         <h1 class="col-sm-offset-2 col-sm-8">Liste des atelier</h1>
         <div class="col-sm-offset-2 col-sm-8">
         <table class="table table-striped liste-ateliers">
           <tbody>
           <tr>
           <th>Titre</th>
           <th>Type</th>
           <th>Durée</th>
           <th class="text-center">Capacité</th>
           <th class="text-center">Zone</th>
           <th class="text-center">Modifier</th>
           </tr>
           <?php
           include 'config.php';

           $sql =	"SELECT * FROM `ateliers`";
               if ($res=$conn->query($sql)) {
                 while($donnees = $res->fetch_assoc()){ ?>

               <tr id ="atelier-<?php echo $donnees['id']; ?>">
               <td><?php echo $donnees['nom']; ?></td>
               <td><?php echo $donnees['type']; ?></td>
               <td><?php echo $donnees['duree']; ?>min</td>
               <td class="text-center"><?php echo $donnees['capacite']; ?></td>
               <td class="text-center"><?php echo $donnees['zone']; ?></td>
               <td class="text-center"><a href="modification.pdp?id=<?php echo $donnees['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
               </tr>

           <?php
                   }
                }
                else{
                  echo "Error: " . $sql . mysqli_error($conn) . $id.$r[0];
                }
             ?>
         </tbody>
        </table>
      </div>
      </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>
