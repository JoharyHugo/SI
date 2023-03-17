<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/styles.css"); ?>">
    <title>Plan Tiers</title>
</head>
<body>
<form action="<?php echo site_url('journau/modifierJournau'); ?>" method="post" style="margin-top: 100px;">
            <center><h1>Code Journeaux</h1></center>
            <input type="hidden" name="id" id="id" value="<?php echo $datas['id']; ?>">
            <br><br> 
            <label for="type">Type:</label>
            <label for="numero">CODE:</label>
            <input type="text" name="code" id="code" value="<?php echo $datas['Code']; ?>">
            <br><br>    
            <label for="intitule">Journeaux:</label>
            <input type="text" name="journeaux" id="journeaux" value="<?php echo $datas['Journeaux']; ?>"> 
            <br><br>
            <input type="submit" value="Modifier">
    </form>
    <a href="<?php echo site_url('journau/getAllJourneaux'); ?>">voir plus</a>
</body>
</html>