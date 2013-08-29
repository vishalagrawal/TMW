<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Weight_maximization_report extends CI_Controller {

	public function index()
	{
		// get the data from the lanes table
		$this->load->model('Detail_from_tmw_combinations');
		$weight_maximation_report = $this->Detail_from_tmw_combinations->create_weight_maximization_report();

		// create array to send to view
		$data = array(
			'title' 		  			=> 'Weight Maximization Report',
			'weight_maximation_report' 	=> $weight_maximation_report
		);
		
		// load the data in the view
		$this->load->view('weight_maximization_report_v1',$data);
	}
}

/* End of file weight_maximization_report.php */
/* Location: ./application/controllers/weight_maximization_report.php */