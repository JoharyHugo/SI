<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/actif.css"); ?>">
    <title>Passif</title>
</head>
<!--body style="background-image: url('<?php //echo base_url("assets/images/img2.jpg"); ?>'); background-size: cover;;background-repeat: no-repeat; "-->
<!--center><h2 style="margin-top: 50px;">COMPTE PASSIF</h2></!--center>
   <center> <p>(par nature)</p>
    <p>Periode du ............... AU ................</p>
        <p>Unite monetaire:ARIARY</p></center>
    <br-->
<body>
   <div class="container">
    <table>
    <thead>
          <tr>
            <th >Passif</th>
            <th></th>
            <th>Date Fin exercice N</th>
            <th>Date Fin exercice N-1</th>
          </tr>
          <tr>
            <th></th>
            <th>Compte</th>
            <th>Montant</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
           <tr>
            <td colspan="4">CAPITAUX PROPRES</td>
          </tr>
          
          <?php foreach ($data['reponse'] as $row) { ?>
          <tr>
            <td>Capital emis</td>
            <td>10</td>
            <td><?php echo $row['brut']; ?></td>
            <td></td>
          </tr>
          <?php } ?>
          <?php foreach ($data1['reponse1'] as $row) { ?>
          <tr>
            <td>Reserves legales</td>
            <td>11</td>
            <td><?php echo $row['brut']; ?></td>
            <td></td>
          </tr>
          <?php } ?>
          
          <?php foreach ($data2['reponse2'] as $row) { ?>
          <tr>
            <td>Resultat en instance d'affectation</td>
            <td>128</td>
            <td><?php echo $row['brut']; ?></td>
            <td></td>
          </tr>
          <?php } ?>

          <tr>
            <td>Resultat net</td>
            <td>120</td>
            <td></td>
            <td></td>
          </tr>
          
          <?php foreach ($data1['reponse1'] as $row) { ?>
          <tr>
            <td>Autres capitaux propres</td>
            <td>11</td>
            <td><?php echo $row['brut']; ?></td>
            <td></td>
          </tr>
          <?php } ?>
          <tr>
            <td colspan="4">TOTAL DES CAPITAUX PROPRES</td> <!-- balise Span + style=float:right-->
          </tr>
          <tr>
            <td colspan="4">PASSIF NON COURANTS</td> <!-- balise Span + style=float:right-->
          </tr>
          <tr>
            <td>Impots differes</td>
            <td>13</td>
            <td></td>
            <td></td>
          </tr>
          
          <?php foreach ($data3['reponse3'] as $row) { ?>
          <tr>
            <td>Emprunts/dettes a LMT part+1 an</td>
            <td>161</td>
            <td><?php echo $row['brut']; ?></td>
            <td></td>
          </tr>
          <?php } ?>
          <tr>
            <td colspan="4">Total Passif  Courants</td>
          </tr>
          <tr>
            <td colspan="4">PASSIFS COURANTS</td>
          </tr>
          
          <?php foreach ($data3['reponse3'] as $row) { ?>
          <tr>
            <td>Emprunts / dettes a LMT part -1 an</td>
            <td>161</td>
            <td><?php echo $row['brut']; ?></td>
            <td></td>
          </tr>
          <?php } ?>
          
          <?php foreach ($data4['reponse4'] as $row) { ?>
          <tr>
            <td>dettes court terme</td>
            <td>165</td>
            <td><?php echo $row['brut']; ?></td>
            <td></td>
          </tr>
          <?php }?>
          <?php foreach ($data5['reponse5'] as $row) { ?>
          <tr>
            <td>Fournisseurs et comptes rattaches</td>
            <td>4</td>
            <td><?php echo $row['brut']; ?></td>
            <td></td>
          </tr>
          <?php } ?>
          
          <?php foreach ($data6['reponse6'] as $row) { ?>
          <tr>
            <td>Avances recues des clients</td>
            <td>4</td>
            <td><?php echo $row['brut']; ?></td>
            <td></td>
            
          </tr>
          <?php } ?>
          
          <?php foreach ($data7['reponse7'] as $row) { ?>
          <tr>
            <td>Autres dettes</td>
            <td>4</td>            
            <td><?php echo $row['brut']; ?></td>
            <td></td>
            
          </tr>
          <?php } ?>
          
          <?php foreach ($data8['reponse8'] as $row) { ?>
        <tr>
            <td>Compte de tresorerie</td>
            <td>5</td>
            <td><?php echo $row['brut']; ?></td>
            <td></td>
            
        </tr>
        <?php } ?>
          <tr>
            <td colspan="4">Total  des Passifs</td>
          </tr>
          <tr>
            <td colspan="4">TOTAL DES CAPITAUX PROPRES ET PASSIFS</td>
          </tr>
        </tbody>
      </table>
   </div>
      
</!--body>
</html>