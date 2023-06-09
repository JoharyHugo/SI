<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/GrandLivre.css"); ?>">
    <title>Balance</title>
</head>

<body>
<h2>Balance</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Code Journal</th>
            <th>Date</th>
            <th>Numero Piece</th>
            <th>Reference Piece</th>
            <th>Numero Compte</th>
            <th>Libellé Ecriture</th>
            <th>Debit</th>
            <th>Credit</th>
        </tr>
        </thead>
        <tbody>
        <?php  for ($i=0; $i < count($reponse); $i++) { ?>
        <tr>
            <td><?php  echo $reponse[$i]['PieceReference']; ?></td>
            <td><?php echo $reponse[$i]['date']; ?></td>
            <td><?php  echo $reponse[$i]['numeroPiece']; ?></td>
            <td><?php  echo $reponse[$i]['PieceReference']; ?></td>
            <td><?php echo $reponse[$i]['CompteTiers']; ?></td>
            <td><?php echo $reponse[$i]['Libelle']; ?></td>
            <td><?php echo $reponse[$i]['debit']; ?></td>
            <td><?php echo $reponse[$i]['credit']; ?></td>       
        </tr>
        <?php }?>

        <tbody>
    </table>
    
    <a href="<?php echo site_url("journalAchat/total3/");?>">voir total</a> 
</div>
</body>
</html>