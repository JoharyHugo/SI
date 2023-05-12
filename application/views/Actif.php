<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/actif.css"); ?>">
    <title>Actif</title>
</head>
<!--body style="background-image: url('<?php// echo base_url("assets/images/img2.jpg"); ?>'); background-size: cover;;background-repeat: no-repeat; "-->
<center><h2 style="margin-top: 50px;">COMPTE ACTIF</h2></center>
   <!--center> <p>(par nature)</p>
    <p>Periode du ............... AU ................</p>
        <p>Unite monetaire:ARIARY</p></!--center-->
    <br>
<body>
   <div class="container">
    <table>
        <thead>
          <tr>
            <th >Actif</th>
            <th>Compte</th>
            <th colspan="3">Date Fin exercice N</th>
            <th>Date Fin exercice N-1</th>
          </tr>
          <tr>
            <th></th>
            <th></th>
            <th>Brut</th>
            <th>Amort/Prov</th>
            <th>Net</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ACTIF NON COURANT</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <?php foreach ($data['reponse'] as $row) { ?>
          <tr>
            <td>IMMOBILISATIONS INCORPORELLES</td>
            <td>20</td>
            <td><?php echo $row['brut']; ?></td>
            <td><?php  echo $row['amortissement']; ?></td>
            <td><?php  echo $row['net']; ?></td>
            <td></td>
          </tr>
          <?php } ?>
          
          <?php foreach ($data1['reponse1'] as $row1) { ?>
          <tr>
            <td>IMMOBILISATIONS CORPORELLES</td>
            <td>21</td>
            <td><?php  echo $row1['brut']; ?></td>
            <td><?php echo $row1['amortissement']; ?></td>
            <td><?php  echo $row1['net']; ?></td>
            <td></td>
          </tr>
          <?php } ?>
          <tr>
              <td>IMMOBILISATIONS BIOLOGIQUES</td>
              <td>22</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <?php foreach ($data2['reponse2'] as $row2) { ?>
          <tr>
            <td>IMMOBILISATIONS CORPORELLES</td>
            <td>23</td>
            <td><?php  echo $row2['brut']; ?></td>
            <td><?php echo $row2['amortissement']; ?></td>
            <td><?php  echo $row2['net']; ?></td>
            <td></td>
          </tr>
          <?php } ?>
          <tr>
            <td>IMMOBILISATIONS FINANCIERES</td>
            <td>25</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          
          <tr>
            <td>IMPOTS DIFFERES</td>
            <td>13</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td colspan="6">Total Actif Non Courants</td>
          </tr>
          <tr>
            <td colspan="6"> Actifs  Courants</td>
          </tr>
          <?php foreach ($data3['reponse3'] as $row3) { ?>
          <tr>
            <td>STOCKS EN COURS</td>
            <td>3</td>
            <td><?php  echo $row3['brut']; ?></td>
            <td><?php echo $row3['amortissement']; ?></td>
            <td><?php  echo $row3['net']; ?></td>
            <td></td>
          </tr>
          <?php }  ?>
          <?php foreach ($data4['reponse4'] as $row3) { ?>
          <tr>
            <td>CREANCES ET EMPLOIS ASSIMILES</td>
            <td>4...</td>
            <td><?php  echo $row3['brut']; ?></td>
            <td><?php echo $row3['amortissement']; ?></td>
            <td><?php  echo $row3['net']; ?></td>
            <td></td>
          </tr>
          <?php } ?>
          
          <?php foreach ($data4['reponse4'] as $row3) { ?>
          <tr>
            <td>  Clients et autres debiteurs</td>
            <td>41</td>
            <td><?php  echo $row3['brut']; ?></td>
            <td><?php echo $row3['amortissement']; ?></td>
            <td><?php  echo $row3['net']; ?></td>
            <td></td>
          </tr>
          <?php } ?>
          
          <tr>
            <td>Impots /benefice</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Autres creances et actifs assimiles</td>
            <td>4.....</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          
          <?php foreach ($data6['reponse6'] as $row3) { ?>
          <tr>
            <td>TRESORERIE ET EQUIVALENTS TRESORERIE</td>
            <td>5.....</td>
            <td><?php  echo $row3['brut']; ?></td>
            <td><?php echo $row3['amortissement']; ?></td>
            <td><?php  echo $row3['net']; ?></td>
            <td></td>
          </tr>
          <?php } ?>
          <tr>
            <td colspan="6">Total Actif  Courants</td>
          </tr>
          <tr>
            <td colspan="6">Total  des Actifs</td>
          </tr>
        </tbody>
      </table>
   </div>
      
</!--body>
</html>