<!DOCTYPE html>
<html>
<head>
    <title>Exemple de formulaire</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
}

h1 {
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
    max-width: 400px;
    margin: 0 auto;
}

label {
    margin-bottom: 5px;
}

select, input {
    margin-bottom: 10px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

</style>
<body>
    <h1>Formulaire</h1>
    
    <form action="<?php echo site_url("Centre/insertionCentredetail"); ?>" method="get">
        <label for="select1">Centre Structurel :</label>
        <select id="select1" name="idstructurel">
            <?php for ($i=0; $i <count($centre) ; $i++) {  ?>
            <option value="<?php echo $centre[$i]['idCentre'];?>"><?php echo $centre[$i]['NomCentre'];?></option>
            <?php }?>
        </select>
        
        <label for="select2">Centre Operationnel :</label>
        <select id="select2" name="idoperationel">
        <?php for ($i=0; $i <count($centre) ; $i++) {  ?>
            <option value="<?php echo $centre[$i]['idCentre'];?>"><?php echo $centre[$i]['NomCentre'];?></option>
            <?php } ?>
        </select>
        
        <label for="numberInput">Cle:</label>
        <input type="number" id="numberInput" step="0.01" name="cle">
        
        <button type="submit">Validation</button>
    </form>
</body>
</html>
