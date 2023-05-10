<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/styles.css"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url("Achat/insertCentreCharge") ?>" method="post">
    <label for="centre">Centre:</label>
       <select name="centre" id="centre">
        <?php for ($i=0; $i <count($centre) ; $i++) {  ?>
        <option value="<?php echo $centre[$i]['idCentre']; ?>"><?php echo $centre[$i]['NomCentre']; ?></option>
        <?php } ?>
       </select>
        <br><br>
        <label for="pourcentage">pourcentage:</label>
        <input type="number" name="pourcentage" id="pourcentage">
        <br><br>
        <input type="hidden" name="idAchat" value="<?php echo $idAchat; ?>">
        <input type='submit' value='Valider' >
    </form>
</body>
</html>