<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/styles.css"); ?>">
    <title>Document</title>
</head>

<body>
<form action="#" method="post">
  <div>
    
    <div class="radio-inputs">
    <label for="nature">Nature Charge:</label>
     <?php for ($i=0; $i <count($nature) ; $i++) {  ?>
      <label>
        <input type="radio" name="nature" id="nature" value="<?php echo $nature[$i]['idNatureCharge']; ?>">
        <?php echo $nature[$i]['NatureCharge']; ?>
      </label>
      <?php } ?>
    </div>
  </div>
  <div>
    <label for="type">Type Charge:</label>
    <select name="type" id="type">
     <?php for ($i=0; $i <count($type) ; $i++) { ?>
        <option value="<?php echo $type[$i]['idtypeCharge'] ?>"><?php echo $type[$i]['Charge'] ?></option>
        <?php } ?>
    </select>
  </div>
  <div>
    <input type="hidden" name="idAchat" value="<?php echo $info ['idAchat']; ?>">
    
  </div>
  <input type="submit" value="Valider">
</form>

</body>
</html>