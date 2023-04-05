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
          <li><a href="<?php echo base_url("welcome/accueil"); ?>">Journal</a></li>
          <li><a href="<?php echo base_url("welcome/comptable"); ?>">Plan Comptable</a></li>
          <li><a href="<?php echo base_url("welcome/codeJournaux"); ?>"> CodeJourneau</a></li>
          <li><a href="<?php echo base_url("welcome/tiers"); ?>">Plan Tiers</a></li>
          <li><a href="<?php echo base_url("welcome/grandLivre"); ?>">Grand Livre</a></li>
          <li><a href="<?php echo base_url("welcome/bienvennue"); ?>">Balance</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <center><h1>Bienvenue</h1></center>
      <div id="info">
        <ul id="detail">
          <li>Nom:</li>
          <li>Logo:</li>
          <li>Adresse:</li>
        </ul>
        
      </div>
    </main>
  </body>
</html>
