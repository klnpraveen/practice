<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items extends CI_Controller {

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
		$this->load->model('Items_model');
		$data['item'] = $this->Items_model->dplist();
		$data['gt'] = $this->Items_model->get_items();
		$data['upc'] = $this->Items_model->get_upc();
		$data['cnt'] = $this->Items_model->getAffectedRows();
		//echo "<pre>";print_r($data);echo "</pre>";exit;
		$this->load->view('add_items', $data);
	}
	public function disp()
	{
		$data['sel'] = $this->input->post('dp1');
		$key['ss'] = $this->input->post('dp1');
		
		// echo $option[$key];
		$this->load->view('disp',$key);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */