<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Total du compte</h3>
<?php  for ($i=0; $i < count($journal); $i++) { ?>

        <p>Total debit= <?php  echo $journal[$i]['totalDebit'];?></p>
        <p>Total credit=<?php echo $journal[$i]['totalCredit'];?></p>
<?php }?>
</body>
</html>