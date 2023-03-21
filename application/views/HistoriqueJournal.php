<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <table border="5px">
        <th>date</th>
        <th>numeroPiece</th>
        <th>PieceReference</th>
        <th>CompteGenerale</th>
        <th>CompteTiers</th>
        <th>Libelle</th>
        <th>debit</th>
        <th>credit</th>
        <th>devise</th>
        <th>Montant</th>
        <?php  for ($i=0; $i < count($reponse); $i++) { ?>
        <tr>
            <td><?php echo $reponse[$i]['date']; ?></td>
            <td><?php  echo $reponse[$i]['numeroPiece']; ?></td>
            <td><?php  echo $reponse[$i]['PieceReference']; ?></td>
            <td><?php echo $reponse[$i]['CompteGenerale']; ?></td>
            <td><?php echo $reponse[$i]['CompteTiers']; ?></td>
            <td><?php echo $reponse[$i]['Libelle']; ?></td>
            <td><?php echo $reponse[$i]['debit']; ?></td>
            <td><?php echo $reponse[$i]['credit']; ?></td>
            <td><?php  echo $reponse[$i]['devise']; ?></td>
            <td><?php  echo $reponse[$i]['Montant']?></td>        
        </tr>
        <?php }?>
    </table>
    <a href="<?php echo site_url("journalAchat/total");?>">voir total</a>
</body>
</html>