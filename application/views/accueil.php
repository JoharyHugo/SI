<!DOCTYPE html>
<html>
  <head>
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/accueil.css"); ?>">
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="<?php echo base_url("welcome/bienvennue"); ?>">Accueil</a></li>
          <li><a href="<?php echo base_url("welcome/journal"); ?>">Journal</a></li>
          <li><a href="<?php echo base_url("welcome/comptable"); ?>">Plan Comptable</a></li>
          <li><a href="<?php echo base_url("welcome/codeJournaux"); ?>"> CodeJourneau</a></li>
          <li><a href="<?php echo base_url("welcome/tiers"); ?>">Plan Tiers</a></li>
          <li><a href="<?php echo site_url('journalAchat/verification');?>">Grand Livre</a></li>
          <li><a href="<?php echo site_url('journalAchat/verificationBalance');?>">Balance</a></li>
          <li><a href="<?php echo site_url('balance/Actif');?>">Compte Actif</a></li>
          <li><a href="<?php echo site_url('balance/Passif');?>">Compte Passif</a></li>
          <li><a href="<?php echo site_url('balance/Resultat');?>">Compte de resultat</a></li>
          <li><a href="<?php echo site_url('journalAchat/seuil_rentabilite');?>">voir seuil de rentabilité</a></li>
          <li><a href="<?php echo site_url("Achat/achatAnalyse"); ?>">Achat Detail</a></li>
          <li><a href="<?php echo site_url("Centre/formulaireCentre") ;?>">Structure Centre</a></li>
          <li><a href="<?php echo site_url("Centre/getCentrestropr") ;?>">About Centre</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <center><h1>Bienvenue</h1></center>
        
      </div>
    </main>
  </body>
</html>
