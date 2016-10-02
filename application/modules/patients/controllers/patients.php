<?php
class Patients extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function inc_home(){
		$data['rs'] = new Patient();
		$data['rs']->where('status = "approve"')->order_by('id','asc')->get(5);
		$this->load->view('inc_home',$data);
	}
	
	function index(){
		$data['rs'] = new Patient();
		$data['rs']->where('status = "approve"')->get_page();
		$this->template->title('คนไข้ของเรา - DrTooth Dental Clinic');
		$this->template->build('index',$data);
	}
	
	function view($id){
		$data['rs'] = new Patient($id);
		// $this->template->title(lang_decode($data['rs']->name).' - DrTooth Dental Clinic');
        // $this->template->append_metadata( meta('description',lang_decode($data['rs']->detail)));
		$this->template->build('view',$data);
	}
}
?>