<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
    <title>Journal</title>
</head>
<body style="background-image: url('<?php echo base_url("assets/images/img2.jpg"); ?>'); background-size: cover;;background-repeat: no-repeat; ">
    <center><h2 style="margin-top: 50px;">Votre Journal Achat</h2></center>
    <br>
    <hr>
    <?php // echo $total ; ?>
<div class="container sp1" style="margin-right: 400px;">
        
        <div class="row cont" style="width: 1700px;">
        <table class="normal">
                <tr>
                    <th>Jour</th>
                    <th>Piece</th>
                    <th>Reference</th>
                    <th>Compte</th>
                    <th>Compte_Tiers</th>
                    <th>Libelle</th>
                    <th>Prix</th>
                    <th>Quantite</th>
                    <th>Debit</th>
                    <th>Credit</th>
                </tr>
                <?php foreach ($data['achat'] as $row) { ?>         
        <tr>
            <td><?php echo $row['date']; ?></td>
            <td><?php  echo $row['numeroPiece']; ?></td>
            <td><?php  echo $row['ref_piece']; ?></td>
            <td><?php echo $row['compte']; ?></td>
            <td><?php echo $row['tiers']; ?></td>
            <td><?php echo $row['Libelle']; ?></td>
            <td><?php  echo $row['prixUnitaire']; ?></td>
            <td><?php  echo $row['quantite'];?></td>
            <td><?php  echo $row['debit'];?></td>
            <td><?php echo $row['credit']; ?> </td>
        </tr>
        <?php }?>
    </table>
    <a href="<?php echo site_url("saisiAchat/total1/");?>">voir total</a>
    <a href="<?php echo site_url("welcome/AchatFormulaire/");?>">retour</a>        
          
            </div>
           
         
        </div>     
</div>

  
</body>
</html>