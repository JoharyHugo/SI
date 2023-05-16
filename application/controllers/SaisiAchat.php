<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SaisiAchat extends CI_Controller{

  
    public function newAchat() {
        $this->load->model('SaisiAchat_model', 'model');

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
        $prix=$this->input->post('pu');
        $quantite=$this->input->post('Quantite');
        $unite=$this->input->post('unite');
        $credit=$this->input->post('credit');
        $this->model->insertNewAchat($jour,$numero,$piece,$compte,$tiers,$libelle,$prix,$quantite,$unite,$credit);
        //redirect("./welcome/index");
        $this->load->view('SaisieAchat');
    }

    public function achatAnalyse(){

      $this->load->model('SaisiAchat_model','model');
      $achat=$this->model->getAllAchat();
      $data['achat']=$achat;
      $this->load->view('TabAchatJournal', array('data' => $data));
    }


  
    public function verificationTotalAchat()
    {
        $this->load->model('SaisiAchat_model', 'model');   
        $isBalanceEqual = $this->model->verificationSommeAchat();
            if($isBalanceEqual) {
                $val=$this->model->getAllAchat();
                $data['achat'] = $val;
                $donnee['total']=$isBalanceEqual;
                $this->load->view('TexteValidationAchat',$donnee);
               // $this->load->view('JourneauxAffichage2',$data);
            } else {
                echo "ecriture non valide";
            }
    }
    
    public function total1()
    {
        $this->load->model('SaisiAchat_model', 'model');
        $rep=$this->model->getTotalAchat();
        $this->model->verificationSommeAchat();
        $valiny['journal'] = $rep;
        $this->load->view('TotalAchat',$valiny);
    }

    
////////////////affichage donner avy anaty base////////////////////////////////////
public function tableauPdf()
{
    // Charger la bibliothèque PDF
    $this->load->library('pdf');
   
    $this->load->model('SaisiAchat_model', 'model');

    // Récupérer les données de la base de données
    $data['records'] = $this->model->getAllAchatAnalytique(); // Remplacez 'model' par votre modèle de base de données

    
    // Récupérer les données de la base de données
    $data1['records1'] = $this->model->getAllAchatCentreAdminVariable(); // Remplacez 'model' par votre modèle de base de données

   // Récupérer les données de la base de données
   $data2['records2'] = $this->model->getAllAchatCentreAdminFixe();

   $data3['records3']= $this->model->getAllAchatCentreUsineVariable();
   $data4['records4']= $this->model->getAllAchatCentreUsineFixe();

   
   $data5['records5']= $this->model->getAllAchatCentrePlantationVariable();
   $data6['records6']= $this->model->getAllAchatCentrePlantationFixe();


   $totalAdmin['totalAdmin']=$this->model->getTotalAdmin();
   $totalUsine['totalUsine']=$this->model->getTotalUsine();
   $totalPlantation['totalPlantation']=$this->model->getTotalPlantation();


    $header = array('Rubrique', 'Total','Unite','Nature');

    $header1 = array('Rubrique', 'Pourcentage','Variable','Fixe');

    $header2=array('Total Adm/Dist','Total Usine','Total Plantation');

    // Charger la bibliothèque PDF (assurez-vous d'avoir correctement intégré votre bibliothèque personnalisée)
    $pdf = new PDF();

    // Définir les métadonnées du PDF
    $pdf->SetCreator('CodeIgniter');
    $pdf->SetAuthor('Votre nom');
    $pdf->SetTitle('Analytique');
    $pdf->SetSubject('Sujet du PDF');

    // Ajouter une page
    $pdf->AddPage();

    // Calculer la largeur des cellules de l'en-tête
    $cellWidth = 54;
    $cellHeight = 15;

    // Afficher l'en-tête du tableau pour $data
    foreach ($header as $col) {
        $pdf->Cell($cellWidth, $cellHeight, $col, 1, 0, 'C');
    }
    $pdf->Ln(); // Aller à la ligne après l'en-tête du tableau

    // Parcourir les enregistrements de $data et générer le contenu du tableau
    foreach ($data['records'] as $record) {
        $pdf->Cell($cellWidth, $cellHeight, $record['Rubrique'], 1, 0, 'C');
        $pdf->Cell($cellWidth, $cellHeight, $record['Total'], 1, 0, 'C');
        $pdf->Cell($cellWidth, $cellHeight, $record['Unite'], 1, 0, 'C');
        $pdf->Cell($cellWidth, $cellHeight, $record['Nature'], 1, 1, 'C');
    }

    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(50,20,'CENTRE ADMINISTRATION/DISTRIBUTION');
        // Aller à la ligne avant le deuxième tableau
    $pdf->Ln();

    // Afficher l'en-tête du tableau pour $data1
    foreach ($header1 as $col) {
        $pdf->Cell($cellWidth, $cellHeight, $col, 1, 0, 'C');
    }
    $pdf->Ln(); // Aller à la ligne après l'en-tête du tableau

    // Parcourir les enregistrements de $data1 et générer le contenu du tableau
    foreach ($data1['records1'] as $record1) {
        foreach ($data2['records2'] as $record2) {
        $pdf->Cell($cellWidth, $cellHeight, $record1['Rubrique'], 1, 0, 'C');
        $pdf->Cell($cellWidth, $cellHeight, $record1['pourcentage'], 1, 0, 'C');
        $pdf->Cell($cellWidth, $cellHeight, $record1['Variable'], 1, 0, 'C');
        $pdf->Cell($cellWidth, $cellHeight, $record2['Fixe'], 1, 1, 'C');
        }
    }


    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(50,20,'CENTRE USINE');
        // Aller à la ligne avant le deuxième tableau
    $pdf->Ln();

    // Afficher l'en-tête du tableau pour $data1
    foreach ($header1 as $col) {
        $pdf->Cell($cellWidth, $cellHeight, $col, 1, 0, 'C');
    }
    $pdf->Ln(); // Aller à la ligne après l'en-tête du tableau

    // Parcourir les enregistrements de $data1 et générer le contenu du tableau
    foreach ($data3['records3'] as $record3) {
        foreach ($data4['records4'] as $record4) {
        $pdf->Cell($cellWidth, $cellHeight, $record3['Rubrique'], 1, 0, 'C');
        $pdf->Cell($cellWidth, $cellHeight, $record3['pourcentage'], 1, 0, 'C');
        $pdf->Cell($cellWidth, $cellHeight, $record3['Variable'], 1, 0, 'C');
        $pdf->Cell($cellWidth, $cellHeight, $record4['Fixe'], 1, 1, 'C');
        }
    }


    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(50,20,'CENTRE PLANTATION');
        // Aller à la ligne avant le deuxième tableau
    $pdf->Ln();

    // Afficher l'en-tête du tableau pour $data1
    foreach ($header1 as $col) {
        $pdf->Cell($cellWidth, $cellHeight, $col, 1, 0, 'C');
    }
    $pdf->Ln(); // Aller à la ligne après l'en-tête du tableau

    // Parcourir les enregistrements de $data1 et générer le contenu du tableau
    foreach ($data5['records5'] as $record5) {
        foreach ($data6['records6'] as $record6) {
        $pdf->Cell($cellWidth, $cellHeight, $record5['Rubrique'], 1, 0, 'C');
        $pdf->Cell($cellWidth, $cellHeight, $record5['pourcentage'], 1, 0, 'C');
        $pdf->Cell($cellWidth, $cellHeight, $record5['Variable'], 1, 0, 'C');
        $pdf->Cell($cellWidth, $cellHeight, $record6['Fixe'], 1, 1, 'C');
        }
    }  



    
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(50,20,'Total');
        // Aller à la ligne avant le deuxième tableau
    $pdf->Ln();

    // Afficher l'en-tête du tableau pour $data1
    foreach ($header2 as $col) {
        $pdf->Cell($cellWidth, $cellHeight, $col, 1, 0, 'C');
    }
    $pdf->Ln(); // Aller à la ligne après l'en-tête du tableau

    // Parcourir les enregistrements de $data1 et générer le contenu du tableau
    foreach ($totalAdmin['totalAdmin'] as $totalAdmin) {
        foreach ($totalUsine['totalUsine'] as $totalUsine) {
            foreach ($totalPlantation['totalPlantation'] as $totalPlantation) {
        $pdf->Cell($cellWidth, $cellHeight, $totalAdmin['Total'], 1, 0, 'C');
        $pdf->Cell($cellWidth, $cellHeight, $totalUsine['Total'], 1, 0, 'C');
        $pdf->Cell($cellWidth, $cellHeight, $totalPlantation['Total'], 1, 0, 'C');
        }
    }


    $pdf->AliasNbPages();
// Générer le fichier PDF et le télécharger
$pdf->Output();


}
}
}
?>