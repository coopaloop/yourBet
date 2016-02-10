<?php

class Bets extends CI_Controller {

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
		$this->load->view('current_bets');
	}
        
        public function today($user = 'josh')
        {
            $data = array('title' => 'Josh\'s Bets');
            $this->load->view('templates/header', $data);
            $this->load->view('bets/'.$user, $data);
            $this->load->view('templates/footer', $data);
        }
}