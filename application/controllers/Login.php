<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	/*public function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('id')) redirect("./login/loginAdmin");
    }*/
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

	public function __construct()
	{
		parent::__construct();
	}

	public function index()		// Charge la page login du client
	{
		$this->load->view('loginClient');
	}		

	public function inscription()		// Charge la page inscription
	{
		$this->load->view('formulaire');
	}

	public function checkLoginUser()		// Verifie le mot de passe de l'user
	{
		$this->load->model('login_model');

		$mail = $this->input->post('username');
		$mdp = $this->input->post('pass');

		$test = $this->login_model->checkLoginUser($mail, $mdp);

		if ($test == null) {
			$data['nom'] = $mail;
			$data['erreur'] = "erreur";
			$this->load->view('login', $data);
		}
		else {
			$this->session->set_userdata('userId', $test);
			redirect("./welcome/accueil");
            //$this->load-view('PlanTiers');
		}
	}

	
	// Inscription nouveau client
	public function insertNewClient()
	{
		$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$tel = $this->input->post('tel');
		$mail = $this->input->post('mail');
		$mdp = $this->input->post('mdp');

		if ($mdp == "" || $prenom == "" || $tel == "" || $mail == "" || $mdp == "") {
			$data['erreur'] = "Veillez remplir tous les champs";
			$this->load->view('signup', $data);
		}
		else {
			$this->load->model('login_model', 'model');
			$this->model->insertNewUser($nom, $prenom, $mdp, $mail, $tel);
	
			$test = $this->model->checkLoginUser($mail, $mdp);
	
			$this->session->set_userdata('userId', $test);
            redirect("./welcome/accueil");

			//redirect("./accueil/index");
            //$this->load->view('PlanTiers');
		}
	}

	// Les fonctions  de deconnexion
	public function deconnectClient()
	{
		$this->session->unset_userdata('userId');
		$this->load->view('loginClient');
	}

	public function deconnectAdmin()
	{
		$this->session->unset_userdata('adminId');
		$this->load->view('loginAdmin');
	}
}
