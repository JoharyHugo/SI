<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/styles.css"); ?>">
    <title>Code Journaux</title>
</head>
<body>
<form action="<?php echo site_url('journau/newJourneau'); ?>" method="post" style="margin-top: 100px;">
            <center><h1>Code Journaux</h1></center>
            <label for="numero">Code:</label>
            <input type="text" name="code" id="code">
            <br><br>    
            <label for="intitule">Journeaux :</label>
            <input type="text" name="journau" id="journau">
            <br><br>
            <input type="submit" value="Valider">
    </form>
    <a href="<?php echo site_url('journau/getAllJournaux'); ?>">voir code Journeaux</a>
</body>
</html>