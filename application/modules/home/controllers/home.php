<?php
class Home extends Public_Controller {

	function __construct()
	{
		parent::__construct();	
	}
	
	function index()
	{
		$this->template->set_layout('home');
		$this->template->build('index');
	}
	
	function sidebar(){
		$data['categories'] = new Category();
		$data['categories']->where('parents != 0 and module = "talks"')->order_by('id','asc')->get();
		
		$data['address'] = new Address(1);
		$this->load->view('sidebar',$data);
	}
	
	public function lang($lang)
	{
		$this->load->library('user_agent');
		$this->session->set_userdata('lang',$lang);
		
		redirect($this->agent->referrer());
	}
}
?>