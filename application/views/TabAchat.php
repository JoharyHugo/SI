<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/achat.css"); ?>">
    <title>Achat</title>
</head>
<body>
<div id="wrapper">
  <h1>Tous vos Achat</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Libelle</span></th>
        <th><span>Analytique</span></th>
      </tr>
    </thead>
    <tbody>
        <?php for ($i=0; $i < count($achat) ; $i++) {  ?>
      <tr>
        <td class="lalign"><?php echo $achat[$i]['Libelle']; ?></td>
        <td><a href="<?php echo site_url("Achat/formulaireAchatdetail?id=".$achat[$i]['idAchat']); ?>">Valider</a></td>
        
      </tr>
     <?php }?>
    </tbody>
  </table>
 </div> 
 <script>
    $(function(){
  $('#keywords').tablesorter(); 
});
 </script>
</body>
</html>