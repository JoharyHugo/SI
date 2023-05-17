
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Center</title>
</head>
<body>
    <?php for ($i=0; $i <count($info) ; $i++) {  ?>
       <h5><?php echo $info[$i][0]['CentreStructurel'] ; ?></h5><br> <br>
       <table border="1">
       <tr>
                    <th>CentreOperationel</th>
                    <th>CoutDirect</th>
                    <th>Cle</th>
                    <th><?php echo $info[$i][0]['CentreStructurel'] ; ?></th>
                    <th>CoutTotal</th>
                </tr>
       <?php for ($j=0; $j <count($info[$i]) ; $j++) { ?>
            
               
                <tr>
                    <td><?php echo $info[$i][$j]['CentreOperationel'] ; ?></td>
                    <td><?php echo $info[$i][$j]['CoutDirect'] ; ?></td>
                    <td><?php echo $info[$i][$j]['Cle'] ; ?></td>
                    <td><?php echo $info[$i][$j]['CentreStructure'] ; ?></td>
                    <td><?php echo $info[$i][$j]['CoutTotal'] ; ?></td>
                </tr>
           
     <?php  } ?>
     </table>
  <?php  } ?>
</body>
</html>