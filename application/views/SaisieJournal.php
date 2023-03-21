<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
    <title>Journal</title>
</head>
<body>
<div class="container">
        <div class="row cont" style="width: 1700px;">
            <div class="col-md-6" >
                <h2 style="margin-left: 250px;">Saisiser votre Journal</h2>
               <form action="<?php echo site_url('journalAchat/newJournalAchat');?>" method="post">
               <div class="container sp1">
                    <div class="row cont ">
                        <div class="col-md-4">
                        <label for="jour">jour:</label>
                        <select name="jour" id="jour">
                            <?php for ($i=1; $i <33 ; $i++) { ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                        </select>
                        </div>
                        <div class="col-md-4" style="margin-right: -81px;">
                            <label for="piece">Piece:</label>
                            <input type="number" name="piece" id="piece">
                        </div>
                        <div class="col-md-4">
                            <label for="reference">Reference piece:</label>
                            <input type="text" name="reference" id="reference">
                        </div>
                    </div>
                </div>
                 
                 <div class="container sp1">
                    <div class="row cont ">
                        <div class="col-md-4" >
                        <label for="compte1">Compte:</label>
                        <input type="number" name="compte1" id="compte1">
                        </div>
                        <div class="col-md-4" style="margin-right: -13px;">
                        <label for="compte2">CompteTiers:</label>
                        <input type="text" name="compte2" id="compte2">
                        </div>
                        <div class="col-md-4">
                            <label for="libelle">libelle:</label>
                            <input type="text" name="libelle" id="libelle">
                        </div>
                    </div>
                </div>

                <div class="container sp1">
                    <div class="row cont ">
                        <div class="col-md-4">
                        <label for="devise">devise:</label>
                        <select name="devise" id="devise">
                        <option value="devise">Votre Devise</option>
                            <option value="Dollar">Dollar</option>
                            <option value="Euro">Euro</option>
                               
                        </select>
                        </div>
                        <div class="col-md-4">
                            <label for="Montant">Montant:</label>
                            <input type="number" name="montant" id="montant">
                        </div>
                        <div class="col-md-4">
                            <label for="debit">Debit</label>
                            <input type="number" name="debit" id="debit">
                        </div>
                    </div>
                </div>
                <div class="container sp1">
                    <div class="row cont ">
                       <div class="col-md-12" style="margin-left: 270px;">
                            <label for="credit">Credit</label>
                            <input type="number" name="credit" id="credit">
                        </div>
                        <div class="col-md-4">
                            <label for="debit">Type</label>
                            <input type="text" name="type" id="type">
                        </div>
                    </div>
                </div>
                <input type="submit" value="valider">
               </form>
            </div>
           
            <div class="col-md-6" >
            <table class="normal" border="1">
                <tr>
                    <th>Numero de Compte</th>
                    <th>Nom de Compte</th>
                </tr>
                <tr>
                    <td>401</td>
                    <td>Fournisseur</td>
                </tr>
              </table>  
            </div>
        </div>
           
</div>

  
<a href="<?php echo site_url('welcome/grandLivre');?>">voir grand livre</a>
    <br/>
    <br/>
    <a href="<?php echo site_url('welcome/balance');?>">voir la balance</a>
    <br/>
    <br/>
    <a href="<?php echo site_url('journalAchat/verification');?>">validation journal</a>
</body>
</html>