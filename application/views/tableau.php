<!doctype html>
<html lang="en">
  <head>
  	<title>Plan Comptable</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url("assets/css/styled.css"); ?>">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Informations de tous les societes</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">

              			<th>Nom</th>
        				<th>Objet</th>
                        <th>Siege</th>
                       <th>Adresse</th>
                       <th>Nom Dirigeant</th>
                       <th>Logo</th>
                       <th>Num_Identification_Fiscal</th>
                       <th>Num_Registre_Commerce</th>
                       <th>Num_Statistique</th>
                       <th>Status</th>
                       <th>Date_Debut_exercice</th>
                       <th>Devise_Compte</th>
                       <th>Devise_Equivalence</th>
                       <th></th>
                       <th></th>
                       <?php for ($i=0; $i < count($reponse); $i++) { ?>
						<tbody>
						<tr>
                        <td><?php echo $reponse[$i]['Date_Debut_exercice']; ?></td>
                        <td><?php echo $reponse[$i]['Nom']; ?></td>
                        <td><?php echo $reponse[$i]['Objet']; ?></td>
                        <td><?php echo $reponse[$i]['Siege']; ?></td>
                        <td><?php echo $reponse[$i]['Adresse']; ?></td>
                        <td><?php echo $reponse[$i]['Nom_dirigeant']; ?></td>
                        <td><?php echo $reponse[$i]['Logo']; ?></td>
                        <td><?php echo $reponse[$i]['Num_Identification_Fiscal']; ?></td>
                        <td><?php echo $reponse[$i]['Num_Registre_Commerce']; ?></td>
                        <td><?php echo $reponse[$i]['Num_Statistique']; ?></td>
                        <td><?php echo $reponse[$i]['Status']; ?></td>
                        <td><?php echo $reponse[$i]['Devise_Compte']; ?></td>
                        <td><?php echo $reponse[$i]['Devise_Equivalence']; ?></td>
                        
                        <td><a href="<?php echo site_url("formulaire_entreprise/getOneInfo/".$reponse[$i]['id']); ?>">modifier</a></td>
                           <td><a href="<?php echo site_url("/formulaire_entreprise/getOneInfo/".$reponse[$i]['id']); ?>">supprimer</a></td>
                    </tr>
                   <?php }?>
				   </thead>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/popper.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/main2.js"); ?>"></script>

	</body>
</html>

