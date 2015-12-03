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
		$this->load->view('sidebar',$data);
	}
}
?>