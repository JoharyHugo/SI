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
    <center><h2 style="margin-top: 50px;">Votre Journal</h2></center>
    <br>
    <hr>
<div class="container sp1" style="margin-right: 400px;">
        
        <div class="row cont" style="width: 1700px;">
        <table class="normal">
                <tr>
                    <th>Jour</th>
                    <th>Piece</th>
                    <th>Reference</th>
                    <th>Compte</th>
                    <th>Compte_Tiers</th>
                    <th>Typage</th>
                    <th>Libelle</th>
                    <th>Devise</th>
                    <th>Montant_Devise</th>
                    <th>Debit</th>
                    <th>Credit</th>
                </tr>
                <?php  for ($i=0; $i < count($reponse); $i++) { ?>
        <tr>
            <td><?php echo $reponse[$i]['date']; ?></td>
            <td><?php  echo $reponse[$i]['numeroPiece']; ?></td>
            <td><?php  echo $reponse[$i]['PieceReference']; ?></td>
            <td><?php echo $reponse[$i]['CompteGenerale']; ?></td>
            <td><?php echo $reponse[$i]['CompteTiers']; ?></td>
            <td><?php echo $reponse[$i]['Type']; ?></td>
            <td><?php echo $reponse[$i]['Libelle']; ?></td>
            <td><?php  echo $reponse[$i]['devise']; ?></td>
            <td><?php  echo $reponse[$i]['Montant']?></td> 
            <td><?php echo $reponse[$i]['debit']; ?></td>
            <td><?php echo $reponse[$i]['credit']; ?></td>       
        </tr>
        <?php }?>
        
    </table>
    <a href="<?php echo site_url("journalAchat/total1/");?>">voir total</a>        
          
            </div>
           
         
        </div>
           
</div>

  
</body>
</html>