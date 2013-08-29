<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dispatch_sheets extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// create array to send to view
		$data = array(
			'title' 		  			=> 'Dispatch Sheets'
		);

		$this->load->view('dispatch_sheets_v1', $data);
	}
}

/* End of file dispatch_sheets.php */
/* Location: ./application/controllers/dispatch_sheets.php */