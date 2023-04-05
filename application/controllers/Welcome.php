<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('login');	
		
	}		

	public function accueil()
	{
	    //$this->load->view('PlanComptable');
		$this->load->view('accueil');
	}
	public function voir()
	{
		$this->load->view('Plus');
		
	}	
	public function comptable()
	{
		$this->load->view('PlanComptable');
	}
	public function codeJournaux()
	{
		$this->load->view('Journeaux');
	}
	public function formulaire()
	{
		$this->load->view('formulaire');
	}
	public function journal()
	{
		$this->load->view('SaisieJournal');
	}
	public function balance()
	{
		$this->load->view('Balance');
	}
	public function grandLivre()
	{
		$this->load->view('GrandLivre');
	}	
	public function bienvennue()
	{
		$this->load->view('accueil');
	}
	public function tiers()
	{
		$this->load->view('PlanTiers');
	}
}
