<?php
class Downloads extends Public_Controller{
	function __construct(){
		parent::__construct();
	}
	
	function inc_home()
	{
		$data['rs'] = new Category();
		$data['rs']->where('module = "downloads" and parents <> 0')->order_by('id','asc')->get();
		$this->load->view('inc_home',$data);
	}
	
	function lists(){
		$data['rs'] = new Category();
		$data['rs']->where('module = "downloads" and parents <> 0')->order_by('id','asc')->get();
		$this->template->build('list',$data);
	}
	
	function download($id){
		$rs = new Download($id);
		$rs->counter();
		$this->load->helper('download');
		$data = file_get_contents(urldecode($rs->files));
		$name = basename($rs->files);
		force_download($name, $data); 
	}
}
?>