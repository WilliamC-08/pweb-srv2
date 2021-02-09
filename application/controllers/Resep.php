<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep extends CI_Controller {

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
		$this->load->view('Daftar_Resep/list');
	}

  public function ayampanggangbumbumerah()
	{
		$this->load->view('Daftar_Resep/ayampanggangbumbumerah');
	}

  public function brekecekikan()
	{
		$this->load->view('Daftar_Resep/brekecekikan');
	}

  public function cotomakassar()
	{
		$this->load->view('Daftar_Resep/cotomakassar');
	}

  public function garangasem()
	{
		$this->load->view('Daftar_Resep/garangasem');
	}

  public function lontongsayurmedan()
	{
		$this->load->view('Daftar_Resep/lontongsayurmedan');
	}

  public function miegomakpedas()
	{
		$this->load->view('Daftar_Resep/miegomakpedas');
	}

  public function nasigrombyang()
	{
		$this->load->view('Daftar_Resep/nasigrombyang');
	}

  public function pallubasa()
	{
		$this->load->view('Daftar_Resep/pallubasa');
	}

  public function RendangDagingPadang()
	{
		$this->load->view('Daftar_Resep/RendangDagingPadang');
	}

  public function Sambalpetaiudang()
	{
		$this->load->view('Daftar_Resep/Sambalpetaiudang');
	}

  public function sateayammadura()
	{
		$this->load->view('Daftar_Resep/sateayammadura');
	}

}
