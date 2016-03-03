<?php
class Dentists extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function inc_home(){
		$data['rs'] = new Dentist();
		$data['rs']->where('status = "approve"')->order_by('id','desc')->get();
		$this->load->view('inc_home',$data);
	}
	
	function index(){
		$data['rs'] = new Category();
		$data['rs']->where('module = "dentists" and parents <> 0')->get();
		
		$data['dentists'] = new Dentist();
		$data['dentists']->order_by('id','desc')->get();
		
		$this->template->title('ทีมทันตแพทย์ของเรา - DrTooth Dental Clinic');
		$this->template->build('index',$data);
	}
	
	function view($id){
		$data['rs'] = new Dentist($id);
		$this->template->title(lang_decode($data['rs']->name).' - DrTooth Dental Clinic');
		$this->template->append_metadata( meta('description',lang_decode($data['rs']->name).strip_tags(lang_decode($data['rs']->detail))));
		$this->template->build('view',$data);
	}
}
?>