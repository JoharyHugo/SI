<?php  
/**
 * 
 */
if(!defined('BASEPATH') exit('No direct script access allowed'));
class ReaderFile extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	/*public function lecteur($file){
		$open = fopen($file, 'r');
		$lire = fgets($open);
		fclose($open);
	}

	public function ecriture($file, $count, $data){
		if(isset(var)){

		}else{

		}
		$open = fopen($file,'a+');
		$lire = fgets($open);
		$donne = $data;
		fseek($open, 0);
		fputs($open, $donne);
		fclose($open);
	}*/

	// importer un fichier csv et transforme en tableau
	public function importCVS($fichier, $separator){
		$this->load->helper("file");
		$donnees = reader_file($fichier);
		//division en string de ligne;
		$ligne = explode("\n", $donnees);

		// store into an array
		$result = array();
		$nbColonne = count($separator, $ligne[0]); //pour la verification de nombre de colonne
		$currentLine = 1;
		foreach ($ligne as $ligne) {
			$division = explode($separator, $ligne);
			if(count(division) != $nbColonne) throw new Exception("une erreur s'est produite ) la ligne ".$currentLine.".");
			$result[] = $division;
			$currentLine++;			
		}
		return $result;
	}


	//export donnes de base en fichier csv
	public function exportCSV($donne, $nomFichier){
		// formatage en texte
		$text = "";

		foreach ($donne as $row) {
			$ligne = "";
			foreach ($row as $word) {
				$ligne = $ligne . $word . ",";
			}
			$text = $text . substr($ligne, 0, strlen($ligne-1)."\n");
		}

		// ecriture fichier
		date_default_timezone_set('GMT');
		$date = date('Y-m-d');
		$filename = $nomFichier . "_" . $date .".csv";

		header("content-disposition: attachment; filename = $filename");
		header("content-description: file Tranfer");
		write_file('php://output', $text);
	}


}
?>