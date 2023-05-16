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
<body style="background-image: url('<?php echo base_url("assets/images/journal.jpg"); ?>'); background-repeat: no-repeat;">
<header>
      <nav>
        <ul>
          <li><a href="<?php echo site_url('journalAchat/verification');?>">voir grand livre</a></li>
          <li><a href="<?php echo site_url('journalAchat/verificationJournal');?>">voir journal a nouveau</a></li>
          <li><a href="<?php echo site_url('journalAchat/verificationJournalBalance');?>">voir la balance ecriture</a></li>
          <li><a href="<?php echo site_url('journalAchat/verificationBalance');?>">voir la balance</a></li>
          <li><a href="<?php echo site_url('journalAchat/verificationTotalAchat');?>">Journal Achat</a></li>
          <li><a href="<?php echo site_url('welcome/AchatFormulaire');?>">Saisie Journal Achat</a></li>
          <li><a href="<?php echo site_url('journalAchat/verificationTotalVente');?>">Journal vente</a></li>
          <li><a href="<?php echo site_url('journalAchat/verificationTotalBanque');?>">Journal banque</a></li>
          <li><a href="<?php echo site_url('journalAchat/exportPdf');?>">exportPdf</a></li>
          <li><a href="<?php echo site_url('saisiAchat/tableauPdf');?>">TableauPdf</a></li>
          <!--li><a href="<?php echo site_url('journalAchat/tableauPdf1');?>">TableauPdf1</a></!li-->

        </ul>
      </nav>
</header>    


<center><h2 style="margin-top: 50px;">Saisiser votre Journal</h2></center>
    <br>
    <hr>
<div class="container sp1">
        
        <div class="row cont" style="width: 1700px;">
        <table class="normal">
            <form action="<?php echo base_url("journalAchat/newJournalAchat"); ?>" method="post">
                <tr>
                    <th>Jour</th>
                    <th>Piece</th>
                    <th>Reference</th>
                    <th>Compte</th>
                    <th>Compte_Tiers</th>
                    <th>Typage</th>
                    <th>Libelle</th>
                    <th>Devise</th>
                    <th>Montant_Devise</th>
                    <th>Debit</th>
                    <th>Credit</th>
                </tr>
                <tr>
                    <td><select name="jour" id="">
                        <?php for ($i=0; $i <33 ; $i++) {  ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                    </select></td>
                    <td><input type="number" name="piece"></td>
                    <td><input type="text" name="reference"></td>
                    <td><input type="number" name="compte1"></td>
                    <td><input type="text" name="compte2"></td>
                    <td><select name="type" id="type">
                        <option value="Vente">Vente</option>
                        <option value="Banque">Banque</option>
                    </select></td>
                    <td><input type="text" name="libelle"></td>
                    <td><select name="devise" id="devise">
                        <option value="Euro">Euro</option>
                        <option value="Ariary">Ariary</option>
                        <option value="Dollar">Dollar</option>
                    </select></td>
                    <td><input type="number" name="montant"></td>
                    <td><input type="number" name="debit"></td>
                    <td><input type="number" name="credit"></td>
                </tr>
               </table>
          
              <center><input type="submit" value="Valider" id="validation"></center>
               </form>
            </div>
           
            <div class="col-md-6" >
            </div>
        </div>    
</div>
</body>
</html>