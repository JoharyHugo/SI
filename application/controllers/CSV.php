<?php 

/**
 * 
 */
class CSV extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	public function importer(){
		$this->load->model('CSV_model');

		$tab = $this->CSV_model->importCSV('',';');
	}

}
?>