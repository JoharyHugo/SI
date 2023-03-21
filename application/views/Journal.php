<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <table border="5px">
        <th>CODE</th>
        <th>Journaux</th>
        <th></th>
        <th></th>
        <?php for ($i=0; $i < count($reponse); $i++) { ?>
        <tr>
            <td><?php echo $reponse[$i]['Code']; ?></td>
            <td><?php echo $reponse[$i]['Journeaux']; ?></td>
            <td><a href="<?php echo site_url("/journau/getOneJournau/".$reponse[$i]['id']); ?>">modifier</a></td>
            <td><a href="<?php echo site_url("/journau/deleteJournau/".$reponse[$i]['id']); ?>">supprimer</a></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>