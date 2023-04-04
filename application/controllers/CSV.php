<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    class CSV extends CI_Controller {
        /*public function import_xls_data() {
            $file_path = 'D/PCG-ECRITURE.xls';
            $table_name = 'tablecompte';
    
            $this->load->model('testCSV_model');
            $this->testCSV_model->import_data_from_xls($file_path, $table_name);
        }*/
		public function import_xls_data() {
            $this->load->model('testCSV_model');
            $this->testCSV_model->import_xls_to_db();
        }		
}
