<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class JournalAchat extends CI_Controller {
    /*public function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('adminId')) redirect("./login/loginAdmin");
    }
    */

    public function newJournalAchat() {
        $this->load->model('JournalAchat_model', 'model');

        $jour = $this->input->post('jour');
        $numero = $this->input->post('piece');
        $piece = $this->input->post('reference');
        $compte = $this->input->post('compte1');
        if(strlen($compte) == 1) {
            $compte = $compte."0000";
        } elseif(strlen($compte) == 2) {
            $compte = $compte."000";
        } elseif(strlen($compte) == 3) {
            $compte = $compte."00";
        } elseif(strlen($compte) == 4) {
            $compte = $compte."0";
        } else {
            // Si le nombre entré contient déjà 5 chiffres, on ne fait rien
        }
        
        $tiers = $this->input->post('compte2');
        $libelle = $this->input->post('libelle');
        $type = $this->input->post('type');
        $devise = $this->input->post('devise');
        $debit = $this->input->post('debit');
        $credit = $this->input->post('credit');
        $montant=$this->input->post('montant');
        $this->model->insertNewJournal($jour,$numero,$piece,$compte,$tiers,$libelle,$type,$debit,$credit,$devise,$montant);
        //redirect("./welcome/index");
        $this->load->view('SaisieJournal');
    }

    public function verification()
    {
        $this->load->model('JournalAchat_model', 'model');
        $this->model->verificationSommeLivre();
        $val=$this->model->getAllJournalEcriture();
        $data['reponse'] = $val;
        //var_dump($valiny);
        $this->load->view('grandLivre',$data);
        //redirect("./welcome/balance");
                
    }
    
    public function verificationJournal()
    {
        $this->load->model('JournalAchat_model', 'model');
        $this->model->verificationSommeLivre();
        $val=$this->model->getAllJournalEcriture();
        $data['reponse'] = $val;
        //var_dump($valiny);
        $this->load->view('JournalAffichageNouveau',$data);
        //redirect("./welcome/balance");
                
    }
    
    public function verificationJournalBalance()
    {
        $this->load->model('JournalAchat_model', 'model');
        $this->model->verificationSommeLivre();
        $val=$this->model->getAllJournalEcriture();
        $data['reponse'] = $val;
        //var_dump($valiny);
        $this->load->view('BalanceAffichageNouveau',$data);
        //redirect("./welcome/balance");
                
    }
    

    public function verificationBalance()
    {
        $this->load->model('JournalAchat_model', 'model');
        $this->model->verificationSommeLivre();
        $val=$this->model->getAllJournalAchat();
        $data['reponse'] = $val;
        //var_dump($valiny);
        $this->load->view('Balance',$data);
        //redirect("./welcome/balance");
                
    }


    

    public function verificationTotalAchat()
    {
        $this->load->model('JournalAchat_model', 'model');   
        $isBalanceEqual = $this->model->verificationSommeAchat('Achat');
            if($isBalanceEqual) {
                $val=$this->model->getJournalAchatValider();
                $data['reponse'] = $val;
                $donnee['total']=$isBalanceEqual;
                $this->load->view('TexteValidation1',$donnee);
               // $this->load->view('JourneauxAffichage2',$data);
            } else {
                echo "ecriture non valide";
            }
    }
    public function verificationAchat()
    {
        $this->load->model('JournalAchat_model', 'model');           
         $isBalanceEqual =$this->model->verificationSommeAchat('Achat');
             if($isBalanceEqual) {
                 $val=$this->model->getJournalAchatValider();
                 $data['reponse'] = $val;
                $donnee['total']= $isBalanceEqual;
                 $this->load->view('JourneauxAffichage',$data);
             } 
    }
    


    public function verificationTotalVente()
    {
        $this->load->model('JournalAchat_model', 'model');   
        $isBalanceEqual = $this->model->verificationSommeVente('Vente');
            if($isBalanceEqual) {
                $val=$this->model->getJournalBanqueValider();
                $data['reponse'] = $val;
                $donnee['total']=$isBalanceEqual;
                $this->load->view('TexteValidation2',$donnee);
               // $this->load->view('JourneauxAffichage2',$data);
            } else {
                echo "ecriture non valider";
            }
    }

    public function verificationVente()
    {
        $this->load->model('JournalAchat_model', 'model');      
        $isBalanceEqual =$this->model->verificationSommeVente('Vente');
            if($isBalanceEqual) {
                $val=$this->model->getJournalVenteValider();
                $data['reponse'] = $val;
                $donnee['total']=$isBalanceEqual;
                $this->load->view('JourneauxAffichage3',$data);
            } 
    }
    

    public function verificationTotalBanque()
    {
        $this->load->model('JournalAchat_model', 'model');   
        $isBalanceEqual = $this->model->verificationSommeBanque('Banque');
            if($isBalanceEqual) {
                $val=$this->model->getJournalBanqueValider();
                $data['reponse'] = $val;
                $donnee['total']=$isBalanceEqual;
                $this->load->view('TexteValidation',$donnee);
               // $this->load->view('JourneauxAffichage2',$data);
            } else {
                echo "ecriture non valider";
            }
    }
    public function verificationBanque()
    {
        $this->load->model('JournalAchat_model', 'model');   
        $isBalanceEqual = $this->model->verificationSommeBanque('Banque');
            if($isBalanceEqual) {
                $val=$this->model->getJournalBanqueValider();
                $data['reponse'] = $val;
                $donnee['total']=$isBalanceEqual;
                //$this->load->view('JourneauxAffichage2',$donnee);
                $this->load->view('JourneauxAffichage2',$data);
            } 
    }
          
        //var_dump($valiny);
        //redirect("./welcome/balance");
                
    
    
    public function total()
    {
        $this->load->model('JournalAchat_model', 'model');
        $rep=$this->model->getJournalAchat('Achat');
        $ver=$this->model->verificationSommeAchat('Achat');
        $valiny['journal'] = $rep;
        $this->load->view('Total',$valiny);
    }
    public function total1()
    {
        $this->load->model('JournalAchat_model', 'model');
        $rep=$this->model->getJournalBanque('Banque');
        $this->model->verificationSommeBanque('Banque');
        $valiny['journal'] = $rep;
        $this->load->view('Total1',$valiny);
    }
    public function total2()
    {
        $this->load->model('JournalAchat_model', 'model');
        $rep=$this->model->getJournalVente('Vente');
        $ver=$this->model->verificationSommeVente('Vente');
        $valiny['journal'] = $rep;
        $this->load->view('Total2',$valiny);
    }
  
    public function total3()
    {
        $this->load->model('JournalAchat_model', 'model');
        $val=$this->model->getTotal();
        $ver=$this->model->verificationSommeLivre();
        $data['journal'] = $val;
        $this->load->view('Total3',$data);

                
    }  
  
    
    public function exportPdf1() {
        // Charger la bibliothèque PDF
        $this->load->library('pdf');
    
        // Créer un nouveau document PDF
        $pdf = new Pdf();
    
        $pdf->AddPage();
         $pdf->SetFont('Arial','B',16);
        $pdf->Cell(40,10,'Hello World !');
        $pdf->Output();
    }

    public function exportPdf()
    {
        
        // Charger la bibliothèque PDF
        $this->load->library('pdf');
       // Instanciation de la classe dérivée
       $pdf = new Pdf();
      $pdf->AliasNbPages();
      $pdf->AddPage();
      $pdf->SetFont('Times','',12);
       for($i=1;$i<=40;$i++)
           $pdf->Cell(0,10,'Impression de la ligne numéro '.$i,0,1);
      $pdf->Output();
    }
       

 
    public function tableauPdf1()
   {
       // Charger la bibliothèque PDF
        $this->load->library('pdf');
       
        $pdf = new PDF();
        // Titres des colonnes
        $header = array('Pays', 'Capitale', 'Superficie (km²)', 'Pop. (milliers)');
        // Chargement des données
        $paysFile = base_url('assets/pays.txt');
        // $data = file($paysFile);
        $data = $pdf->LoadData($paysFile);
        $pdf->SetFont('Arial','',14);
        $pdf->AddPage();
        $pdf->BasicTable($header,$data);
        $pdf->AddPage();
        $pdf->ImprovedTable($header,$data);
        $pdf->AddPage();
        $pdf->FancyTable($header,$data);
        $pdf->AliasNbPages();
        $pdf->Output();
   }
   
////////////////affichage donner avy anaty base////////////////////////////////////
public function tableauPdf()
{
    // Charger la bibliothèque PDF
    $this->load->library('pdf');
   
    $this->load->model('PlanComptable_model', 'model');

    // Récupérer les données de la base de données
    $data['records'] = $this->model->getAllCompte(); // Remplacez 'model' par votre modèle de base de données

    $header = array('Numero', 'Nom');

    // Charger la bibliothèque PDF (assurez-vous d'avoir correctement intégré votre bibliothèque personnalisée)
    $pdf = new PDF();

    // Définir les métadonnées du PDF
    $pdf->SetCreator('CodeIgniter');
    $pdf->SetAuthor('Votre nom');
    $pdf->SetTitle('Titre du PDF');
    $pdf->SetSubject('Sujet du PDF');

    // Ajouter une page
    $pdf->AddPage();

    // Parcourir les enregistrements et générer le contenu du PDF
    foreach ($data['records'] as $record) {
        $pdf->Cell(40, 10, $record['Numero'], 1, 0); // Modifier la sortie en fonction de votre structure de données
        $pdf->Cell(100, 10, $record['Nom'], 1, 1);
    }
    $pdf->AliasNbPages();
    // Générer le fichier PDF et le télécharger
    $pdf->Output();
}




    public function seuil_rentabilite() {
        $cout_fixe_total = 10000; // Montant des coûts fixes totaux
        $prix_unitaire = 50; // Prix unitaire de vente
        $cout_variable_unitaire = 30; // Coût variable unitaire
        $this->load->model('JournalAchat_model','model');
        $seuil_rentabilite =$this->model->calculer_seuil_rentabilite($cout_fixe_total, $prix_unitaire, $cout_variable_unitaire);
        echo "Le seuil de rentabilité est de : " . $seuil_rentabilite . " unités vendues.";
    }

    //model 
    function calculer_cout_de_revient($id_produit) {
        // Charger le modèle de produit
        $this->load->model('Produit_model');
    
        // Récupérer les informations du produit
        $produit = $this->Produit_model->get_produit($id_produit);
    
        // Calculer le coût direct
        $cout_direct = $produit->prix_matiere_premiere + $produit->prix_main_d_oeuvre;
    
        // Calculer le coût indirect
        $cout_indirect = $produit->prix_energie + $produit->prix_amortissement + $produit->frais_generaux;
    
        // Calculer le coût de revient total
        $cout_total = $cout_direct + $cout_indirect;
    
        // Retourner le coût de revient
        return $cout_total;
    }
    public function afficher_cout_de_revient($id_produit) {
        // Calculer le coût de revient
        $cout = $this->calculer_cout_de_revient($id_produit);
    
        // Afficher le coût de revient à l'utilisateur
        echo 'Le coût de revient du produit est de ' . $cout . ' euros.';
    }

}

?>